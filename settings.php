<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="chat.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="settings.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div class="container container_style">
            <form method="post" action="settings_submit.php">
                <h1>Change Password</h1>
                <div class="form-group">
                    <input type="password" class="form-control" id="name" name="oldpwd" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="email" name="newpwd" placeholder="New Password Minimum (6 characters)">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="renewpwd" placeholder="Re-type New Password">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
            </form>
        </div>
        <br><br><br><br>
        <?php
            if(isset($_SESSION['email']))
            {
                include 'chat.php';
            }
        ?>
        <br><br><br><br><br><br><br><br><br><br><br>
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        displayFromDatabase();
        setInterval(displayFromDatabase(), 1);
        $("#btn-chat").click(function(){
            var message=$("#btn-input").val();
            $.ajax({
              url: "ajax.php",
              type: "POST",
              async: false,
              data: {
                  "done" : 1,
                  "messages" : message
              },
              success: function(data){
                  displayFromDatabase();
                  $("#btn-input").val('');
              }
            });
        });
        setInterval(function(){
            $('display_area').load(displayFromDatabase()).fadeIn("slow");
        }, 1000);
    });
    function displayFromDatabase(){
        $.ajax({
            url: "ajax.php",
            type: "POST",
            async: false,
            data: {
                "display": 1
            },
            success: function(d){
                $("#display_area").html(d);
            }
        });
    }
    </script>
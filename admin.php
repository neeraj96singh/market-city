<?php
require 'includes\common.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="chat.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Fashion Street</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
         </div>
    </div>
    </div>
        <h1 style="text-align: center">Admin Page</h1>
        <div class="container">
    <div class="row" style="height: 500px">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="panel panel-primary" style="height: 500px">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat with our User
                </div>
                <div class="panel-body" id="display_area" style="height: 400px">
                    
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" name="message" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-warning btn-sm" id="btn-chat">
                                Send
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
              url: "adminajax.php",
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
            url: "adminajax.php",
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
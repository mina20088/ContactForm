<?php
$Message = "";
$Ticket_ID = "";
$Time_Stored = "";
     if(isset($_GET['Message'])||isset($_GET['Ticket_ID'])||isset($_GET['Time_Stored'])){
         $Message = $_GET['Message'];
         $Ticket_ID = $_GET['Ticket_ID'];
         $Time_Stored = $_GET['Time_Stored'];
     }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap File-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Normal styleSheet-->
    <link rel="stylesheet" href="www/CSS/intlTelInput.css">
    <link rel="stylesheet" href="www/CSS/index.css">
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Confirmation</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card text-center">
                <div class="card-header">
                    Confirmation
                </div>
                <div class="card-body">
                    <h5 class="card-title">Your Ticket ID Is : <?php echo $Ticket_ID?></h5>
                    <p class="card-text"><?php echo $Message?></p>
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
                <div class="card-footer text-muted">
                    <?php echo $Time_Stored?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

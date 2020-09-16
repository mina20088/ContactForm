<?php
$firstname = "";
$email = "";
$telephone ="";
$message = "";
if(isset($_GET['firstname'])||isset($_GET['email'])||isset($_GET['telephone'])||isset($_GET['message'])){
    $firstname = $_GET['firstname'];
    $email = $_GET['email'];
    $telephone = $_GET['telephone'];
    $message = $_GET['message'];
}
?>
<?php include 'Components/Error.php'?>
<div class="col-sm-12 col-md-5 col-lg-6">
    <form action="Process/ContactMeProcess.php" method="post">
        <h1 class="FormHeader">Please Fill The Form For Contact:</h1>
        <div class="form-group">
            <label for="Full Name">Full Name</label>
            <input type="text" class="form-control" name="FullName" placeholder="Full Name" id="Full Name" value="<?php echo $firstname?>">
            <?php if (isset($_GET['Error1'])):?>
                <span style="color: red"><?php echo '*'.$_GET['Error1']?></span>
            <?php elseif (isset($_GET['Err'])):?>
                <span style="color: red"><?php echo '*'.$_GET['Err']?></span>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="Email" placeholder="Email" id="Email" value="<?php echo $email?>">
            <?php if (isset($_GET['Error2'])):?>
                <span style="color: red"><?php echo '*'.$_GET['Error2']?></span>
            <?php endif;?>

        </div>
        <div class="input-group">
            <label for="telephone">Telephone</label>
            <br>
            <input id="hidden" type="hidden" name="full_Phone">
            <input type="text" class="form-control" name="telephone" placeholder="Telephone" id="telephone" value="<?php echo $telephone?>">
            <?php if (isset($_GET['Error3'])):?>
                <span style="color: red"><?php echo '*'.$_GET['Error3']?></span>
            <?php elseif (isset($_GET['Error5'])):?>
                <span style="color: red"><?php echo '*'.$_GET['Error5']?></span>
            <?php endif;?>
        </div>
        <div class="form-group">
            <label for="messagse">Message</label>
            <br>
            <textarea type="text" class="form-control" name="message" placeholder="Enter Your Messsage..." id="messagse"><?php echo $message?></textarea>
            <?php if (isset($_GET['Error4'])):?>
                <span style="color: red"><?php echo '*'.$_GET['Error4']?></span>
            <?php endif;?>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
            <input type="submit" class="btn btn-danger" name="Cancel" value="Cancel">
        </div>
    </form>
</div>
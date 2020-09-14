<?php
$errArray = [];
if(isset($_GET['Error1'])){
    array_push($errArray,$_GET['Error1']);
}
if(isset($_GET['Error2'])){
    array_push($errArray,$_GET['Error2']);
}
if(isset($_GET['Error3'])){
    array_push($errArray,$_GET['Error3']);
}
if(isset($_GET['Error4'])){
    array_push($errArray,$_GET['Error4']);
}
if(isset($_GET['Err'])){
    array_push($errArray,$_GET['Err']);
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul>
                <?php if($errArray):?>
                    <?php foreach ($errArray as $Err):?>
                        <?php if(isset($Err)):?>
                            <li class="alert alert-danger"><?php echo $Err?></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>

<?php

function ErrorArray(){
    $errArray = [];
    $Num_Of_Args = func_num_args();
    $args = func_get_args();
    for($i = 0; $i < $Num_Of_Args; $i++){
        if(isset($args[$i]) && $args != null){
            array_push($errArray,$args[$i]);
        }
    }
    return $errArray;
}

$ERRArray = ErrorArray($_GET['Error1'],$_GET['Error2'],$_GET['Error3'],$_GET['Error4'],$_GET['Error5'],$_GET['Err']);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul>
                <?php if(isset($errArray)):?>
                    <?php foreach ($errArray as $Errors):?>
                        <?php if(isset($Errors)):?>
                            <li class="alert alert-danger"><?php echo $Errors?></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>


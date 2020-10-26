<?php if(isset($error_message) && $error_message !=''){  ?>
    <div style="text-align: center;color: red;">
        <h3> <?php echo $error_message; ?>  </h3>
    </div>
<?php }?>


<?php if(isset($success_message) && $success_message !=''){  ?>
    <div style="text-align: center;color: green;">
        <h3 > <?php echo $success_message; ?>  </h3>
    </div>
<?php }?>
<?php include './src/view/head.php' ?> 
<?php include './src/view/header.php' ?>

<div class="container">
        <!-- <form action="add_user_form.php" method="POST"> -->
        <form class="mt-4" action="<?= $action ?>" method="POST">
            

            <div class="form-group">
               <label for="">email</label>
               <!-- is-invalid  -->
               <input
                value="<?= $email ?>" 
                class="form-control <?= $emailClass ?>"  
                name="email"  
                type="text">
               <div class="<?= $emailClassMessage ?>">
               
               </div> 
            </div>

            <div class="form-group">
               <label for="">Password</label>
               <!-- is-invalid  -->
               <input
                value="<?= $password?>" 
                class="form-control <?= $passwordClass ?>"  
                name="password"  
                type="text">
               <div class="<?= $passwordClassMessage ?>">
               
               </div> 
            </div>

            
            <button class="btn btn-primary mt-3" type="submit"><?= $submit ?></button>
            <div><?=$message?></div>


            </form>
    </div>
    
</body>
</html>
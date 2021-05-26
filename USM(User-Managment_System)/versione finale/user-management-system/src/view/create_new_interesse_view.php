<?php include './src/view/head.php'; ?>
<?php include './src/view/header.php'; ?>

<form action="<?=$action?>" method = "POST">
<div class="form-group">
    <label for="">Nuovo interesse</label>
    <input class="form-control <?= $interesseClass ?>"  name="nameInteresse" type="text">
</div>

<button class="btn btn-primary mt-3" type="submit"><?= $submit ?></button>
</form>
 
</body>
</html>
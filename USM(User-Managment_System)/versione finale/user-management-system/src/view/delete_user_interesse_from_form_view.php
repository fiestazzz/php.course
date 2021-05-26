<?php include './src/view/head.php'; ?>
<?php include './src/view/header.php'; ?>

<form action="<?=$action?>" method = "POST">
<div class="form-group">
    <label for="">Elimina interesse</label>
    <?php foreach ($listInteressi as $value) {?>
    <div class="form-check">
  <input class="form-check-input" name="idInteresse" type="radio" value="<?= $value->getInteresseId()?>" id="<?= $value->getInteresseId()?>">
  <label class="form-check-label" for="flexCheckDefault">
    <?= $value->getName()?>
  </label>
</div>
<?php } ?>
</div>
<div style="visibility:<?=$visibility?>"><?=$messaggio?></div>
<button class="btn btn-primary mt-3" type="submit"><?= $submit ?></button>
</form>
 
</body>
</html>
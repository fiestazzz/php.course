
<div class="form-group">
<label for="">Interessi Utente</label>
</div>
<?php foreach ($listInteressi as $value) {?>
    <div class="form-check">
  <input class="form-check-input" name="idInteresse" type="radio" value="<?= $value->getInteresseId()?>" id="<?= $value->getInteresseId()?>">
  <label class="form-check-label" for="flexCheckDefault">
    <?= $value->getName()?>
  </label>
</div>
<?php } ?>

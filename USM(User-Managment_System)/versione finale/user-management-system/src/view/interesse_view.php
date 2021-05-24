

<label for="">Interessi Utente</label>
<?php foreach ($listInteressi as $value) {?>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="<?= $value->getInteresseId()?>">
  <label class="form-check-label" for="flexCheckDefault">
    <?= $value->getName()?>
  </label>
</div>
<?php } ?>

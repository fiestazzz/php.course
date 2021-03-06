<?php

use sarassoroberto\usm\model\UserModel;

include './src/view/head.php' ?> 
<?php include './src/view/header.php' ?>


<div class="container">
<div class="border p-3 my-3">
<a class="btn btn-primary" href="./add_user_form.php">add new user</a>
<a class="btn btn-primary" href="./../../logout.php">Logout</a>
</div>
<table class="table">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>cognome</th>
        <th>data di nascita</th>
        <th>Interesse</th>
        <th width="1%" >action</th>
    </tr>
    <?php foreach($model->readAll() as $user ){ ?>
        <tr>
        <td width="1%"><?= $user->getUserId() ?></td>
        <td><?= $user->getFirstName()?></td>
        <td ><?= $user->getLastName() ?></td>
        <td ><?= $user->getBirthday() ?></td>
        <td><?= $model->readUserInteresse($user->getUserId()) !== null ? $model->readUserInteresse($user->getUserId())->getInteresseId() : "ciao" ?> </td>
        <td class="text-nowrap">
        <a href="edit_user.php?user_id=<?= $user->getUserId() ?>" class="btn btn-secondary">edit </a>
        <a href="delete_user.php?user_id=<?= $user->getUserId() ?>" class="btn btn-danger">delete </a>
        </td>
        </tr>
    <?php } ?>
        
</table>


</div>
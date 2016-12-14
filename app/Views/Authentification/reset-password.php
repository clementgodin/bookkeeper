<?php $this->layout('layout', ['title' => 'Reset Password']) ?>

<?php $this->start('main_content') ?>
    <h1></h1>
    <?php

    var_dump($_SESSION['errors']);
    var_dump($_SESSION['message']);
    unset($_SESSION['errors']);
    unset($_SESSION['message']);

?>

    <form action="<?= $this->url('auth.resetpassword') ?>" method="POST">
        
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input id="password" name="password" type="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="cf-password">Confirmer le mot de passe :</label>
            <input id="cf-password" name="cf-password" type="password" class="form-control">
            <input type="hidden" value="<?= $id ?>" name="id">
        </div>

        <button name="reset-password" class="btn btn-default">Changer mon mot de passe</button>
    </form>
<?php $this->stop('main_content') ?>
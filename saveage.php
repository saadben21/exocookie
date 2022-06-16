<?php
$age = null;
if(!empty($_POST['birthday'])){
    setcookie('birthday',$_POST['birthday']);
    $_COOKIE['birthday'] = $_POST['birthday'];
} 
if(!empty($_COOKIE['birthday'])){
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}

require 'index.php'; 
?>
<?php if($age >= 18):?>
    <h1>Vous êtes majeur vous avez droit au contenue</h1>
    <?php elseif($age !== null):?>
       <div class="alert alert-danger">vous n'avez pas l'age requit poour afficher le contenue</div>
    <?php else :?>
    <h1>Vous êtes mineur vous avez pas le droit au contenue</h1>
<form action=""method="post">
    <div class="form-group">
        <select name="birthday" class="form-control">
            <option value="">Choisissez votre année de naissance</option>
            <?php for($i =2010; $i > 1919; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">envoyer</button>

</form>

<?php
?>
<?php endif; ?>
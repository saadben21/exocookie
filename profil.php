<?php
$nom = null;
if(!empty($_GET['action']==='deconnecter')){
   unset($_COOKIE['utilisateur']);
    setcookie('utilisateur', '', time() - 3600, '/');

}
if(!empty($_COOKIE["utilisateur"])){
    $nom = $_COOKIE["utilisateur"];
}
if(!empty($_POST['nom'])){
    setcookie("utilisateur", $_POST['nom'], time() + 365*24*3600);
    $nom = $_POST['nom'];
}
require 'index.php';
?>
<?php if($nom): ?>
    <h1>Bonjour <?= htmlentities($nom) ?></h1>
    <a href="profil.php?action=deconnecter">se déconnecter</a>
<?php else: ?>
<form action=""method="post">
    <div class="form-group">
        <input class="form-control"name="nom"placeholder="Enter votre nom">
    </div>
    <button class="btn btn-primary">se connecter</button>
</form>
<?php endif; ?>

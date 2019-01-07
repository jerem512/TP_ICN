<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=ICN;charset=utf8', 'jeremydata', 'b302937ba5');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}
?> 
<?php
if(isset($_POST['login'], $_POST['password'])){
    $req=$bdd->prepare('SELECT id, login, password FROM users WHERE login = :login');
    $req->bindParam(':login',$_POST['login']);
    $resultat=$req->execute();
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
    var_dump($resultat);
}
if(!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
    // header("Refresh: 0; URL=admin.php");
}
else
{
    if($isPasswordCorrect){
        session_start();
        echo 'Vous êtes connectés !';
        $_SESSION['login'] = $resultat['login'];
        $_SESSION['id'] = $resultat['id'];
        // header("Refresh: 0; URL=news.php");
    }
    else{
        echo 'Mauvais identifiant ou mot d passe !';
        // header("Refresh: 0; URL=admin.php");
    }
}
?>
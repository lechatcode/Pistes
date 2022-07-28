<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="phpstylepistes.css"> 
    <title>Jeu de pistes</title>
</head>
<body>

<main>
<div class="hidden">
COUCOU !
ICI !
LE MOT DE PASSE EST PAS LOIN !
IL EST à LA LIGNE 51
</div>

<h1>Jeu de pistes !</h1>

<div class="intro">
<p class="center">Voici un petit jeu de pistes pour le "fun".</p>
<p class="center">Il y'a 4 épreuves pour 4 mots de passes.</p>
<p class="center">Les mots de passes sont à entrer en bas de cette page.</p>
<p class="center">GL HF.</p>
</div>

<p>Sfnajrjsy nqx wjsywjwjsy ifsx qf ktwjy. Juwnx ij ujzw nqx xtwynwjsy qjzwx fwrjx. Zsj rfns xvzjqjyynvzj fuufwz ijwwnjwj zs gznxxts. Knsjrjsy inxxnrzqj qj atqjzw htzuf qf rfns.</p>
<p>Hcvcngogpv egek p gwv cwewp ghhgv.</p>
<p>Kl yhnl sl zxblslaal jspxblah. Luyobtl k bul ohpul pujyvfhisl ps lalyubh. Bu nshcpva whyjvbyb sl joltpu. Eluvipvapxbl lahpa jl ylqla uhzhs.</p>
<p>Wrugx gh uluh ohv dyhqwxulhuv hwdlhqw yxoqhudeohv. Uljrohc yrxv v hafodpd oh vtxhohwwh. Rxl uhsrqgluhqw hq fkrhxu ohv dyhqwxulhuv. Ljqreohv phfuhdqwv frqwlqxd oh vtxhohwwh. Vrxv oh flho hwrloh o dyhqwxuh frqwlqxdlw.</p>

<p class="right">5-2-7-3</p>

<div class="containerResponsive">
    <input type="checkbox" id="check11" class="displayNone">
        <h3>Indice</h3>
            <div class="contentResponsive displayNone">
                <p>Les majuscules</p>
            </div>
    <label for="check11" class="buttonIndice">Afficher un indice</label>
</div>
</br>

<div class="div">
    <form action method="POST">
        Mot de passe numéro 1: <input type="text" name="mdp1"></br>
        <input type="submit" name="submit1" value="Valider" class="button">
    </form>

<div class="hidden">
Le deuxième mot de passe est : B38E
</div>

    <?php
    if(isset($_POST["mdp1"])) {
        if($_POST["mdp1"]==="9f23" OR $_POST["mdp1"]==="9F23") {
            echo "<div class='animatedTitle'>
                        <div class='text-top'>
                            <div>
                                <span>Mot de passe</span>
                                <span>renseigné</span>
                                <span>avec succès</span>
                            </div>
                        </div>
                    <div class='text-bottom'>
                        <div>
                            <span>Le prochain mot de passe se trouve dans cette page mais il est caché. Tu le trouveras 'à la source'.</span>
                        </div>
                    </div>
                </div>
                </br>";
            echo '
            <div class="containerResponsive">
            <input type="checkbox" id="check1" class="displayNone">
                <h3>Indice</h3>
                <div class="contentResponsive displayNone">
                    <p>Clic droit : Afficher le code source de la page</p>
                </div>
            <label for="check1" class="buttonIndice">Afficher un indice</label>
            </div>
            </br>';
        }
        else {
            echo "<div class='animatedTitleFail'>
                    <div class='text-top'>
                        <div>
                            <span>Mot de passe</span>
                            <span>renseigné</span>
                            <span>erroné</span>
                        </div>
                    </div>
                    <div class='text-bottom'>
                        <div>Tu pues un peu.</div>
                    </div>
                </div>
                </br>";
        }
    }
    ?>
</div>

<div class="div">
    <form action method="POST">
        Mot de passe numéro 2 : <input type="text" name="mdp2"></br>
        <input type="submit" name="submit2" value="Valider" class="button">
    </form>

    <?php
    if(isset($_POST["mdp2"])) {
        if($_POST["mdp2"]==="B38E") {
            echo "<div class='animatedTitle'>
                        <div class='text-top'>
                            <div>
                                <span>Mot de passe</span>
                                <span>renseigné</span>
                                <span>avec succès</span>
                            </div>
                        </div>
                    <div class='text-bottom'>
                        <div>
                            <span>Voici un lien vers un fichier pour la prochaine étape : <a href='https://we.tl/t-K0GLxrlEbZ'>LIEN</a></span>
                        </div>
                    </div>
                    </br>";
        }
        else {
            echo "<div class='animatedTitleFail'>
                    <div class='text-top'>
                        <div>
                            <span>Mot de passe</span>
                            <span>renseigné</span>
                            <span>erroné</span>
                        </div>
                    </div>
                    <div class='text-bottom'>
                        <div>Tu pues pas mal.</div>
                    </div>
                </div>
                </br>";
        }
    }
    ?>
</div>

<div class="div">
    <form action method="POST">
        Mot de passe numéro 3 : <input type="text" name="mdp3"></br>
        <input type="submit" name="submit3" value="Valider" class="button">
    </form>

    <?php
    if(isset($_POST["mdp3"])) {
        if($_POST["mdp3"]==="4EME" OR $_POST["mdp3"]==="4eme") {
            echo "<div class='animatedTitle'>
                        <div class='text-top'>
                            <div>
                                <span>Mot de passe</span>
                                <span>renseigné</span>
                                <span>avec succès</span>
                            </div>
                        </div>
                    <div class='text-bottom'>
                        <div>
                            <span>Voici un lien vers un fichier pour la prochaine étape : <a href='https://we.tl/t-9Dlw3QfiHG'>LIEN</a></span>
                        </div>
                    </div>
                    </div>
                    </br>";
            echo '
                    <div class="containerResponsive">
                    <input type="checkbox" id="check41" class="displayNone">
                        <h3>Indice</h3>
                        <div class="contentResponsive displayNone">
                            <p>Va chercher les Détails</p>
                        </div>
                    <label for="check41" class="buttonIndice">Afficher un indice</label>
                    </div>
                    </br>
                    </br>';
        }
        else {
            echo "<div class='animatedTitleFail'>
                    <div class='text-top'>
                        <div>
                            <span>Mot de passe</span>
                            <span>renseigné</span>
                            <span>erroné</span>
                        </div>
                    </div>
                    <div class='text-bottom'>
                        <div>Tu pues carrément.</div>
                    </div>
                </div>
                </br>";
        }
    }
    ?>
</div>

<div class="div">
    <form action method="POST">
        Mot de passe numéro 4 : <input type="text" name="mdp4"></br>
        <input type="submit" name="submit4" value="Valider" class="button">
    </form>

    <?php
    if(isset($_POST["mdp4"])) {
        if($_POST["mdp4"]==="3CH0") {
            echo "<div class='animatedTitle'>
                        <div class='text-top'>
                            <div>
                                <span>Mot de passe</span>
                                <span>renseigné</span>
                                <span>avec succès</span>
                            </div>
                        </div>
                    <div class='text-bottom'>
                        <div>
                            <span>Tu as tout trouvé. Incroyable.</span>
                        </div>
                    </div>
                    </br>";
            echo "<h2>Voici la dernière 'énigme' : </h2></br>
            <img src='img01.webp' alt='img01' class='img01' style='width:30%;margin:50px'>
            <img src='img01.webp' alt='img01' class='img01' style='width:30%;margin:50px'></br>
            <img src='img02.jpg' alt='img02' class='img02' style='width:50%'>
            ";
        }
        else {
            echo "<div class='animatedTitleFail'>
                    <div class='text-top'>
                        <div>
                            <span>Mot de passe</span>
                            <span>renseigné</span>
                            <span>erroné</span>
                        </div>
                    </div>
                    <div class='text-bottom'>
                        <div>C'est infâme.</div>
                    </div>
                </div>
                </br>";
        }
    }
    ?>
</div>

</main>
</body>
</html>
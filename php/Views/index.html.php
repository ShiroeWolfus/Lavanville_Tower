<?php
session_start();
include('header.html.php');
?>
<div class ="container">
<h1>La Tour de Lavanville</h1>
    <h2>Bienvenue 
        <?php if (isset($_SESSION['username'])){
        echo $user ;
    } 
    else {
        echo " ! ";

        echo var_dump($_SESSION);
    }?>
     </h2>
     <article class=>
        <span>A votre réveil, un endroit étrange. Vous observez les alentours et vous ne reconnaissez rien.
            Vous voici enfermé dans la tour de Lavanville. Impossible de vous souvenir comment vous avez atterrit ici.
            D'étranges notes de musique vous parviennent aux oreilles. 
            Pour sortir de cette tour, une seule solution s'offre à vous, se battre. Quittez au plus vite cet endroit maudit.
            Une seule solution pour sortir de cet endroit oppressant, COMBATTRE. Vous allez devoir affronter d'autres
            joueurs au cours de duels nombreux et difficile. Seul ou contre un ami, affrontez les dangers de la tour de Lavanville
            et espérer avoir une chance de quitter ces lieux maudits</span>
</article>
    <aside>
        <img src="Views/assets/images/lavanville_tower.png" class="img-thumbnail"/>
</aside>
<div>
<?php include('footer.html.php'); ?>
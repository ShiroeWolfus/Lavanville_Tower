<?php
include('header.html.php');
?>

<h2>Pokedex</2>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Pokemon</th>
            <th scope="col">Type</th>
            <th scope="col">Point de Vie</th>
            <th scope="col">Points de vie Max</th>
            <th scope="col">Points de Combat</th>
            <th scope="col">Illustration</th>
            </tr>
            </thead>
<?php
$pokemon = new Pokemon ;
$results = $pokemon->getall();
foreach ($results as $pokemon){
?>
<tr>
    <td><?php echo $pokemon['nom']?></td>
    <td><?php echo $pokemon['type']?></td>
    <td><?php echo $pokemon['pv']?></td>
    <td><?php echo $pokemon['pv_max']?></td>
    <td><?php echo $pokemon['pc']?></td>
    <td><img src= <?php echo $pokemon['image']?>/></td>
    <td><input= 
</tr>
<?};?>
//tr et td où on appelle echo pokemon [info] dans un for each
//instancier un newpokemon = new Pokemon
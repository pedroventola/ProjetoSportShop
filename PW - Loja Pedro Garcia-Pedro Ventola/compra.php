<?php
$basquete = isset($_POST['bolaBASKA']) ? $_POST['bolaBASKA']:0;
$futebol = isset($_POST['bolaFUT']) ? $_POST['bolaFUT']:0;
$tenis = isset($_POST['bolaTENIS']) ? $_POST['bolaTENIS']:0;
$americano = isset($_POST['bolaAMERIC']) ? $_POST['bolaAMERIC']:0;
$golfe = isset($_POST['bolaGOLFE']) ? $_POST['bolaGOLFE']:0;
$volei = isset($_POST['bolaVOLEI']) ? $_POST['bolaVOLEI']:0;


$Cbasquete = $basquete*59.99;
$Cfutebol = $futebol*79.99;
$Ctenis = $tenis*13.90;
$Camericano= $americano*79.99;
$Cgolfe = $golfe*7.99;
$Cvolei = $volei*109.99;

$totalI = $basquete + $futebol + $tenis + $americano + $golfe + $volei; 

$totalP = $Cbasquete + $Cfutebol + $Ctenis + $Camericano + $Cgolfe + $Cvolei;

$valortotal = isset($_POST['valortotal']) ? $_POST['valortotal']: 0; 




?>




<!DOCTYPE html>
<html lang='pt-br'> 
    <head>
        <meta charset=UTF8>
        <link rel="icon" href="Imagens/icone.png">
        <link rel="stylesheet" href="Estilo/estilocompra.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <title> Compras e Pagamentos  </title>
    </head>
<body> 
<a href="index.php"> <img class="logo" src="Imagens/Logo.png"> </a>

<label for="finalizar"> <img class="seta" src="Imagens/seta.png"  title="Finalizar"> </label>

<main class="fundo">
<div class="tabela">
    
<table >

<form action="nota.php" method="post"> 
<thead>
		<th> Produtos </th>
	    <th> Quantidade </th>
	    <th> Valor </th>
    </thead>
</tr>
<tbody> 
		<tr>
            <td> Bola de Basquete </td>
            <?php echo "<td>". $basquete. "</td>" ?> 
            <?php echo "<td>". $Cbasquete. "</td>" ?>
        </tr>
        <tr>
            <td> Bola de Futebol</td>
            <?php echo "<td>". $futebol. "</td>" ?> 
            <?php echo "<td>". $Cfutebol. "</td>" ?>
        </tr>
        <tr>
            <td>Bola de Tênis</td>
            <?php echo "<td>". $tenis. "</td>" ?>  
            <?php echo "<td>". $Ctenis. "</td>" ?>
        </tr>
        <tr>
            <td>Bola de Futebol Americano</td>
            <?php echo "<td>" . $americano. "</td>" ?>
            <?php echo "<td>" . $Camericano. "</td>" ?>
        </tr>
        <tr>
            <td>Bola de Golfe</td>
            <?php echo "<td>" . $golfe. "</td>" ?> 
            <?php echo "<td>" . $Cgolfe. "</td>" ?>
        </tr>
        <tr>
            <td>Bola de Vôlei</td>
            <?php echo "<td>" . $volei. "</td>" ?> 
            <?php echo "<td>" . $Cvolei. "</td>" ?>
        </tr>
<tr class="spacing"> <td> Total </td> 
<?php echo "<td>". $totalI.  "</td>" ?>
<?php echo "<td>". $totalP.  "</td>" ?>
</tr>
</tbody>
</table>     
</div>


 <div class="texto">
 <p >Seu Nome: <input type="text" name="name" /></p>
 <p>Sua idade: <input type="text" name="age" /></p>
 <p>Digite seu telefone: <input type="text" name="telefone" /></p>
 <p>Digite seu email: <input type="text" name="email" /><br>
 <p>Digite novamente o valor total da aquisição (em R$): <input type="text" name="valortotal" /></p> 
 <?php  echo date('d/m/Y');  ?></p>
 <p><input class="botao"type="submit" /></p>
</div>
 <input  type="submit" value="" id="finalizar" > 

</form>





</main>









 </body>   
 </html>
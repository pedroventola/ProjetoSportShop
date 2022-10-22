<?php 

$telefone = $_POST['telefone'];
$email = $_POST['email'];
$name = $_POST['name'];
$valortotal = $_POST['valortotal'];


?>

<!DOCTYPE html>
<html lang='pt-br'> 
    <head>
        <meta charset=UTF8>
        <link rel="icon" href="Imagens/icone.png">
        <link rel="stylesheet" href="Estilo/estilonota.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <title> Carrinho  </title>
    </head>
    <body>
     <main class="final">   
<p class=mensagem>        


 
<?php echo 'Olá, '.$_POST['name'] ."<br>";

echo 'A sua compra resultou em R$ '.(double)$_POST['valortotal'] ."<br>";
echo 'Enviamos um e-mail de confirmação para o endereço '.$_POST['email'] ."<br>"; echo ' Se caso não seja você, não confirme!'; 

?>

</p>
<br>
</br>

<p> Agradecemos a sua Preferência.  <br>
</p>
<br> <a href="index.php"><img class="logo" src="Imagens/icone.png"></a>
</main>
</body>
</html>

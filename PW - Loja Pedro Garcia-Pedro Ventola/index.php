<!DOCTYPE html>
<html lang='pt-br'> 
    <head>
        <meta charset=UTF8>
        <link rel="icon" href="Imagens/icone.png">
        <link rel="stylesheet" href="Estilo/estiloloja.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <title> SportShop </title>
    </head>
<body>

<a href="index.php"><img class="logo" src="Imagens/Logo.png"> </a>
   
    <h1> Equipamentos Esportivos </h1>
  <form action="compra.php" action="nota.php" method="post"> 
    <section class="produtos">
    <div > 
        <img class="bolas" src="Imagens/basquete.jpg">
        <p>Bola de Basquete Penalty <br> R$ 59,99 </p>
        <select name="bolaBASKA">           
           <option value=0>Selecione</option> 
           <option value=1>1 unidade</option>
           <option value=2>2 unidades</option>
           <option value=3>3 unidades</option>
           <option value=4>4 unidades</option> 
           <option value=5>5 unidades</option> 
        </select> 
    </div>
    <div>
        <img class="bolas" src="Imagens/futebol.jpg">
        <p>Bola de Futebol Nike <br> R$ 79,99 </p>   
        <select name="bolaFUT">            
           <option value=0>Selecione</option> 
           <option value=1>1 unidade</option>
           <option value=2>2 unidades</option>
           <option value=3>3 unidades</option>
           <option value=4>4 unidades</option> 
           <option value=5>5 unidades</option> 
        </select> 
    </div>
    <div>
        <img class="bolas" src="Imagens/tenis.jpg">
        <p>Bola de Tênis Wilson  <br> R$ 13,90 </p>
        <select name="bolaTENIS">        
           <option value=0>Selecione</option> 
           <option value=1>1 unidade</option>
           <option value=2>2 unidades</option>
           <option value=3>3 unidades</option>
           <option value=4>4 unidades</option> 
           <option value=5>5 unidades</option> 
        </select> 
    </div>
    <div>
        <img class="bolas" src="Imagens/futamericano.jpg">
        <p>Bola de Futebol Americano Wilson <br> R$ 79,99 </p>
        <select name="bolaAMERIC">          
           <option value=0>Selecione</option> 
           <option value=1>1 unidade</option>
           <option value=2>2 unidades</option>
           <option value=3>3 unidades</option>
           <option value=4>4 unidades</option> 
           <option value=5>5 unidades</option> 
        </select> 
    </div>
    <div>
        <img class="bolas" src="Imagens/golfe.jpg">
        <p>Bola de Golfe Inesis <br> R$ 7,99  </p>
        <select name="bolaGOLFE">
           <option value=0>Selecione</option> 
           <option value=1>1 unidade</option>
           <option value=2>2 unidades</option>
           <option value=3>3 unidades</option>
           <option value=4>4 unidades</option> 
           <option value=5>5 unidades</option> 
        </select> 
    </div>
    <div>
        <img class="bolas" src="Imagens/volei.jpg" >
        <p>Bola de Vôlei Mikasa <br> R$ 109,99  </p> 
        <select name="bolaVOLEI">
           <option value=0>Selecione</option> 
           <option value=1>1 unidade</option>
           <option value=2>2 unidades</option>
           <option value=3>3 unidades</option>
           <option value=4>4 unidades</option> 
           <option value=5>5 unidades</option> 
        </select> 
    </div>
    </section>
    <input type="submit" value="" id="continuar" > 
</form>



 
<label for="continuar"> <img class="seta" src="Imagens/seta.png"  title="Continuar"> </label>



    


</body>
</html> 
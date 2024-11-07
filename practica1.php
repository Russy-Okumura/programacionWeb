<DOCTYPE HTML>
<html>
 <head> 
  <title>Práctica 1 = mi primer script en php</title>
 </head>
 <body>
  <?php 
  ECHO "Hola! este es mi primer script en PHP<BR>";

  // esto es una línea de comentario 
  #Esto también es una línea de comentario 
  /*Esto es un 
  bloque de mas de una línea
  de comentario*/ 

  $vartext = "Hola! ahora estoy usando variables para guardar texto<br>";
  echo $vartext;
  $varnum1=5;
  $varnum2=6;
  $res=$varnum1-$varnum2;
  echo "El resultado de la suma de $varnum1 y $varnum2 es = $res";
  ?>
 </body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function tabuada($tabuada){
   $cont = 1;
   $resultado = '';

   while ($cont <= 10){
        $resultado .= '<tr><td>' . $tabuada . 'x' . $cont . ' = ' . ($tabuada * $cont) . '</td></tr>';
      $cont++;
   }
   return $resultado;
}
$tabela .= '<center><table border="1";>';
$tabela .= tabuada(9);
$tabela .= '</table></center>';
echo $tabela;

?>


</body>
</html>
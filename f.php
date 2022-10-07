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
function buscatexto ($texto, $busca){
    if (is_array ($busca)){
        foreach ($busca as $palavras){
            $troca= "<font color='red'>".$palavra."</font>";
            $texto=str_replace ($palavra, $troca, $texto);
        }
    }
    return $texto;
}
?>

</body>
</html>
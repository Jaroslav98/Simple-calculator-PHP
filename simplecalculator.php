<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="simplecalculator.php" method="get" >
    <input type ="number" name="liczba1">
    <select>
        <option name="znak" value="+">+</option>
    </select>
    
    <input type ="number" name="liczba2">
    <input type ="submit" value="Oblicz">
</form>
<?php

$liczba1 =['liczba1'];
$liczba2 =['liczba2'];
$znak =['znak'];
$Oblicz ='';
switch ($znak)
{
    case "+":
        $Oblicz= $liczba1+$liczba2;
        echo "wynik wynosi $Oblicz";
        break;
        
}
  echo "wynik wynosi $Oblicz ";
  
    # code...
    

?>
</body>
</html>
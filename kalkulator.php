<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="cal.php" method="POST" action="">

<input type="text" name="liczba1" size="10">
<select name="znak">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>

<input type="text" name="liczba2" size="10">
<input type="submit" value="Oblicz">
</form>

<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$znak = $_POST['znak'];
$wynik = "";
switch ($znak)
{
 case "+":
   $wynik = $liczba1+$liczba2;
   break;
   
 case "-":
   $wynik = $liczba1-$liczba2;
   break;
 case "*":
   $wynik = $liczba1*$liczba2;
   break;
 case "/":
   $wynik = $liczba1/$liczba2;
   break;
}
echo $wynik;
?>
</body>
</head>
</html>
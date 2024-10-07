<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php                   
$krzeslo=$_GET["imie"];
$krzysiu=$_GET["nazwisko"];
$mario=$_GET["Waga"];
$kot=$_GET["Wzrost"];
$fiut=$_GET["Wiek"];
$dupa=$_GET["Ulica"];
echo("imie:");
echo($krzeslo);
echo("<br>");
echo("nazwisko:");
echo($krzysiu);
echo("<br>");
echo("Waga:");
echo($mario);
echo("<br>");
echo("Wzrost:");
echo($kot);
echo("<br>");
echo("Wiek:");
echo($fiut);
echo("<br>");
echo("Ulica:");
echo($dupa);
echo("<br>");


?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Fibonacci</title>
</head>
<body bgcolor="black" text="white">
<center>
<h2>Aplikasi Deret Fibonacci Dengan PHP</h2>
<hr>
<form action="" method="get">
    <div>
        Input ke-1  <input type="number" name="input1" placeholder="masukkan input ke-1..." required>
    </div>
        Input ke-2  <input type="number" name="input2" placeholder="masukkan input ke-2..." required>
    </div>
    <div>
        Deret ke-  <input  type="number" name="input3" placeholder="max sampai deret ke 100" required>
    </div>
<input type="submit" value="Submit">
</form>
<hr>
<h3>Hasil Deret Bilangan Fibonacci</h3>

<?php

echo $_GET ['input1']." ".$_GET ['input2'] ;

for ($i=2; $i<$_GET['input3']; $i++)
{
  $output = $_GET['input2'] + $_GET['input1'];
  echo " $output";
  
  $_GET['input1'] = $_GET['input2'];
  $_GET['input2'] = $output;
}
?>
</center>
</body>
</html>
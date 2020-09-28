<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Aritmatika</title>
</head>
<body bgcolor="black" text="white">
<center>
<h2>Aplikasi Deret Aritmatika Dengan PHP</h2>
<hr>
<div>
<form action="" method="get">
<div>
    Input ke-1 <input type="number" name="input1" placeholder="masukkan input ke-1..." required>
</div>
<div>
    Input ke-2 <input type="number" name="input2" placeholder="masukkan input ke-2..." required>
</div>
<div>
    Deret ke-  <input type="number" name="input3" placeholder="max sampai deret ke 100" required>
</div>
<input type="submit" value="Submit">
</form>
<hr>

<h3>Hasil Deret Aritmatika</h3>

<?php
echo $_GET ['input1']." ".$_GET ['input2'] ;
    $selisih= $_GET['input2']-$_GET['input1'];
    for($i=2; $i<$_GET['input3']; $i++)
    {
        $hasil= $_GET['input2']+$selisih;
        echo " $hasil";
        
        $_GET['input2']=$hasil;
        
    }
?>
</center>
</body>
</html>
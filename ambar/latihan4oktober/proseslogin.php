<?php
$user=$_POST['userinput'];
$pass=$_POST['passwordinput'];

$koneksi=mysqli_connect('localhost','root','','ambarwati');
$kueri=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
$cek=mysqli_num_rows($kueri);


if($cek>0)
{
	header("location:latihan4oktober/nasipadang.html");
	} else {
		
		header("location:index.php");
	}



?>
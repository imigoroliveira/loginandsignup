<?php 
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'banco_exe1');
  if (isset($entrar)) {
           
    $verifica = mysqli_query("SELECT * FROM usuario WHERE login = 
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }

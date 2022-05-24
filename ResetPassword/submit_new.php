<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $host = 'ec2-63-34-180-86.eu-west-1.compute.amazonaws.com';
    $db = 'd3gte55iprrt17';
    $user = 'heavdsafillskn';
    $password = '4d93c9ccf6eedb3fc772c3322cec27fd4b22148b007078c4cdf85a8a89807755';

    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);;
    $sql=("update users set password='$pass' where email='$email'");
}
?>
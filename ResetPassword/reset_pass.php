<?php
if($_GET['key'] && $_GET['reset'])
{
    $email=$_GET['key'];
    $pass=$_GET['reset'];
    $host = 'ec2-63-34-180-86.eu-west-1.compute.amazonaws.com';
    $db = 'd3gte55iprrt17';
    $user = 'heavdsafillskn';
    $password = '4d93c9ccf6eedb3fc772c3322cec27fd4b22148b007078c4cdf85a8a89807755';

    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $sql=("select email,password from users where md5(email)='$email' and md5(password)='$pass'");
    if(count($sql)==1)
    {
        ?>
        <form method="post" action="submit_new.php">
            <input type="hidden" name="email" value="<?php echo $email;?>">
            <p>Enter New password</p>
            <input type="password" name='password'>
            <input type="submit" name="submit_password">
        </form>
        <?php
    }
}
?>
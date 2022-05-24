<?php
if(isset($_POST['submit_email']) && $_POST['email'])
{
    $host = 'ec2-63-34-180-86.eu-west-1.compute.amazonaws.com';
    $db = 'd3gte55iprrt17';
    $user = 'heavdsafillskn';
    $password = '4d93c9ccf6eedb3fc772c3322cec27fd4b22148b007078c4cdf85a8a89807755';

    $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $sql = "select * from users where email='$email'";
    $data = $pdo->query($sql)->fetchAll();
    foreach ($data as $row) {
        if($row["isadmin"]==true)
            header("location:admin.php");
    }
    }
    if(count($sql)==1)
    {
        while($row=$data($sql))
        {
            $email=md5($row['email']);
            $pass=md5($row['password']);
        }
        $link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
        require_once('phpmail/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
        // enable SMTP authentication
        $mail->SMTPAuth = true;
        // GMAIL username
        $mail->Username = "your_email_id@gmail.com";
        // GMAIL password
        $mail->Password = "your_gmail_password";
        $mail->SMTPSecure = "ssl";
        // sets GMAIL as the SMTP server
        $mail->Host = "smtp.gmail.com";
        // set the SMTP port for the GMAIL server
        $mail->Port = "465";
        $mail->From='your_gmail_id@gmail.com';
        $mail->FromName='your_name';
        $mail->AddAddress('reciever_email_id', 'reciever_name');
        $mail->Subject  =  'Reset Password';
        $mail->IsHTML(true);
        $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
        if($mail->Send())
        {
            echo "Check Your Email and Click on the link sent to your email";
        }
        else
        {
            echo "Mail Error - >".$mail->ErrorInfo;
        }
    }
}
?>
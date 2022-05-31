<?php
    if(isset($_POST["reset-password-submit"])){
        $selector =$_POST["selector"];
        $validator =$_POST["validator"];
        $password =$_POST["pwd"];
        $passwordRepeat =$_POST["pwd-repeat"];

     if(empty($password) || empty($passwordRepeat)){
         header("Location:  create-new-password.php?newpwd=empty");
         exit();
     }else if($passwordRepeat != $password){
         header("Location create-new-password.php?newpwd=pwdnotsame");
         exit();
     }
     $currentDate =date("U");

     require 'dbconnection2.php';

     $sql = "select * from pwdreset where pwdresetselector=? and pwdresetexpires >= ?";
        $pdo= require 'dbconnection2.php';
        $stmt= $pdo.pg_prepare();
        if(!pg_prepare($stmt,$sql)){
            echo "There was an error!";
            exit();
        }else{
            $stmt->execute(array($selector,$currentDate));

            $result =pg_get_result($stmt);
            if(!$row =pg_fetch_assoc($result)){
                echo "You need to re-submit your reset request!";
                exit();
            }else {
                $tokenBin = hex2bin($validator);
                $tokenCheck =password_verify($tokenBin, $row["pwdresettoken"]);

                if($tokenCheck ===false){
                    echo "You need to re-submit your reset request!";
                    exit();
                }elseif($tokenCheck ===true){
                    $tokenEmail = $row['pwdresetemail'];

                    $sql ="select * from users where email=?;";
                    $pdo= require 'dbconnection2.php';
                    $stmt= $pdo.pg_prepare();
                    if(!pg_prepare($stmt,$sql)){
                        echo "There was an error!";
                        exit();
                    }else {
                        $stmt->execute($tokenEmail);

                        $result =pg_get_result($stmt);
                        if(!$row =pg_fetch_assoc($result)){
                            echo "There was an error!";
                            exit();
                        }else{
                            $sql = "Update users set password=? where email=?;";
                            $stmt= $pdo.pg_prepare();
                            if(!pg_prepare($stmt,$sql)){
                                echo "There was an error!";
                                exit();
                            }else {
                                $newPwdHash =password_hash($password, PASSWORD_DEFAULT);
                                $stmt->execute(array($newPwdHash,$tokenEmail));

                                $sql= "DELETE from pwdreset where pwdresetemail=?;";
                                $stmt= $pdo.pg_prepare();
                                if(!pg_prepare($stmt,$sql)){
                                    echo "There was an error!";
                                    exit();
                                }else{
                                    $stmt->execute($tokenEmail);
                                    header("Location: /login.php?newpwd=passwordupdated");
                                }
                            }
                        }
                    }
                }
            }
        }
    }else{
        header("Location: login.php");

    }
?>
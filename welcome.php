<?php
    $uname = 'faizal';
    $pass = 'team';


    session_start();

    if(isset($_SESSION['uname'])){
        echo "<h2>Welcome". $_SESSION['uname'] ."</h2>";
        echo "<a href='product.php'>Product</a></br>";
        echo "<br><a href='logout.php'><input type=button value=logout></a>";
    }
    else{
        if($_POST['uname'] == $uname && $_POST['pass'] == $pass){
            $_SESSION['uname'] = $uname;
            echo "<script>location.href ='welcome.php'</script>";
        }
        else{

            echo "<script>alert('Username or Password Incorrect !')</script>";
            echo "<a href = 'login.php'></a>";
        }
    }
?>

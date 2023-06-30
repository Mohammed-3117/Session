   <?php

session_start();

if(isset($_SESSION['uname'])){
    echo "<h2>Welcome to Product Page</h2>";
    echo "<a href='welcome.php'><input type='button' value='welcome'></a>";
}else{
    echo "<script>location.href='logout.php'</script>";
}
?>
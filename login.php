<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
    body{
        background:url(img/hi2.jpg);
        background-repeat:no-repeat;
        background-size:cover;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .one{
        display: flex;
        height: 600px;
        width: 500px;
        /* background:linear-gradient(pink,aqua); */
        margin: auto;
        box-sizing: border-box;
    }
    .out{
        border: 1px solid black;
        border-radius: 8px;
        width: 100%;
        font-size: 1.2em;
        margin-right: 400px;
        box-sizing: border-box;
    }
    #btn{
        border: 1px solid black;
        border-radius: 8px;
        text-align: center;
        margin-left: 10px;
        width: 80px;

    }
    
</style>
<body>
    <div class="one">
        <!-- <h1>Log In</h1><br> -->
        <form action="welcome.php" method="POST">
            <center><h1 id="cen">Log In</h1></center>
            <table align="center">
                <input type="text" class="out" name="uname"  placeholder="Enter Name"><br><br>
                <input type="password" class="out" name="pass" placeholder="Enter Password"><br><br>
                <center><button type="submit" id="btn">LOG-IN</button></center>
            </table>
        </form>
    </div>
</body>
</html>
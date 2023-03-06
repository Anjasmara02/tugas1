<?php
    if(isset($_POST["input"]))
    {
        $username = $_POST["username"];
        $pw = $_POST["password"];

        if($username == "admin" && $pw == "admin123")
        {
            
            header("Location: homeAdmin.php");
            exit;
        }

        $error = true;
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>MyKomik</title>
    <script src="https://kit.fontawesome.com/97d7065ade.js" crossorigin="anonymous"></script>



    <style>
        body
        {
            background-image: url("background2.jpg");
            margin: 0;
            font-family: sans-serif;
            background-color: #FAFAFA;
        }



        .main {
            
            text-align: center;
            margin-top: 90px;
            margin-left: 100px;
            font-size: 28px; 
            padding-bottom: 100px;
        }

        .box
        {
            box-shadow: 10px 10px 5px rgb(20, 20, 20);
            margin-top: 0;
            margin-left: 250px;
            margin-right: 250px;
            padding: 0;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            padding-bottom: 50px;
            background-color: white;
            border-radius: 20px;
        }

        .box h4
        {
            color: #BD7C84;
        }

        .box p
        {
            font-size: 12px;
        }

        ::-webkit-input-placeholder
        {
            text-align: center;
        }

        .box input
        {
            text-align : center;
            font-size: 20px;
            padding: 12px;
            border-radius: 30px;
            height: 30px;
            width: 300px;
        }

        .main form
        {
            margin: 12px;
        }



        .inputBtn
        {
            border-radius: 10px;
            width: 10%;
            height: 30px;
            background-color: #BD7C84;
            color: white;
        }

        .logo img
        {
            width: 20%;
        }

        .isi
        {
            margin: auto;
            align-items: center;
        }

        .loginbar
        {
            padding: 20px;
        }
       
        .loginbar a
        {
            text-decoration: none;
            color: #3A3875;
        }

    </style>



</head>

    
    

    <div class="isi">
        <div class="main">

            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>
            
            <div class="box">
    
                <h4><i class="fa-solid fa-user-secret"></i>ADMIN</h4>
                <hr>
                <form action="" method="post">
                    <p>USERNAME</p>
                    <input type="text" name="username" id="username" placeholder="masukan username"><br>
                    <p>PASSWORD</p>
                    <input type="password" name="password" id="pass" placeholder="masukan password"><br>
                    <button class="inputBtn" name="input" type="submit">LOGIN</button>
                </form>

                <?php if(isset($error)) : ?>
                    <p><i style="color: red">! : username atau password salah</i></p>
                <?php endif; ?>

        </div>
    </div>
    



    
<!-- <script type="text/javascript" src="../script/script.js"></script> -->

</body>
</html>
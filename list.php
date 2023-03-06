<?php
    $cover = $_FILES["cover"]["name"];
    $hal1 = $_FILES["hal1"]["name"];
    $hal2 = $_FILES["hal2"]["name"];
    $tmp_cover = $_FILES["cover"]["tmp_name"];
    $tmp_hal1 = $_FILES["hal1"]["tmp_name"];
    $tmp_hal2 = $_FILES["hal2"]["tmp_name"];

    $judul = $_POST["judul"];
    $chapter = $_POST["chapter"];

    move_uploaded_file($tmp_cover, "img/".$cover);
    move_uploaded_file($tmp_hal1, "img/".$hal1);
    move_uploaded_file($tmp_hal2, "img/".$hal2);


?>


<!DOCTYPE html>
<html>
<head>
    <title>MyKomik</title>
    <script src="https://kit.fontawesome.com/97d7065ade.js" crossorigin="anonymous"></script>



    <style>
        body
        {
            margin: 0;
            font-family: sans-serif;
            background-color: #FAFAFA;
        }

        .mainNav
        {
            position: fixed;
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            padding: 0;
            background-color: #3A3875;
            top: 0;
        }

        .mainNav img
        {
            padding : 12px;
        }


        .title
        {
            margin-left: 20px;
        }

        .title img
        {
            width: 15%;
        }



        .searchbox
        {
            margin-right: 20px;

        }

        .searchbox > input
        {
            width: 300px;
            height: 30px;
            border-radius: 20px;

        }

        li
        {
            list-style-type: none;
        }

        a
        {
            text-decoration: none;
        }


        .sideNav
        {
            margin-top: 123px;
            height: 100%;
            width: 180px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #302F45;
            overflow-x: hidden;
            padding-top: 20px;


        }

        .sideNav a
        {
            padding-top: 30px;
            text-decoration: none;
            font-size: 18px;
            color: rgb(212, 212, 212);
            display: block;
        }

        .sideNav a:hover
        {
            font-size: 20px;
            transition: all 0.2s ease-in-out;
            color: white;
        }


        .main {
            padding: 20px;
            margin-top: 125px;
            margin-left: 180px;
            font-size: 28px; 
            background-color: #E8E8E8;
        }

        .main p
        {
            text-align: center;
        }

        .box
        {
            margin-left: 250px;
            margin-right: 250px;
            padding: 0px;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            padding-bottom: 50px;
            background-color: white;
            border-radius: 20px;
        }

        .box h4
        {
            color: #3A3875;
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
            border-radius: 20px;
            height: 30px;
            width: 300px;
        }



        .inputBtn
        {
            border-radius: 10px;
            width: 10%;
            height: 30px;
            background-color: #3A3875;
            color: white;
        }

        .isi
        {
            background-color: white;
            padding: 20px;
            width: 800px;
            margin-left: 200px; 
        }

        .komik
        {
            align-item: center;
        }

        .komik img
        {
            width: 100%;
        }

    </style>



</head>
<body>
    <nav class="mainNav">
        <div class="title">
            <a href="#">
                <img src="logo.png" alt="logo">
            </a>
        </div>

        <!-- <div class="searchbox">
            <input type="text" placeholder="Cari...">
        </div> -->
        
    </nav>

    <nav id="mySidenav" class="sideNav">
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house-chimney"></i>HOME</a></li>
            <li><a href="#"><i class="fa-solid fa-bars-staggered"></i> GENRE</a></li>
            <li><a href="#"><i class="fa-solid fa-circle-info"></i> TENTANG</a></li>
            <li><a href="#"><i class="fa-solid fa-bars"></i>KOMIK</a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i>USER</a></li>
        </ul>
    </nav>

    <div class="main">
        <div class="isi">
            <div class="cover">
                <img src="img/<?php echo $cover ?>" alt="cpver">
            </div>
            
            <div class="desc">
                <h4><?php echo $judul ?></h4>
                <h6>Chapter<?php echo $chapter?></h6>
            </div>
            <hr>

            <div class="komik">
                <img src="img/<?php echo $hal1 ?>" alt="">
                <img src="img/<?php echo $hal2 ?>" alt="">
            </div>
        </div>
        
    </div>
    
    
<!-- <script type="text/javascript" src="../script/script.js"></script> -->

</body>
</html>
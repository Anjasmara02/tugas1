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
            background-color: black;
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
            background-color: #2E2E2E;
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
            text-align: center;
            margin-top: 150px;
            margin-left: 180px;
            font-size: 28px; 
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

    </style>



</head>
<body>
    <nav class="mainNav">
        <div class="title">
            <a href="#">
                <img src="logo.png" alt="logo">
            </a>
        </div>

    </nav>

    <nav id="mySidenav" class="sideNav">
        <ul>
            <li><a href="homeAdmin.php"><i class="fa-solid fa-house-chimney"></i>HOME</a></li>
            <li><a href="tambah.php"><i class="fa-solid fa-plus"></i>TAMBAH</a></li>
            
    </nav>

    <div class="main">
        <h4>Wellcome admin</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eligendi esse iure distinctio necessitatibus id excepturi similique rerum voluptatum dolores! Nisi tempora, velit fugit unde vel officia facere alias quas!</p>
    </div>
    
    
<!-- <script type="text/javascript" src="../script/script.js"></script> -->

</body>
</html>
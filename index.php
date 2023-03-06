</head>
    <div class="isi">
        <div class="main">

            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>
            
            <div class="box">
    
                <h4><i class="fa-solid fa-user"></i> LOGIN</h4>
                <hr>
                <form action="" method="post">
                    <p>USERNAME</p>
                    <input type="text" name="username" id="username" placeholder="masukan username"><br>
                    <p>PASSWORD</p>
                    <input type="password" name="password" id="pass" placeholder="masukan password"><br>
                    <button class="inputBtn" name="input" type="submit">LOGIN</button>
                    <hr>
                </form>

                <?php if(isset($error)) : ?>
                    <p><i style="color: red">! : username atau password salah</i></p>
                <?php endif; ?>

                <div class="loginbar">
                    <a href="loginAdmin.php"><i class="fa-solid fa-user-secret"></i>LOGIN ADMIN</a></li></a>
                </div>

    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Bitter:ital,wght@1,500;1,600&family=Inter+Tight:wght@200;400&family=Merriweather:ital,wght@0,400;1,300&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Posstest 2 Pemrograman Web</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo"><img src="gambar/logo.jpg" alt="" width="60px" /><p class="name">ANJAS CAKE
        <p>MURAH MERIAH & BAHAN BERKUALITAS</p>
      </div>
      <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <div class="menu">
          <li><a href="#">HOME</a></li>
          <li><a href="#aboutme">ABOUT</a></li>
          <li><a href="#product">MENU</a></li>
        </div>
      </ul>
    </nav>

    <!-- main content -->
    <!-- iklan -->
    <div class="row">
      <div class="col-2">
        <img src="gambar/kue kering.jpg" alt="pict1" />
    

    <!-- makanan -->
    <div id="product" class="container">
        <h2>MENU UTAMA</h2>
          <div class="card">
            <img src="gambar/nastar fv.jfif" class="content" />
            <div class="deskrip">
              <h4>Rp. 40.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
          </div>
          <div class="card">
            <img src="gambar/coklat al.jfif" class="content" />
            <div class="deskrip">
              <h4>Rp. 32.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
          </div>
          <div class="card">
            <img src="gambar/kue lidah kucing.jfif" class="content" />
            <div class="deskrip">
              <h4>Rp. 55.000</h5>
            </div>
            <p><i class="fa-solid fa-cart-arrow-down cart"></i></p>
          </div>
        </div>
      </div>

      <!-- About me -->
    <section id="aboutme">
        <div class = "image">
           <img src="gambar/anj.jpeg">
        </div>
  
        <div class = "content">
            <h2>tentang saya</h2>
            <span><!-- line here --></span>
            <p ><b> ANJASMARA<br>NIM 2109106138<br><b>PESAN!!<br> jangan lupa beli kue nya<br> </b></p>
            <ul class = "icons">
                <li><a href="https://www.instagram.com/anjasmaramahdjura/?hl=en">
                <i  class="fa-brands fa-instagram"></i>
                </li></a>
                <li><a href="https://github.com/Anjasmara02/anjas.github.io">
                  <i class="fa-brands fa-github"></i>
                </li></a>
                <li><a href="https://www.facebook.com/marlboro.cess">
                    <i class="fa-brands fa-facebook"></i>
                </li></a>
                <li><a href="https://wa.me/qr/NJOTX6SI5PJHM1">
                    <i class="fa-brands fa-whatsapp"></i>
                </li></a>
            </ul>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="bottom">
          <p>Copyright ©2022 by ANJASMARA</p>
        </div>
      </footer>

  </body>
</html>
    <!doctype html>
    <html lang="en">

    <head>

      <?php
      include("./assets/header.php");
      include("./assets/user.navbar.php");
      ?>

    </head>
    <style>
      body {
        max-width: 100%;
        height: 100vh;
      }

      .img-s {
        width: 60rem;
        z-index: -99;
      }

      img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
      }

      .card:hover {
        opacity: 0.9;
      }

      .card {
        border-radius: 10px;
      }
      .input-group{
        max-width: 100%;
      }
    </style>

    <body>
      <img src="img/img.test.png" alt=" class=" img-s position-absolute top-50 start-50 translate-middle ">
    <div class=" container">
    <div class="input-group mb-3" style="text-align:center;">
          <button class="btn btn-success input-group-text" width="50"id="basic-addon1"><i class="fa-solid fa-bullhorn"></i></button>
          <marquee type="text" disabled class="form-control" aria-label="Username" aria-describedby="basic-addon1">ทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบ</marquee>
        </div>
      <div class="row">
        <div class="col-md-3 mw-25 p-2">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title"><i class="fa-solid fa-users"></i>&nbsp;สมาชิก</h3>
              <p class="card-text" style="font-size:50px;"><?php

                                                            include './database/database.connect.php';
                                                            $sql = "SELECT * FROM usertb WHERE user_id";
                                                            $query = $conn->query($sql);
                                                            $rows = mysqli_num_rows($query);
                                                            echo $rows . "&nbsp;" . "คน";


                                                            ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mw-25 p-2">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title"><i class="fa-solid fa-boxes-stacked"></i>&nbsp;สินค้าในคลัง</h3>
              <p class="card-text" style="font-size:50px;"><?php

                                                            include './database/database.connect.php';
                                                            $sql = "SELECT * FROM stocktb WHERE s_id";
                                                            $query = $conn->query($sql);
                                                            $rows = mysqli_num_rows($query);
                                                            echo $rows . "&nbsp;" . "ชิ้น";


                                                            ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mw-25 p-2">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title"><i class="fa-sharp fa-solid fa-clock-rotate-left"></i>&nbsp;สินค้าที่จำหน่ายแล้ว</h3>
              <p class="card-text" style="font-size:50px;"><?php

                                                            include './database/database.connect.php';
                                                            $sql = "SELECT * FROM stocktb WHERE s_id";
                                                            $query = $conn->query($sql);
                                                            $rows = mysqli_num_rows($query);
                                                            echo $rows . "&nbsp;" . "ชิ้น";


                                                            ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mw-25 p-2">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title"><i class="fa-solid fa-box"></i>&nbsp;สินค้าพร้อมจำหน่าย</h3>
              <p class="card-text" style="font-size:50px;"><?php

                                                            include './database/database.connect.php';
                                                            $sql = "SELECT * FROM stocktb WHERE s_id";
                                                            $query = $conn->query($sql);
                                                            $rows = mysqli_num_rows($query);
                                                            echo $rows . "&nbsp;" . "ชิ้น";


                                                            ?></p>
            </div>
          </div>
        </div>
        <div class="mw-25">
          <h2>สินค้าแนะนำ</h2>
          <p>Recommended Products</p>
          <div class="row">
            <div class="col-md-3 mw-20">
              <div class="card">
                <div class="card-body m-3 p-2">
                  <img src="img/iphone11.png" alt="">
                  <hr>
                  <h4 class="card-title m-2">&nbsp;Iphone11 / <span style="color:grey;font-size:18px;">เหลือ <?php

                                                                                                              include './database/database.connect.php';
                                                                                                              $sql = "SELECT * FROM stocktb WHERE s_id";
                                                                                                              $query = $conn->query($sql);
                                                                                                              $rows = mysqli_num_rows($query);
                                                                                                              echo $rows . "&nbsp;" . "ชิ้น";


                                                                                                              ?></span></h4>
                  <span class="card-title m-2" style="color:grey;font-size:16px;">&nbsp;ทดสอบทดสอบทดสอบ </span>
                  <h4 class="card-title m-2" style="color:#50F47D;font-size:18px;">&nbsp;50 บาท</h4>
                  <a href=""><button class="btn btn-success m-2 "><i class="fa-solid fa-cart-shopping"></i>&nbsp;ซื้อสินค้า</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <iframe src="https://discord.com/widget?id=935451247958454334&theme=dark" width="50" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts" class="p-2"></iframe>
      </div>
      <footer>
        <?php

        include("./assets/footer.php");

        ?>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
    </body>


    </html>
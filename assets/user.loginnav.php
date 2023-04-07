<?php
    session_start();
    include('header.php');

?>

<nav class="navbar navbar-expand-sm ">
      <div class="container">
        <a class="  navbar-brand" href="./index.php"><?php //?>เว็ปไซต์ตัวอย่าง</a>
        <button class=" navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active " href="#" aria-current="page"><i class="fa-solid fa-house "></i>หน้าแรก <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#"><i class="fa-solid fa-shop "></i>สินค้า</a>
                </li>
                <li class="nav-item">
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="./login.php" ><i class="fa-solid fa-right-from-bracket "></i>เข้าสู่ระบบ</a>                    
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./register.php" ><i class="fa-solid fa-user-plus "></i>สมัครสมาชิก</a>                 

                </li>
            </form>
        </div>
  </div>
</nav>

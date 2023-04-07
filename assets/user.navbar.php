<?php
    session_start();
    include('header.php');

?>

<nav class="navbar navbar-expand-sm shadow-dark radius-border">
      <div class="container">
        <a class="navbar-brand" href="index.php"><?php //?>เว็ปไซต์ตัวอย่าง</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page"><i class="fa-solid fa-house"></i>หน้าแรก <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-shop"></i>สินค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-wallet"></i>เติมเงิน</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0 ">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i><?php echo $_SESSION['Username'];?></a>
                    <div class="dropdown-menu  " aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>ผู้ใช้งาน: <?php echo $_SESSION['Username'];?></a>
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-coins"></i>พ้อย: </a>
                        <hr>
                        <a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-clock-rotate-left"></i>ประวัติการเติมเงิน: </a>
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-box"></i></i>ประวัติการซื้อ: </a>
                        <a class="dropdown-item" href="#"><i class="fa-solid fa-lock"></i>เปลี่ยนรหัสผ่าน</a> 
                        <hr>
                        <a class="dropdown-item" href="./functions/logout.php"><i class="fa-solid fa-right-from-bracket"></i>ออกจากระบบ</a> 
                    </div>
                </li>
            </ul>            
            </form>
        </div>
  </div>
</nav>

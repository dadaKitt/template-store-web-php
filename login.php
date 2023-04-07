<!doctype html>
<html lang="en">

<head>

    <?php

    include("./assets/header.php");
    include("./assets/user.loginnav.php");


    ?>
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script> 
</head>
<style>
    input {
        height: 50px;
        border: 1px solid grey;
        border-radius: 5px;
        margin: auto;
        display: flex;
        width: 25rem;
        font-size: 16px;
    }

    .login {
        width: 25rem;
    }
</style>

<body>
    <header>

    </header>
    <main>
        <div class="position-absolute top-50 start-50 translate-middle login-form">
            <div class="container">
                <form action="./functions/checkin.php" method="get" class="loginform">
                    <h1 align="center"><i class="fa-solid fa-right-from-bracket"></i>เข้าสู่ระบบ</h1>
                    <input type="text" name="username" id="username" placeholder="ชื่อผู้ใช้งาน" require><br>
                    <input type="password" name="password" id="password" placeholder="รหัสผ่าน" require><br>
                    <script>
                        function makeaction() {
                            document.getElementById('submit').disabled = false;
                        }
                    </script>
                    <div require class="g-recaptcha" data-callback="makeaction" data-sitekey="<?php 
                    
                    $keyrecaptcha = "6Lf8Hl8lAAAAAJNf2baFaYFxf70l_dZMOgsjW29P
                    ";
                    echo $keyrecaptcha; ?>" ></div>
                    <div>
                    <br>
                    </div>
                    <button class=" login btn btn-primary">เข้าสู่ระบบ</button><br>
                        <span>ยังไม่เป็นสมาชิก?</span><a href="./register.php" style="text-decoration: none;">&nbsp;สมัครสมาชิก</a>
                </form>
            </div>
        </div>

    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
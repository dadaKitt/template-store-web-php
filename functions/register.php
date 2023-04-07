<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php

    session_start();
    include('../database/database.connect.php');
    $sql = "SELECT * FROM usertb";
    $query = $conn->query($sql);

    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $cpassword = $_GET['cpassword'];

    if($cpassword != $password){
        echo "<br>";
        echo "<script>
        setTimeout(function() {
        swal({
                title: 'คำเตือน!',
                text: 'รหัสผ่านของคุณไม่ตรงกัน', 
                type: 'Warning', 
                timer: '3000', 
                showConfirmButton: false 
            }, function(){
                window.location.href = '../register.php'; 
            });
        });
    </script>";
    }

    $auth = "INSERT INTO usertb(user_id, email, username, pwd, permission) VALUES ('','$email','$username','$password','')";
    $query = $conn->query($auth);
    if($query == true){
        echo "<br>";
        echo "<script>
        setTimeout(function() {
        swal({
                title: 'สำเร็จ',
                text: 'สมัครสมาชิกสำเร็จ', 
                type: 'success', 
                timer: '3000', 
                showConfirmButton: false 
            }, function(){
                window.location.href = '../login.php'; 
            });
        });
    </script>";
    }


?>
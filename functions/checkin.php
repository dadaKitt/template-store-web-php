<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php

    session_start();
    include('../database/database.connect.php');
    $sql = "SELECT * FROM usertb";
    $query = $conn->query($sql);

    $username = $_GET['username'];
    $password = $_GET['password'];

    $auth = "SELECT * FROM usertb WHERE username = '$username' AND pwd = '$password'";
    $query = $conn->query($auth);
    if($row = mysqli_fetch_array($query)){
        $_SESSION['UserID'] = $row['user_id'];
        $_SESSION['Username'] = $row['username'];
        $_SESSION['Password'] = $row['pwd'];
        $_SESSION['Permission'] = $row['permission'];
        // $_SESSION['Point'] = $row['point'];
        if($_SESSION['Permission'] == 0){
            echo "<script>
			setTimeout(function() {
			swal({
					title: 'ยินดีต้อนรับ',
					text: 'ระบบกำลังพาคุณไป', 
					type: 'success', 
					timer: '3000', 
					showConfirmButton: false 
				}, function(){
					window.location.href = '../home.php'; 
				});
			});
		</script>";
            }
        if($_SESSION['Permission']== 1){
            echo "<script>
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won't be able to revert this!',
                icon: 'warning',
                showConfirmButton: false           
                 </script>";
            header('refresh:2; url=../admin.php');
        } else {
            echo "<br>";
        }
    } else {
        echo "<script>
        setTimeout(function() {
        swal({
                title: 'ขออภัย',
                text: 'ไม่พบชื่อผู้ใช้หรือรหัสผ่าน', 
                type: 'warning', 
                timer: '5000', 
                showConfirmButton: false 
            }, function(){
                window.location.href = '../login.php'; 
            });
        });
    </script>";
    }    


?>
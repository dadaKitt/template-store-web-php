<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
echo "<br>";
session_start();
echo "<script>
    setTimeout(function() {
    swal({
            title: 'สำเร็จ',
            text: 'ออกจากระบบสำเร็จ', 
            type: 'success', 
            timer: '3000', 
            showConfirmButton: false 
        }, function(){
            window.location.href = '../login.php'; 
        });
    });
</script>";
session_destroy();
?>
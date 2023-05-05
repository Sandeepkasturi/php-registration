<?php
$s = "localhost";
$u = "root";
$p = "";
$con = mysqli_connect($s, $u, $p);
if (!$con) {
    die("error");
}
mysqli_select_db($con, 'sandeep');
if (isset($_POST['submit'])) {
    $n = $_POST['uname'];
    $p = $_POST['password'];
    $r = $_POST['rpassword'];
    $m = $_POST['mail'];
    $g = $_POST['gender'];
    $h = $_POST['hobbie'];
    $s = " ";
    foreach ($h as $s1) {
        $s .= $s1 . ",";
    }
    $sql = "insert into details values('$n','$p','$r','$m','$g','$s')";
    if (mysqli_query($con, $sql)) {
        echo "<script>
            localStorage.setItem('registered', 'true');
            localStorage.setItem('username', '$n');
            localStorage.setItem('password', '$p');
            localStorage.setItem('email', '$m');
            localStorage.setItem('gender', '$g');
            localStorage.setItem('hobbies', '$s');
            window.open('we.php', '_self');
        </script>";
        echo "<script>alert('Registration Successful');</script>";
        echo "<script>window.open('https://redeemtechai.vercel.app/',"_self");</script>";
    } else {
        echo "error";
    }
}
mysqli_close($con);
?>

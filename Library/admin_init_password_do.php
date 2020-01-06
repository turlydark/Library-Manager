<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>
<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');


$sql="update reader_card set passwd = md5('111111') where reader_id={$userid}";
$res=mysqli_query($dbc,$sql);
if($res==1)
{
    echo "<script>alert('密码重置成功!')</script>";
    echo "<script>window.location.href='admin_init_password.php'</script>";
}
else{
    echo "<script>alert('密码重置失败!')</script>";
    echo "<script>window.location.href='admin_init_password.php'</script>";
}

?>

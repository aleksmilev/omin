<?php
include "../connection.php";

$id = (int)file_get_contents('php://input');

$sql = "DELETE FROM activities";
mysqli_query($admin_conn,$sql);

mysqli_close($admin_conn);
mysqli_close($user_conn);
?>
<?php
require_once'../models/db.php';

$forget = $_POST['forget'];
$search = $_POST['search'];

if($forget == "")
{
    header('location: ../views/forgetPass.php?err=null');
}
else
{
    $con = getConnection();
    $sql = "select Password from users where Username='$forget'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);

    echo"
    <table>
    <tr>
    <td>{$data['Password']}</td>
    <tr>
    </table>
    ";
}


?>
<?php
$servername = "localhost";
$username = "root";
$password = "oEOdexogbO8A";
 
// ��������
$conn = mysqli_connect($servername, $username, $password);
 
// �������
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "���ӳɹ�";
?>
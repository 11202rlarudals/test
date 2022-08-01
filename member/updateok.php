<?php
$num = $_POST["num"];

$user = $_POST["user"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$tel = $_POST["tel"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computer10";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE member SET user='$user',pass='$pass',name='$name',tel='$tel' WHERE num=".$num;

if (mysqli_query($conn, $sql)) {
  echo "레코드가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<div>
<a href="./list.php">회원목록</a>
<a href="./register.html">회원등록</a>
</div>

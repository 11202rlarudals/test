<?php
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

$sql = "INSERT INTO member (user, pass, name,tel) VALUES ('$user','$pass','$name','$tel')";

if (mysqli_query($conn, $sql)) {
  echo "데이터가 저장되었습니다.";  
} else {
  echo "오류: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<div>
  <a href='./register.html'>회원등록</a>
  <a href='./list.php'>회원목록</a>
</div>
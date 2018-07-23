<?php
$conn = mysqli_connect("localhost:3306", "root", 'pusan61k');
mysqli_select_db($conn, "my_home");
$sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
// echo $sql;
$result  = mysqli_query($conn, $sql);
if($result->num_rows == 0){
  $sql = "INSERT INTO user (name, password) VALUES('".$_POST['author']."', 'pusan61k')";
  mysqli_query($conn, $sql);
  $user_id = mysqli_insert_id($conn);
} else {
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
}
$sql = "INSERT INTO topic (title,description,author,created) VALUES
('".$_POST['title']."', '".$_POST['description']."', '".$user_id."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/practice4/index2.php');
?>

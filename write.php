<?php
$conn = mysqli_connect("localhost:3306", "root", 'pusan61k');
mysqli_select_db($conn, "my_home");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/practice4/style.css">
</head>
<body id ="target">
    <header>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_HQ6kH9cPyagqKTCc3Vpw83SZCobyqPFKFcugMvQmYHsXkWFR" alt="생활코딩">
        <h1><a href="http://localhost/practice4/index2.php">My Home</a></h1>
  </header>
    <nav>
        <ol>
    <?php
    while( $row = mysqli_fetch_assoc($result)){
      echo '<li><a href="http://localhost/practice4/index2.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
    }
    ?>
        </ol>
    </nav>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
    <a href="http://localhost/practice4/write.php">쓰기</a>
  </div>
  <article>
    <form class="" action="process.php" method="post">
    <p>
      <label for="title">제목:</label>
      <input id="title" type="text" name="title">
    </p>
    <p>
     작성자 : <input type="text" name="author">
    </p>
    <p>
     본문 : <textarea name="description"></textarea>
    </p>
    <input type="submit" name="name">
    </form>
  </article>
</body>
</html>

<?php
if(isset($_POST['signup-submit'])) {
  require 'dbh.php';

  $first = $_POST['first'];

  $sql = "INSERT INTO users (first) VALUES (?);";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt,$sql);
  mysqli_stmt_bind_param($stmt, "s",$first);
  mysqli_execute($stmt);

}

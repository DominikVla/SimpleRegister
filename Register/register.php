<?php
// Getting inputted data via POST and sanitising it
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['psw'];

$name = htmlspecialchars($name);
$age = htmlspecialchars($age);
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);
$hashed_password = password_hash($password, PASSWORD_DEFAULT); // hashes password for secure storing


// Connecting to the DataBase and storing the information

include 'dbConnect.php'; // DB details

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO customer (name, email, password, age)
  VALUES ('$name', '$email', '$hashed_password', '$age')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// Terminate Connection
$conn = null;
?>
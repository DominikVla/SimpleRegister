<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

<form action="register.php" method="POST">
  <div class="container">
    <h1>Register v3.1</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" id="name" required maxlength="60" onkeydown="return /[a-z]/i.test(event.key)">

    <label for="age"><b>Age</b></label>
    <br>
    <input type="number" placeholder="00" name="age" id="age" required min="13" max="140" maxlength="3" onkeydown="return false"><br><br>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>

    <button type="submit" class="registerbtn">Register</button>
  </div>
</body>
</html>

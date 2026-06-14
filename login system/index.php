<?php
include("connection.php");


if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "Select * from registration where username='$username' and password='$password';";
  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($result);
  if($row){
    header("Location: home.php");
  } else {
    ?>
    <script type="text/javascript">
      alert("Invalid Username or Password!");
    </script>
    <?php
  }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .login-box {
            width: 300px;
            padding: 20px;
            background: white;
            margin: 100px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            text-align: center;
        }
        input {
            width: 94%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login Form</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit" name="login">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>

</div>

</body>
</html>


<!-- INSERT INTO `login` (`id`, `username`, `password`) VALUES ('1', 'Ishaq', '123'); -->
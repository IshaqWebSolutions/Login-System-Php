<?php
include("connection.php");


if(isset($_POST['register'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO registration (username, email, password) VALUES ('$username','$email', '$password')";
  $result = mysqli_query($conn, $query);
  if($result){
    header("location: index.php");
  }else{
    ?>
    <script type="text/javascript">
      alert("Registration Failed!");
    </script>
    <?php
  }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .box {
            width: 320px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input {
            width: 94%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: green;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Register</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit" name="register">Register</button>
    </form>

    <p>Already have account? <a href="index.php">Login</a></p>
</div>

</body>
</html>


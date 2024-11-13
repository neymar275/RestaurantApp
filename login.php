<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'NEYFOODS';

    $conn = new mysqli($servername, $username, $password, $db);

    // creating the database NeyFoods
    // $sql = 'CREATE DATABASE NEYFOODS';


    //Creating the tables for food
    // $sql = 'CREATE TABLE USER
    // (
    //     id INT NOT NULL AUTO_INCREMENT,
    //     username VARCHAR(30),
    //     password VARCHAR(30),
    //     email VARCHAR(30),
    //     PRIMARY KEY(id)
    // )
    // ';


    //inserting admin values
    // $sql = 'INSERT INTO USER(username,password,email)
    // VALUES("admin","admin","admin@gmail.com")
    // ';

    // check if connection is successful
    // if ($conn->connect_error) {
    //     die('connection unsuccessful');
    // } else {
    //     echo 'connection successull';
    // }

    //checking if database is created successfully 
    // if ($conn->query($sql)) {
    //     echo 'database created successfully';
    // } else {
    //     echo $conn->error . 'error creating database';
    // }

    //checking if table is created successfully 
    // if ($conn->query($sql)) {
    //     echo 'table has been created successfully';
    // } else {
    //     echo $conn->error . 'error in creating table';
    // }


    //checking if values has been updated successfully
    // if ($conn->query($sql)) {
    //     echo 'values successfully inserted';
    // } else {
    //     echo $conn->error;
    // }

    // selecting data from the database 
    $sql  = "SELECT username,password,email
    FROM user";
    $result = $conn->query($sql);

    // getting user inputs on the website 
    if (true) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    }

    if ($result->num_rows > 0) {
        //output data for each row 
        while ($row = $result->fetch_assoc()) {
            if ($row['username'] === $user) {

                echo 'the username match';
                header("Location: http://localhost/Demo/loginP/home.html");
            } else {
                echo 'wrong username!';
            }
        }
    }

    //checking for user entry and logging in 


    ?>

    <div class="container">
        <div class="maincontainer">
            <h3 class="head1">Login</h3>
            <form action="login.php" method="post">
                <label for="username">Username</label><br>
                <i class="fa-regular fa-user"></i><input class="username " type="text" placeholder="Type your username" name="user"><br>
                <label for="password" class="passedit">Password</label><br>
                <i class="fa-solid fa-fingerprint"></i><input type="text" class="password" placeholder="Type your password" name="pass"><br>
                <a href="#" class="forget">Forgot password?</a><br>
                <input type="submit" value="LOGIN" class="login">


            </form>
            <p class="signup">Or Sign Up Using </p>
            <div class="icons">
                <i class="fa-brands fa-square-facebook" id="fish"></i>
                <i class="fa-brands fa-square-x-twitter" id="fish2"></i>
                <i class="fa-brands fa-google" id="fish3"></i>
            </div>
            <p class="signup">Or Sign Up Using </p>
            <div class="lastsign">
                <a href="signup.html" class="lastsign">SIGN UP</a>
            </div>



        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>
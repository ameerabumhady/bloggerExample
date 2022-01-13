<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            width: 50%;
            margin: auto;
            background-color: #ccc;
            text-align: center;
        }
        h2{
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px 0;
        }
        .input_login{
            padding: 10px;
            margin: 20px 10px;
            width: 250px;
            border-radius: 15px;
        }
        
    </style>
</head>
<body>
<?php
session_start();
$error = '';
// print_r($_POST);
if($_POST){

    $password = htmlspecialchars($_POST['password']);

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }else{
        $email = htmlspecialchars($_POST['email']);
    }
}
$conn = mysqli_connect('localhost','root','','blogger');

$query = "select * from users where email = '$email' ";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    
    if(password_verify($password, $row['password'])){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
    }else{
        $error = 'user or password error';
    }
}else{
    $error = 'user or password error';
}
if(isset($_SESSION['id'])){
    header('location: blogs.php');
}
?>
    <header >
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h2>Log in</h2>
        <div >
            <input class="input_login" type="email" name="email" id="" placeholder="E-mail" require>
        </div>
        <div>
            <input class="input_login" type="password" name="password" id="" placeholder="Password" require>
        </div>
        <div>
            <button class="input_login" type="submit" name="submit">Login</button>
        </div>
        </form>

        <?php
        if(!empty($error)){
            echo "<h3 style='background-color: red;'> $error </h3>";
        }
        if(!empty($emailErr)){
            echo "<h3 style='background-color: red;'> $emailErr </h3>";
        }
        ?>
    </header>
</body>
</html>
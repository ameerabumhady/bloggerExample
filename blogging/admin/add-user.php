<?php
    session_start();
    include 'config.php';
    include 'header.php';
    include 'aside.php';

    if(!$_SESSION['id']){
        header("location: login.php");
    }
    if($_POST){
        $error = "";
        $message = "";

        
        
        $password = htmlspecialchars($_POST['password']);

        if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
            $nameErr = "Only letters and white space allowed";
        }else{
            $name = htmlspecialchars($_POST['name']);
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }else{
            $email = htmlspecialchars($_POST['email']);
        }

        if(empty($name) || empty($email) ||empty($password) > 0){
            $error = " there exist error";
        }else{
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
            
            $query = "insert into users (name, email, password) values ('$name','$email','$password_hashed')";

            if(mysqli_query($conn, $query)){
                $message = "succed";
            }else{
                $error = "faild";
            }
        }

    }

    ?>
<div class="main-content"> 
    <h2>Add User</h2>
    <?php
    if(!empty($message)){
        echo "<h3 style='background-color: green;'> $message </h3>";
    }
    if(!empty($error)){
        echo "<h3 style='background-color: red;'> $error </h3>";
    }
    if(!empty($nameErr)){
        echo "<h3 style='background-color: red;'> $nameErr </h3>";
    }
    if(!empty($emailErr)){
        echo "<h3 style='background-color: red;'> $emailErr </h3>";
    }
    ?>
    <form action="" method="post" >
        <h2>add user</h2>
        <input class="input" type="text" name="name" placeholder="Name" require>   
        <br>
        <input class="input" type="email" name="email" placeholder="Email" require>
        <br>
        <input class="input" type="password" name="password" placeholder="Password" require>
        <br>
        <input class="input" type="submit" value="add user">
    </form>
</div>

<?php
include 'footer.php';
?>
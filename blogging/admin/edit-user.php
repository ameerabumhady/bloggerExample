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

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        $id = htmlspecialchars($_GET['id']);

        if(empty($name) || empty($email) >  0){
            $error = " there exist error";
        }else{
            $query = "update users set name ='$name', email = '$email' where id = $id";

            if(mysqli_query($conn, $query)){
                $message = "succed";
            }else{
                $error = "faild";
            }
        }

    }

    if($_GET){
        $id = htmlspecialchars($_GET['id']);
    
        $query = "select * from users where id = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
        }else{
            header("Location: error404.php");
        }
    }

    ?>
<div class="main-content"> 
    <h2>Edit Users</h2>
    <?php
    if(!empty($message)){
        echo "<h3 style='background-color: green;'> $message </h3>";
    }
    if(!empty($message)){
        echo "<h3 style='background-color: red;'> $error </h3>";
    }
    ?>
    <form action="" method="post" >
        <input class="input" type="text" name="name" placeholder="Name" require value="<?php if(isset($row['name'])) echo $row['name']; ?>">   
        <br>
        <input class="input" type="email" name="email" placeholder="Email" require value="<?php if(isset($row['email'])) echo $row['email']; ?>">
        <br>
        <input class="input" type="submit" value="Edit User">
    </form>
</div>

<?php
include 'footer.php';
?>
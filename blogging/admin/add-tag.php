<?php
    include 'config.php';
    session_start();
    include 'header.php';
    include 'aside.php';

    if(!$_SESSION['id']){
        header("location: login.php");
    }
    if($_POST){
        $error = "";
        $message = "";

        $name = htmlspecialchars($_POST['name']);
        $user_id = $_SESSION['id'];

        if(empty($name)  > 0){
            $error = " there exist error";
        }else{
           
            $query = "insert into tags (name, user_id) values ('$name','$user_id')";

            if(mysqli_query($conn, $query)){
                $message = "succed";
            }else{
                $error = "faild";
            }
        }

    }

    ?>
<div class="main-content add-cat">
<h2>Add Tag</h2>
        <?php
            if(!empty($message)){
                echo "<h3 style='background-color: green;'> $message </h3>";
            }
            if(!empty($message)){
                echo "<h3 style='background-color: red;'> $error </h3>";
            }
        ?>
    <form action="" method="post" >
        <input class="input" type="text" name="name" placeholder="Add Tag Name" require>   
        <br>
        <br>
        <input class="input" type="submit" value="Add Tag">
    </form>
</div>

<?php
    include 'footer.php';
?>
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

        $id = htmlspecialchars($_GET['id']);

        if(empty($name)  > 0){
            $error = " there exist error";
        }else{

            $query = "update categories set name = '$name' where id = $id";
            
            if(mysqli_query($conn, $query)){
                $message = "succed";
            }else{
                $error = "faild";
            }
        }

    }

    if($_GET){
        $id = htmlspecialchars($_GET['id']);
    
        $query = "select * from categories where id = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
        }else{
            header("Location: error404.php");
        }
    }

    ?>
<div class="main-content add-cat">
    <h2>Edit Category </h2>
    <br>
    <?php
        if(!empty($message)){
            echo "<h3 style='background-color: green;'> $message </h3>";
        }
        if(!empty($error)){
            echo "<h3 style='background-color: red;'> $error </h3>";
        }
    ?>
    <form action="" method="post" >
        <input class="input" type="text" name="name" placeholder="Add Category Name" require value="<?php if(isset($row['name'])) echo $row['name']; ?>">   
        <br>
        <input class="input" type="submit" value="submit">
    </form>
</div>

<?php
    include 'footer.php';
?>
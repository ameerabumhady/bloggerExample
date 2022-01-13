<?php
session_start();
if(!$_SESSION['id']){
    header("location: login.php");
}
include 'config.php';
include 'header.php';
include 'aside.php';


if($_GET){
    $id = htmlspecialchars($_GET['id']);

    $query = "select * from contacts where id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: error404.php");
    }
}

if(isset($row['subject'])){
echo $row['subject'];
}

?>

<div class="main-content">
    <h2>View Message Details</h2>
    <br>
        <?php
            if(!empty($message)){
                echo "<h3> $message </h3>";
            }
            if(!empty($message)){
                echo "<h3> $error </h3>";
            }
        ?>
    <div>
        <form action="" method="post">
            <input type="text" name="name" placeholder="input your name" value="<?php if(isset($row['name'])) echo $row['name']; ?>">
            <br>
            <input type="email" name="email" placeholder="input your email" value="<?php if(isset($row['email'])) echo $row['email']; ?>">
            <br>
            <input type="text" name="subject" placeholder="input your subject" value="<?php if(isset($row['subject'])) echo $row['subject']; ?>">
            <br>
            <textarea name="mssg" id="" cols="30" rows="10" placeholder="input your message">
            <?php if(isset($row['message'])) echo $row['message']; ?>
            </textarea>
            <br>
            <input type="url" name="" value="<?php if(isset($row['id'])) echo 'contact.php?id='.$row['id']; ?>">
            
        </form>
    </div>
</div>

<?php
    include 'footer.php';
?>
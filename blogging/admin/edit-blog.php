
<?php
include 'config.php';
include 'header.php';
include 'aside.php';

session_start();

if(!$_SESSION['id']){
    header("location: login.php");
}

if($_POST){
    $error = "";
    $message = "";

    $subject = htmlspecialchars($_POST['subject']);
    $category_id = htmlspecialchars($_POST['category_id']);
    $details = htmlspecialchars($_POST['details']);
    $user_id = $_SESSION['id'];

    $id = htmlspecialchars($_GET['id']);

    if(empty($subject) || empty($category_id) ||empty($details) || $_FILES['img']['error'] > 0){
        $error = " there exist error";
    }else{
        if($_FILES['img']['name']){
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);
            $img = $_FILES['img']['name'];

            $query = "update blogs set subject = '$subject', details = '$details', user_id = $user_id, category_id = $category_id, img_src = '$img' where id = $id";
        }else{
            $query = "update blogs set subject = '$subject', details = '$details', user_id = $user_id, category_id = $category_id where id = $id";
        }
        

        if(mysqli_query($conn, $query)){
            $message = "succed";
        }else{
            $error = "faild";
        }
    }
}
if($_GET){
    $id = htmlspecialchars($_GET['id']);

    $query = "select * from blogs where id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: error404.php");
    }
}

?>
<div class="main-content">
    <h2>Edit Blog</h2>
<form method="post" enctype="multipart/form-data">
    <label >Blog Subject</label>
    <input class="input" type="text" name="subject" placeholder="Subject" require value="<?php 
        if(isset($row['subject'])) echo $row['subject'];
    ?>">
    <br>
    <label >Blog Category</label>
    <select class="input" name="category_id" require>
        <option value="">choose</option>
        <?php
            $query = "select * from categories";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){
                while($r = mysqli_fetch_assoc($result)){
                    
                    $r['id'] == $row['category_id'] ? $s = "selected": $s="";
                    echo "<option $s value=".$r['id'].">".$r['name']."</option>";
                }
            }
        ?>
    </select>
    <br>
    <label>Choose Image</label>
    <input class="input" type="file" name="img" placeholder="Choose File" >
    <br>
    <img width="100%" src="<?php if(isset($row['img_src'])) echo 'img/'.$row['img_src']; ?>" alt="">
    <br>
    <label >Blog Details</label>
    <br>
    <textarea class="input" name="details" cols="30" rows="10" placeholder="details">
        <?php 
            if(isset($row['details'])) echo $row['details'];
        ?>
    </textarea>
    <br>
    <?php
        if(!empty($message)){
            echo "<h3> $message </h3>";
        }
        if(!empty($message)){
            echo "<h3> $error </h3>";
        }
    ?>
    <br>
    <input class="input" type="submit" value="Edit blog">
</form>

</div>

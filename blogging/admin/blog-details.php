
<?php
include 'config.php';
include 'header.php';
include 'aside.php';

session_start();

if(!$_SESSION['id']){
    header("location: login.php");
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
    <?php
        if(!empty($message)){
            echo "<h3> $message </h3>";
        }
        if(!empty($error)){
            echo "<h3> $error </h3>";
        }
    ?>
<form method="post" enctype="multipart/form-data">
    <label >Blog Subject</label>
    <input class="input" type="text" name="subject" value="<?php 
        if(isset($row['subject'])) echo $row['subject'];
    ?>">
    <br>
    <label >Blog Category</label>
    <select class="input" name="category_id">
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
    <label >Blog image</label>
    <br>
    <br>
    <img width="100%" src="<?php if(isset($row['img_src'])) echo 'img/'.$row['img_src']; ?>">
    <br>
    <label >Blog Details</label>
    <br>
    <textarea class="input" name="details" cols="30" rows="10">
        <?php 
            if(isset($row['details'])) echo $row['details'];
        ?>
    </textarea>
    <br>

</form>

</div>

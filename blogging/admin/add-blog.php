    <?php
    session_start();
    if(!$_SESSION['id']){
        header("location: login.php");
    }
    include 'config.php';
    include 'header.php';
    include 'aside.php';
    
    if($_POST){
        $error = "";
        $message = "";

        $subject = htmlspecialchars($_POST['subject']);
        $category_id = htmlspecialchars($_POST['category_id']);
        $tag_id = htmlspecialchars($_POST['tag_id']);
        $details = htmlspecialchars($_POST['details']);
        $user_id = $_SESSION['id'];
        $created_at = date('m-d-Y h:i:s a',time());

        if(empty($subject) || empty($category_id) || empty($tag_id) ||empty($details) || $_FILES['img']['error'] > 0){
            $error = " there exist error";
        }else{
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);
            $img = $_FILES['img']['name'];
            $query = "insert into blogs (subject, details, user_id, category_id, created_date, img_src) values ('$subject','$details','$user_id','$category_id','$created_at','$img');";
            //insert into blog_tag(b_id, t_id) values ();
            
            if(mysqli_query($conn, $query)){
                $message = "succed";
            }else{
                $error = "faild";
            }
        }

    }

    ?>
    <div class="main-content add-blog">
        <form action="#" method="post" enctype="multipart/form-data">
            <h2>Add Blog</h2>
            <input class="input" type="text" name="subject" placeholder="Subject" require>
            <br>
            <select class="input" name="category_id" require>
                <option value="">choose category</option>
                <?php
                    $query = "select * from categories";
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result) > 0){
                        while($r = mysqli_fetch_assoc($result)){
                            echo "<option value=".$r['id'].">".$r['name']."</option>";
                        }
                    }
                ?>
            </select>
            <br>
            <select class="input" name="tag_id" require>
                <option value="">choose tag</option>
                <?php
                    $query = "select * from tags";
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result) > 0){
                        while($r = mysqli_fetch_assoc($result)){
                            echo "<option value=".$r['id'].">".$r['name']."</option>";
                        }
                    }
                ?>
            </select>
            <br>
            <input class="input" type="file" name="img" placeholder="Choose File" require>
            <br>
            <textarea class="input" name="details" cols="30" rows="10" placeholder="details"></textarea>
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
            <input class="input" type="submit" value="add blog">
        </form>
    </div>
    
<?php
    include 'footer.php';
?>
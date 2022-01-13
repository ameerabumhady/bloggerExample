<?php
    include 'header.php';
    include 'admin/config.php';

    if($_POST){
        $error = "";
        $message = "";

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $mssg = htmlspecialchars($_POST['mssg']);

        if(empty($name) || empty($email) ||empty($subject) || empty($mssg)  > 0){
            $error = " there exist error";
        }else{
            
            $query = "insert into contacts (name, email, subject, message) values ('$name','$email','$subject','$mssg')";

            if(mysqli_query($conn, $query)){
                $message = "succed";
            }else{
                $error = "faild";
            }
        }

    }
?>
<div class="view-visitor contact">
    <h2>Send any message or Enquiry</h2>
    <form action="" method="post">
        <input class="input" type="text" name="name" placeholder="input your name">
        <br>
        <input class="input" type="email" name="email" placeholder="input your email">
        <br>
        <input class="input" type="text" name="subject" placeholder="input your subject">
        <br>
        <textarea class="input" name="mssg" id="" cols="30" rows="10">input your message details</textarea>
        <br>
        <input class="input" type="submit" value="send message">
        <br>
        <?php
            if(!empty($message)){
                echo "<h3> $message </h3>";
            }
            if(!empty($error)){
                echo "<h3> $error </h3>";
            }
        ?>
    </form>
</div>
<?php
include 'footer.php';
?>
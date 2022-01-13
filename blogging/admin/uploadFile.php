<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $message = "";
    $error = "";
    if($_FILES){
        if($_FILES['img']['error'] == 0){
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);
            $message = "uploaded done!";
        }else{
            $error = "Error in upload";
        }
    }
    if(!empty($message)){
        echo '<br>'. $message;
    }
    if(!empty($error)){
        echo '<br>'. $error;
    }
    ?>
    <form  method="post" enctype="multipart/form-data">
        <input type="file" name="img" >
        <input type="submit" >
    </form>
</body>
</html>
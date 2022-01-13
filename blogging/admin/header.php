<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/adminStyle.css">
</head>
<body>
    <header class="pageHeader">
        <h1><i>Blogging To You</i></h1>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="blogs.php">blogs</a></li>
                <li><a href="categories.php">categoreis</a></li>
                <li><a href="tags.php">tags</a></li>
                <li><a href="../about-us.php">About us</a></li>
                <li><a href="../contact.php">Contact us</a></li>
                
                <?php 
                if(isset($_SESSION['id'])){
                    echo '<li class="login_button" style="float: right;"><a  href="logout.php"> Logout </a></li>';
                }else{
                    echo '<li class="login_button" style="float: right;"><a  href="login.php"> Login </a></li>';
                }
                ?> 
            </ul>
        </nav>
        
    </header>
    <div>
        
    </div>
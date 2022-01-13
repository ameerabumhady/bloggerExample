<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homestyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Document</title>
</head>
<body>
    <hr style="border: 2px solid blue;">
    <header class="pageHeader">
        <h1><i>Blogging To You</i></h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#blog-section">blogs</a></li>
                <li><a href="index.php#categorysection">categoreis</a></li>
                <li><a href="index.php#tagsection">tags</a></li>
                <li><a href="index.php#visitorsection">visitor message</a></li>
                <li><a href="about-us.php">About us</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <?php 
                if(isset($_SESSION['id'])){
                    echo '<li class="login_button" style="float: right;"><a  href="admin/logout.php"> Logout </a></li>';
                }else{
                    echo '<li class="login_button" style="float: right;"><a  href="admin/login.php"> Login </a></li>';
                }
                ?> 
            </ul>
        </nav>   
    </header>
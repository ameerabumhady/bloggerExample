<?php
session_start();
if(!$_SESSION['id']){
    header("location: login.php");
}
include 'header.php';
include 'aside.php';
include 'config.php';

if($_GET){
    $message = "";
    $error = "";

    $id = htmlspecialchars($_GET['id']);

    $query = "delete from categories where id = $id";
    
    if(mysqli_query($conn, $query)){
        $message = "The deletion process has successful";
    }else{
        $error = "The deletion process has failed";
    }
}
?>
<div class="main-content">
    <h2>View Category</h2>
    <?php
        if(!empty($message)){
            echo "<h3 style='background-color: green;'> $message </h3>";
        }
        if(!empty($message)){
            echo "<h3 style='background-color: red;'> $error </h3>";
        }
    ?>
    <table>
        <tr>
            <th>#</th>
            <th>category name</th>
            <th>user id</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <?php
            include 'config.php';

            $query = "select * from categories";

            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){
                while($r = mysqli_fetch_assoc($result)){
                    $user_name = mysqli_fetch_assoc(mysqli_query($conn,"select name from users where id = ".$r['user_id']))['name'];
                    echo "<tr> <td>" . $r['id'] . "</td> <td>".$r['name'] . "</td> <td>".$user_name."</td> <td> <a  href='categories.php?id=".$r['id']. "'> Delete</a> </td> <td> <a  href='edit-category.php?id=".$r['id']. "'> Edit</a> </td> </tr>";
                }
            }
            ?>
    </table>
</div>

<?php
include 'footer.php';
?>
<?php
    session_start();
    if(!$_SESSION['id']){
        header("location: login.php");
    }
    include 'config.php';
    include 'header.php';
    include 'aside.php';

    if($_GET){
        $message = "";
        $error = "";
    
        $id = htmlspecialchars($_GET['id']);
    
        $query = "delete from contacts where id = $id";
        
        if(mysqli_query($conn, $query)){
            $message = "The deletion process has successful";
        }else{
            $error = "The deletion process has failed";
        }
    }
?>
<div class="main-content table-style">
    <h2>View Message</h2>
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
            <th>Name</th>
            <th>Subject</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <?php
            $query = "select * from contacts";

            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){
                while($r = mysqli_fetch_assoc($result)){
                    echo "<tr> <td>" . $r['id'] . "</td> <td>".$r['name'] . "</td> <td>".$r['subject']."</td>  <td> <a  href='contacts.php?id=".$r['id']. "'> Delete</a> </td> <td> <a  href='contact-details.php?id=".$r['id']. "'> Details</a> </td> </tr>";
                }
            }
        ?>
    </table>
</div>

<?php
include 'footer.php';
?>
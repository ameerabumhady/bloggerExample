<?php
    include 'admin/config.php';
?>   

<div id="blog-section" class="view-blog">
    <h2>Blogs <a href="more-blog.php">  More >></a></h2>
    <br>
    <?php 
    $query = "select * from blogs limit 4";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        while($r = mysqli_fetch_assoc($result)){
            $user_name = mysqli_fetch_assoc(mysqli_query($conn,"select name from users where id = ".$r['user_id']))['name'];
            $category_name = mysqli_fetch_assoc(mysqli_query($conn,"select name from categories where id = ".$r['category_id']))['name'];
            //echo "<tr> <td>" . $r['id'] . "</td> <td>".$r['subject'] . "</td> <td>".$category_name."</td> <td>".$user_name."</td> <td>".$r['created_date']."</td> <td> <a  href='delete-blog.php?id=".$r['id']. "'> Delete</a> </td> <td> <a  href='blog-details.php?id=".$r['id']. "'> Details</a> </td> <td> <a  href='edit-blog.php?id=".$r['id']. "'> Edit</a> </td> </tr>";
            // .$r['img_src']."</td> <td>".$r['details']."</td> <td>"
            echo "<article> <header> <img src = admin/img/".$r['img_src']."> <h2>". $r['subject']."</h2> </header> <section> <p class='details'>".$r['details']." </p> <p class='created'> <span> Created By: </span> ".$user_name." <span> Created At: </span> ".$r['created_date']."</p> </section> </article>";
        }
    }
    
    ?>
</div>
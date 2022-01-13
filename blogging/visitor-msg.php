<?php
    include 'admin/config.php';
?> 
<div id="visitorsection" class="view-visitor">
        <h2>Visitor Message</h2>
        <?php 
        $query = "select * from contacts limit 4";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            while($r = mysqli_fetch_assoc($result)){
                //echo "<article> <h3> ".$r['name']."</h3> </article>";
                echo "<article> <section> <p class='details'>".$r['message']."</p> </section> <header> <img src='img/user.PNG' alt=".$r['name']."><h3>".$r['email']."</h3> <h2>".$r['name']."</h2> </header> </article>";
            }
        }
        ?>
    </div>
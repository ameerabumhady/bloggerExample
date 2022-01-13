<?php
    include 'admin/config.php';
?> 
<div id="categorysection" class="view-category">
        <h2>Categoreis</h2>
        <br>
        <?php 
        $query = "select name from categories limit 8";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            while($r = mysqli_fetch_assoc($result)){
                echo "<article> <h3> ".$r['name']."</h3> </article>";
            }
        }
        
        ?>
</div>

<div id="tagsection" class="view-tag">
        <h2>Tags</h2>
        <br>
        <?php 
        $query = "select name from tags limit 8";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            while($r = mysqli_fetch_assoc($result)){
                echo "<article> <h3> ".$r['name']."</h3> </article>";
            }
        }
        
        ?>
</div>
<?php   
    include "connection.php";
    if(isset($_GET["equip_no"])){
        $equip_no = $_GET["equip_no"];
        mysqli_query($db, "DELETE FROM `equipment` WHERE `equip_no`=$equip_no");
    
        ?>
        <script type="text/javascript">
            window.location="equipment_view.php";
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            window.location="equipment_view.php";
        </script>
        <?php
    }
<?php   
    include "connection.php";
    
    //if(isset($_GET["equip_no"])){
        if(isset($_POST["submit"])){
        $equip_no = $_POST["equip_no"];
        $qty = $_POST["equip_qty"];
        
        mysqli_query($db, "UPDATE `equipment` SET `equip_qty`=$qty WHERE `equip_no`=$equip_no");
    
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
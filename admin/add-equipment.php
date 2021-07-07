<?php
  include "connection.php";
  
?>

<html>
<body>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT * FROM `equipment` ";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['equip_no']==$_POST['equip_no'])
          {

            $count=$count+1;
          }
          
        } 
        if($count==0)
        {

          mysqli_query($db, "INSERT INTO `equipment` ( `equip_no`, `equip_name`, `equip_qty`) VALUES ('$_POST[equip_no]', '$_POST[equip_name]','$_POST[equip_qty]');");
        
        ?>
          <script type="text/javascript">

           alert("Equipment added successful!!!");
           window.location="/gym_frontend/admin/add_equipment.php";

          </script>
        <?php 
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The equipment already exists.");
              window.location="/gym_frontend/admin/add_equipment.php";
            </script>
          <?php

        }

      }

    ?>
</body>
</html>

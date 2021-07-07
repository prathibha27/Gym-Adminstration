<!doctype html>
<html lang="en">
  <head>
  	<title>Equipment Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.png);"></a>
          <ul class="list-unstyled components mb-5">
	           
             <li>
                 <a href="dashboard_admin.php">Home</a>
             </li>
             <li>
            
             <li>
                 <a href="trainer_all.php">Trainer Information</a>
             </li>
             <li>
              
             <li>
               <a href="member_all.php">Member Information</a>
             </li>
             <li>
               <a href="groupcl_all.php">Group Classes</a>
             </li>
             <li>
               <a href="test.php">Make Member Payment</a>
             </li>
             <li>
               <a href="paid.php">View all Payments</a>
             </li>
             <li>
               <a href="add_trainer.php">Add Trainer</a>
             </li>
             <li>
               <a href="add_member.php">Add New Member</a>
             </li>
             <li>
               <a href="add_attendance.php">Add Member Attendance</a>
             </li>
             <li>
               <a href="viewattendance.php">View all Attendance</a>
             </li>
             <li>
               <a href="equipment_view.php">View and edit Equipment </a>
             </li>
             <li>
               <a href="add_equipment.php">Add Equipment </a>
             </li>
             
             
           
           </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
      <?php
 include "connection.php" ;
 
 /*<html>
  <title> Trainer Information</title>
  align='center' border='1px' style= 'width:300px; line-height: 30px;'
 <center>   
     <form action="fetch_trainer.php" method="post">*/
     
     
 $query="SELECT `equip_no`, `equip_name`, `equip_qty` FROM `equipment` ";
 $result=mysqli_query($db,$query);
 


   echo "<table class='table table-bordered' > ";
          echo "<tr>";
             echo "<th>"; echo " Equipment Id"; echo "</th>";
             echo "<th>"; echo " Equipment Name"; echo "</th>";
             echo "<th>"; echo "Quantity"; echo "</th>";
             echo "<th>"; echo "Delete"; echo "</th>";
             echo "<th>"; echo "Edit"; echo "</th>";
             
            echo "</tr>";
    



            while($row=mysqli_fetch_array($result))
            {
              $qty =  $row["equip_no"]; 
            	
                echo "<tr>";
                echo "<td>"; echo  $row['equip_no'] ; echo "</td>";
            	echo "<td>"; echo  $row['equip_name'] ; echo "</td>";
              echo "<td>";  echo $row['equip_qty'] ; echo "</td>";
              echo "<td>"; 
              ?> <a href="delete_equip.php?equip_no=<?php echo $row["equip_no"]; ?>">Delete</a><?php
              echo "</td>";
              echo "<td>"; 
              ?><a data-toggle="modal" data-target="#modalRegister" href="edit_equip.php?equip_no=<?php echo $row["equip_no"]; ?>">Edit</a><?php
              echo "</td>";
            echo "</tr>";
            
            }
           
           echo "</table>";



            ?>
          <!--   <script type="text/javascript">
              
              window.location="/gym/dash/trainer_info.php";

            </script> -->

            <div id="modalRegister" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               <!-- <h4 class="modal-title" style="text-align-last: center">Update Quantity</h4>-->
            </div>
            <div class="modal-body">
              <form id="edit_form" action="edit_equip.php" method="POST">
              <input
                    type="number"
                    name="equip_no"
                    class="inp1"
                    placeholder="Confirm equip no."
                   
                    required
                    autocomplete="off"
                  />
              <input
                    type="number"
                    name="equip_qty"
                    class="inp1"
                    placeholder="Quantity"
                    required
                    autocomplete="off"
                  />
                  <button onclick="form_submit()"
                    type="submit"
                    name="submit"
                    class="button button-block spacee"
                  >
                    Update
                  </button>
          </form>
          <script type="text/javascript">
  function form_submit() {
    document.getElementById("edit_form").submit();
   }    
  </script>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    

              

         
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

           
       

       
      </div>
		</div>
      


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
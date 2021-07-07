<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!doctype html>
<html lang="en">
  <head>
    <style>
    @import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
    card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
    }
    
    .title {
      color: grey;
      font-size: 18px;
    }
    
    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }
    
    button:hover, a:hover {
      opacity: 0.7;
    }
  </style>
  	<title>Welcome to Armour</title>
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
       <div class="container">
    
    <div class="col-lg-12 well">
    <h1 style="padding-bottom: 30px; font-size:40px;"><center>Add Equipment</center></h1>
    <div class='col-md-4'></div>
        <div class='col-md-4'>
	<div class="row">
				<form method="POST" action="add-equipment.php">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Equipment Id</label>
								<input type="text" name="equip_no" class="form-control" size='60' required>
							</div></div>
              </div>
              <div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Equipment Name</label>
								<input type="text" name="equip_name" class="form-control" size='60'required>
							</div></div></div>
              <div class="col-sm-12">
              <div class="row">
							<div class="col-sm-12 form-group">
								<label>Equipment Quantity</label>
								<input type="text" name="equip_qty" class="form-control" required>
							</div></div></div>
                            </div></div></div>       
         <div style="padding-top: 40px;" class="row">
        <div class="col-sm-12">
					<button  type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
            </div>      
				</form> 
				</div>
	</div>
  </div>
	</div>
      

  

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
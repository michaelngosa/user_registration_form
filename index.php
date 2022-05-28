<?php $error = ''; ?>
<!DOCTYPE html>
<html>
 <head>
  <title>User Registration Form</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 </head>
 <body>
  <br />
  <div class="container">
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form action="user_data.php" method="post" >
     <h3 align="center">Registration Form</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" required />
     </div>
	 <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" required />
     </div>
     <div class="form-group">
      <label>Enter date of birth</label>
	   <input type="text" name="dob" placeholder="Day-Month-Year" class="form-control" required />
     </div>
	 
	 <div class="form-group">
      <label>Enter your Gender</label>
      <input type="text" name="gender" class="form-control" placeholder="Enter your gender" required />
     </div>
	 
	 <div class="form-group">
      <label>Enter your Country</label>
      <input type="text" name="country" class="form-control" placeholder="Enter Date your country" required />
     </div>
	 
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     </div>
    </form>
   </div>
  </div>
 </body>
</html>
<?php require_once('../config.php');?>
<?php include_once('includes/header.php');?>
<?php include_once('includes/side-nav.php');?>
<div class="container">
   <div class="card card-body">
   	<div class="row">
   		<div class="col-md-9">
   			<h2></h2>
   			<form action="">
   				<h2 class="text-center"><?php echo strtoupper($_SESSION['user_full_name']);?></h2>
   				     <div class="form-group col-md-10">
                   	<label>Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder=" Name">
                  </div>
                  <div class="form-group col-md-10">
                  	<label>Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="userName">
                  </div>
                  <div class="form-group col-md-10">
                  	<label>UserEmail</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                  </div>
                  <div class="form-group col-10">   
                <label>Address</label>
				<input type="" name="Address" class="form-control" placeholder="Your Address" required>  
                  </div>
 
                  <div class="text-center pt-3">
				<input type="Submit" name=""  value="Submit" name="send" placeholder="submit">
                </div>
   			</form>
   		</div>
        <div class="col-md-3">
        	<div class="card-img border rounded-circle badge-primary" style="border-width: 3px!important;">
        		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSVNDTCDdykZVDp4910Sux5b0qaQboq6swiLhZI04&s" class="img-fluid w-100" alt="">
        	</div>
        	
        </div>
   	</div>
   </div>
</div>
<div></div>
<?php include_once('includes/footer.php');?>
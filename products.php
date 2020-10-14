<?php
$siteurl = "http://localhost/training/template/";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "product";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if(isset($_POST['submit'])) {
    $name = isset($_POST['name'])? $_POST['name']:'';
    $price = isset($_POST['price'])? $_POST['price']:'';
    $filename= isset($_POST['filename'])? $_POST['filename']:'';
    $textfield = isset($_POST['textfield'])? $_POST['textfield']:'';
}

$sql = "INSERT INTO add(`name`, `price`, `filename`,`textfield`)VALUES ('".$name."', '".$price."', '".$filename."','".$textfield."')";

if ($conn->query($sql) === TRUE) {
//echo "New record created successfully";
} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
}






?>


<?php include('header.php'); ?>
    <?php include('sidebar.php'); ?>
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Products</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				
					
					<div class="tab-content" id="tab2">
					
						<form action="#" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							
							    <p>
								    <label>Name</label>
								    <input class="text-input medium-input datepicker" type="text" id="medium-input" name="name" /> 
								</p>
								 
								<p>
									<label>Price</label>
										<input class="text-input small-input" type="text" id="small-input" name="price" /> 
								</p>
								
								
								<p>
									<label>Image</label>
									<input type="file" id="myFile" name="filename">
								</p>

								<p>
									<label>Category</label>              
									<select name="dropdown" class="small-input">
										<option value="1">Men</option>
										<option value="2">Women</option>
										<option value="3">Kids</option>
										<option value="4">Electronics</option>
										<option value="5">Sports</option>
									</select> 
								</p>
								
								<p>
									<label>Tags</label>
									<input type="checkbox" name="fashion" /> Fashion 
									<input type="checkbox" name="ecommerce" /> Ecommerce
									<input type="checkbox" name="shop" /> Shop
									<input type="checkbox" name="handbag" /> Hand Bag
									<input type="checkbox" name="laptop" /> Laptop
									<input type="checkbox" name="headphone" /> Headphone
								</p>
								
								<p>
									<label>Description</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				
			
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			<!--
			<div class="notification attention png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
				</div>
			</div>
			
			<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div> -->
			
			<!-- End Notifications -->
			
			<?php  include('footer.php'); ?>
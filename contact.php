<?php include 'headernew.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
		
       	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.547837811439!2d73.0494689!3d6.8441281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3bc7f50268686e8!2sHideaway%20Beach%20Resort%20%26%20Spa%20Maldives!5e0!3m2!1sen!2sph!4v1618018530388!5m2!1sen!2sph" width="100%" height="300" frameborder="0"></iframe>	
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form action="insertcontact.php" role="form" method="POST" onSubmit="alert('Details Sent!');">
			<div class="form-group">	
			<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone" required="">
			</div>
			<div class="form-group">
			<textarea class="form-control" name="message" placeholder="Message" rows="4"required=""></textarea>
			</div>
					
			
			<input type="submit" class="btn btn-default" value="Send" name="insertcontact">
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>

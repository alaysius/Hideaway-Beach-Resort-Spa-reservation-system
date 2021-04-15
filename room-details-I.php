<?php include 'headernew.php';?>

<div class="container">

<h1 class="title">Family Villa with Pool</h1>



 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/70.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/72.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/73.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p>The Family Villa with Pool at Hideaway Beach Resort and Spa is your very own luxury beachfront retreat - everything your family dreamed a holiday in the island could be and more.
	  Designed to be like a private home, there is space in abundance; a private stretcb of powdery soft beach, infinity pool and even a rooftop terrace for star gazing.A separate living room
	  area adds an area to relax to the villa.</p>
    <p>This villa can be adapted to accomodate families or groups.A lockable master bedroom provides complete privacy.</p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Amenitites</h3>    
    <ul>
     <li>There is sundeck available. </li>
      <li>One inifinity pool with a great view.</li>
      <li>A high speed wifi.</li>
      <li>A jacuzzi to relax after a long day</li>
      <li>An air conditioning available that surrounds the entire room.</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Size<span>440 sq</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span>Php 10,000</span></div>
    </div>
	<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form action="reserveII.php" role="form" class="wowload fadeInRight" method="POST" onSubmit="alert('Reservation Confirmed!');">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required= "">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required= "">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control" name="phone" placeholder="Phone" required= "">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="numberchild">
              <option>No. of Rooms</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="numberadult">
              <option>No. of Adult</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
             <div class="col-xs-4">
              <select class="form-control col-sm-2" name="date" id="expiry-month">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
				<option value="12">12</option>
                <option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
			    <option value="18">18</option>
				<option value="19">19</option>	 
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
			    <option value="23">23</option>
			    <option value="24">24</option>
			    <option value="25">25</option>
			    <option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="month">
                <option>Month</option>
                <option value="January">Jan</option>
                <option value="February">Feb</option>
                <option value="March">Mar</option>
                <option value="April">Apr</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">Aug</option>
                <option value="September">Sep</option>
                <option value="October">Oct</option>
                <option value="November">Nov</option>
                <option value="December">Dec</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
			    <option>Year</option>
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4"></textarea>
        </div>
        <input type="submit" class="btn btn-default" value="Submit" name="insertdata">
    </form>    
</div>
</div>  
</div>
</div>
	</div>
	</div>
                     


</div>
<?php include 'footer.php';?>
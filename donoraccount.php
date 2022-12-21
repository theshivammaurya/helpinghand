<?php
include("header.php");
if(!isset($_SESSION['donor_id']))
{
	echo "<script>window.location='index.php';</script>";
}
?>
<div id="home-owl" class="owl-carousel owl-theme">

<div class="home-item">

<div class="section-bg" style="background-image: url(img/charity/IMG_20191210_133502.jpg);"></div>

<div class="home">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="home-content">
					<h1>Helping Hands</h1>
					<p class="lead">With your support, we can help more children</p>
				</div>
			</div>
		</div>
	</div>
</div>

</div>


<div class="home-item">

<div class="section-bg" style="background-image: url(img/charity/bck.jpeg);"></div>


<div class="home">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="home-content">
<h1>Helping Hands</h1>
<p class="lead">THIS NEW YEAR, COME TOGETHER TO SUPPORT HEALTH, EDUCATION,
AND DREAMS OF 1.8 MILLION CHILDREN.</p>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

</header>


<div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-5">
<div class="section-title">
<h2 class="title">Welcome to Helping Hands</h2>
<p class="sub-title">Helping Hands is the non-profit organization which helps old people, poor peoples which is situated in Assaigoli, Konaje, Bangalore.</p>
</div>
<div class="about-content">
<p>>Helping Hand provides you with the most convenient and easy way to donate those items that are just lying at some corner of your house, gathering dust and 
taking up some much-needed space. It’s time to donate them and give those books, toys, clothes etc a new life...</p>
</div>
</div>


<div class="col-md-offset-1 col-md-6">
<a href="#" class="about-video" style="height: 550px;">
<img src="img/charity/IMG_20191210_124518.jpg" alt="">
</a>
</div>

</div>

</div>

</div>


<div id="cta" class="section">

<div class="section-bg" style="background-image: url(img/charity/bck.jpeg);" data-stellar-background-ratio="0.5"></div>


<div class="container">

<div class="row">

<div class="col-md-offset-2 col-md-8">
<div class="cta-content text-center">
<h1>Register as DONOR</h1>
<a href="" class="primary-button" onclick="return false" data-toggle="modal" data-target="#DonorLoginModal">Login Panel...</a>
<a href="" class="primary-button" onclick="return false" data-toggle="modal" data-target="#DonorRegisterModal">Join Us Now...</a>
</div>
</div>

</div>

</div>

</div>


<div id="events" class="section">

<div class="container">

<div class="row">

<div class="col-md-8 col-md-offset-2">
<div class="section-title text-center">
<h2 class="title">Helping Hands</h2>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.html">
<img src="img/event-1.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.html">Help people in need</a></h3>
<p>Provide direct support to an individual, family or community by paying medical expenses or offering financial aid..</p>
</div>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.html">
<img src="img/event-2.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.html">Take action in an emergency</a></h3>

<p>Raise funds in response to a natural disaster or humanitarian crisis. Make a difference in minutes.</p>
</div>
</div>
</div>

<div class="clearfix visible-md visible-lg"></div>

<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.html">
<img src="img/event-3.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.html">Take part in a charity event</a></h3>

<p>Choose from hundreds of official events including marathons, bike rides, Dryathlons and bake offs….</p>
</div>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.html">
<img src="img/event-4.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.html">Celebrate an occasion</a></h3>
<p>Mark a special event like a birthday, wedding or final exam by asking friends for donations rather than gifts..</p>
</div>
</div>
</div>

</div>

</div>

</div>


<?php
include("footer.php");
?>
<?php
include("header.php");
if(!isset($_SESSION['staff_id']))
{
	echo "<script>window.location='index.php';</script>";
}
?>
</header>


<div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-12">
<div class="section-title">
	<center><h2 class="title">DASHBOARD</h2></center>
</div>
</div>



</div>

</div>

</div>


<div id="numbers" class="section">

<div class="container">

<div class="row">

	<div class="col-md-3 col-sm-6">
		<div class="number">
			<img src="img/alubm.jpg" style="width:100%;height: 150px;">
			<h3>
			<?php
			$sql ="SELECT * FROM album";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Album Records</span>
		</div>
	</div>
	
	

	
	<div class="col-md-3 col-sm-6">
		<div class="number">
			<img src="img/donor.jpg" style="width:100%;height: 150px;">
			<h3>
			<?php
			$sql ="SELECT * FROM donor";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>donor Records</span>
		</div>
	</div>
	
	
	<div class="col-md-3 col-sm-6">
		<div class="number">
			<img src="img/food donation.jpg" style="width:100%;height: 150px;">
			<h3>
			<?php
			$sql ="SELECT * FROM food_donor";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Donated Items Records</span>
		</div>
	</div>
	
	
	<div class="col-md-3 col-sm-6">
		<div class="number">
			<img src="img/member_type.jpg" style="width:100%;height: 150px;">
			<h3>
			<?php
			$sql ="SELECT * FROM member_type ";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Member type Records</span>
		</div>
	</div>
	
	
	<div class="col-md-3 col-sm-6">
		<div class="number">
			<img src="img/staff.jpg" style="width:100%;height: 150px;">
			<h3>
			<?php
			$sql ="SELECT * FROM staff ";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>staff Records</span>
		</div>
	</div>
	
	
	


</div>

</div>

</div>

<?php
include("footer.php");
?>
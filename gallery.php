<?php
include("header.php");
?>

<div id="page-header">

<div class="section-bg" style="background-image: url(img/background-2.jpg);"></div>


<div class="container">
<div class="row">
<div class="col-md-12">
<div class="header-content">
<h1>Photo Gallery</h1>
</div>
</div>
</div>
</div>

</div>

</header>


<div class="section">

<div class="container">

<div class="row">

<main id="main" class="col-md-9">
<div class="row">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php
$sqlgallery = "SELECT * FROM album WHERE status='Active' ORDER BY album_id DESC";
$qsqlgallery = mysqli_query($con,$sqlgallery);
while($rsgallery  = mysqli_fetch_array($qsqlgallery))
{
echo "<script type='text/javascript'>
    $(function(){
        //prepare Your data array with img urls
        var dataArray=new Array();";
	$sql = "SELECT * FROM photo WHERE album_id='$rsgallery[album_id]'";
	$qsql = mysqli_query($con,$sql);
	$ik=0;
	while($rs = mysqli_fetch_array($qsql))
	{		
        echo "dataArray[$ik]='imgphoto/$rs[photo]';";
		$ik = $ik + 1;
	}
		
echo "
        //start with id=0 after 5 seconds
        var thisId=0;

        window.setInterval(function(){
            $('#thisImg$rsgallery[0]').attr('src',dataArray[thisId]);
            thisId++; //increment data array id
            if (thisId==4) thisId=0; //repeat from start
        },2000);        
    });
</script>";
?>
	<div class="col-md-6">
		<div class="article">
		 <div class="article-img">
		<a href="displayphotos.php?album_id=<?php echo $rsgallery[0]; ?>">
<?php
	$sqlphoto = "SELECT * FROM photo WHERE album_id='$rsgallery[album_id]'";
	$qsqlphoto = mysqli_query($con,$sqlphoto);
	$ik=0;
	$rsphoto = mysqli_fetch_array($qsqlphoto);
?>		
			<img src="imgphoto/<?php echo $rsphoto[photo]; ?>" id='thisImg<?php echo $rsgallery[0]; ?>' alt="">
		</a>
		</div>
		<div class="article-content">
		<h3 class="article-title"><a href="displayphotos.php?album_id=<?php echo $rsgallery[0]; ?>"><?php echo $rsgallery[album_title]; ?></a></h3>
		</div>
		</div>
	</div>
<?php
}
?>
</div>
</main>



</div>

</div>

</div>

<?php
include("footer.php");
?>
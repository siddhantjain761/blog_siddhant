<?php
include "header.php";
include "sidebar.php";
include "dbcon.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="main-wrapper">
	    <section class=" cta-section  " style="background-image:url(t.jpg);
    height: 330px;
    background-repeat: none;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;">
		    <div class="container text-center" style="color:white;position: relative;bottom: -75px;" >
			    <h2 class="heading" style="color: white;font-family: auto;">FOOTBALL</h2>
			    <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #2196f3">Subscribe</button>
                </form>
		    </div><!--//container-->
	    </section>
	 

	     
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
		    	<?php
		    	include ('dbcon.php');
		    	$id=$_GET['id'];
		    	$query = "select * from blog_list where id='$id'";
		    	$data = mysqli_query($con,$query); 
		        $fetch=mysqli_fetch_array($data);
		    	?>
		    	<div class="col md-12">
		    		<img src="admin/<?php echo  $fetch['image'] ?>" style="width:100%;border: 5px solid #2196f3;border-style: double;">
		    		<br>
		    		<h2 style="font-weight:100"><i><?php echo $fetch['descr'];?></i></h2>
		    	</div>
		    	 
			     
			     
		    </div>
	    </section>
	    


</body>
</html>
<?php
include "footer.php";
?>

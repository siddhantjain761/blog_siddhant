<?php 
include ('dbcon.php');  
$query = "select * from admin";
$data = mysqli_query($con,$query);
$fetch = mysqli_fetch_array($data);

?>

<header class="header text-center" style="background-color: #2196f3">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html"><?php echo $fetch['name']?></a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="admin/<?php echo $fetch['image']  ?>" alt="image" style="height: 50px" >			
					
					<div class="bio mb-3">Hi, my name is Siddhant Jain.A Web devloper.Pursuing my final year in ELECTRONICS engineering at MITS engineering college.I always believe in time management and believe in making things happen.A very flexible kind of a person.Feel's very comfortable in the team as a contributing memeber.</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto" style="color: #2196f3">
			            <li class="list-inline-item"><a href="#"><i style="color: #2196f3" class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.linkedin.com/in/siddhant-jain-305b5b16b/"><i style="color: #2196f3" class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/siddhantjain761"><i style="color: #2196f3" class="fab fa-github-alt fa-fw"></i></a></li>
			             
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href=" "><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="admin/index.php"><i class="fas fa-bookmark fa-fw mr-2"></i>Admin Dashboard</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="admin/upload/resume_siddhant.pdf"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>
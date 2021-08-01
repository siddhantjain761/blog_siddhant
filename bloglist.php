
  
    
    <div class="main-wrapper">
	    <section class=" cta-section  " style="background-image:url(t.jpg);
    height: 330px;
    background-repeat: none;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;">
		    <div class="container text-center" style="color:white;position: relative;bottom: -75px;" >
			    <h2 class="heading" style="color: white;font-family: auto;">SPORTS</h2>
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
		    	$query = "select * from blog_list order by id desc";
		    	$data = mysqli_query($con,$query); 
		        while($fetch=mysqli_fetch_array($data)){


		    	?>
		    	<div class="item mb-5">
				    <div class="media">

					    <img class=" mr-3  img-fluid post-thumb d-none d-md-flex" src="admin/<?php echo $fetch['image']?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html"><?php echo $fetch['title']   ?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php echo $fetch['date_time']  ?></div>
						    	  
						    <div class="intro"><?php echo substr($fetch['descr'],0,100)?></div>
						    <a class="more-link" href="readmore.php?id=<?php echo $fetch['id'] ?>"style="color: #2196f3">Read more &rarr;</a>
					    </div><!--//media-body---->
				    </div><!----/media-->
			    </div><!--//item--> 


		    	<?php
		    	}
		    	?>
		    	 
			     
			     
		    </div>
	    </section>
	    

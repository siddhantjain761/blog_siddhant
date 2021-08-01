<?php

include "header.php";
include "sidebar.php";


?>
<?php
include ("../dbcon.php");
$id = $_GET['id'];
$query = "select * from blog_list where id='$id'";
$data=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($data);
//echo "<pre>";
//print_r($fetch);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <form action="update_blog.php" method="post" enctype="multipart/form-data"> 
          <div class="from-group">
          <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>"><br> 
            <label>Title</label>
            <input type="text" name="t" value="<?php echo $fetch['title'] ?>" class="form-control">
          </div>
          <br>
          <div class="from-group"> 
            <label>Description</label>
            <input type="text" name="description" value="<?php echo $fetch['descr'] ?>" class="form-control">
          </div>
          <br>
          <div class="from-group"> 
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <img src="<?php echo $fetch['image']?>" style="width: 100px;height: 100px;border-radius: 70px">
          </div>
          <br>
          <button type="submit" class="btn btn-info">update</button>
        </form>
    </div><!-- /.content-header -->
    <!------yaha pa hama aona code kr na ha-------->
        <!--------code start--------->
         
      
                    
         
         
            
        <!---------------code end------------->
</div>
<!-----code wrapperr end----->
<?php

include "footer.php";


?>
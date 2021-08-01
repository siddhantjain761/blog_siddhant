<?php

include "header.php";
include "sidebar.php";


?>
<?php
include ("../dbcon.php");
$id = $_GET['id'];
$query = "select * from admin where id='$id'";
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
      <form action="updateadmin.php" method="post" enctype="multipart/form-data"> 
          <div class="from-group">
          <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>"><br> 
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $fetch['name']?>" class="form-control">
          </div>
          <br>
          <div class="from-group"> 
            <label>Email</label>
            <input type="text" name="email"  value="<?php echo $fetch['email'] ?>" class="form-control" >

          </div>
          <br>
          <div class="from-group"> 
            <label>Password</label>
            <input type="text" name="password" class="form-control" value="<?php echo $fetch['password']?>">

            
          </div>
          <br>
          <div class="from-group"> 
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="<?php echo $fetch['description']?>">

             
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
<?php
//include "session.php";
include "header.php";
include "sidebar.php";


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add blog</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">blog</li>
              <li class="breadcrumb-item active"><?php echo $_SESSION['name']; ?></li>
              <li class="breadcrumb-item active">
                <img src="<?php echo $_SESSION['image']?>" style="height: 30px;width: 50px;border-radius: 80px" >
              </li>
              <li class="breadcrumb-item active">
                <a href="logout.php"><button class="btn btn-info">logout</button></a>
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
         




      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!------yaha pa hama aona code kr na ha-------->
        <!--------code start--------->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Display Blog</h3>
                <button class="btn btn-info"  data-toggle="modal" data-target="#aa" style="float: right">Add Blog</button>
              </div>
              <!-- /.card-header -->
                
              <div class="card-body">
                <div style="overflow-x:auto;">
                 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>S. NUMBER</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <?php
                  include '../dbcon.php';
                  $query = "select * from blog_list";
                  $data = mysqli_query($con,$query);
                  while($fetch=mysqli_fetch_array($data)){
                    
                  ?>
                  <tbody>
                     
                    <tr>
                      <td><?php echo $fetch['id']  ?> </td>
                      <td><?php echo $fetch['title']  ?> </td>
                      <td style="text-align: justify;"><?php echo $fetch['descr']  ?> </td>
                      <td>
                        <img src="<?php echo $fetch['image']?>" style="width: 100px;height: 100px;border-radius: 70px">
                      </td>
                      <td>
                        <a href=" " class=""><i style="color: blue" class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="editblog.php?id=<?php echo $fetch['id'] ?>" class=""><i class="fa fa-pencil-square-o" style="color: green" aria-hidden="true"></i></a>
                        <a href="addblog_delete.php?id=<?php echo $fetch['id']?>" class=""><i class="fa fa-trash-o"  style="color:red;"></i></a>
                         
                      </td>
                    </tr>
                    
                    <?php
                  }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S. NUMBER</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                     
                  </tr>
                  </tfoot>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
        </div>

        <!---------------code end------------->


        <!---------modal code------>

       
<!-- Button trigger modal -->
<div class="modal fade" id="aa">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add blog</h5>
          <button type="button" class="close" data-dismiss="modal">
          <span >&times;</span>
          </button>
        
    </div>
      <div class="modal-body">
        <form action="addblog_insert.php" method="post" enctype="multipart/form-data"> 
          <div class="from-group"> 
            <label>Title</label>
            <input type="text" name="t" class="form-control">
          </div>
          <br>
          <div class="from-group"> 
            <label>Description</label>
            <input type="text" name="description" class="form-control">
          </div>
          <br>
          <div class="from-group"> 
            <label>Image</label>
            <input type="file" name="image" class="form-control">
          </div>
          <br>
          <button type="submit" class="btn btn-info">submit</button>
        </form>
                     
      </div><!----------modal body end------->
    </div>
  </div>
</div>
</div>
</div>
</div>

</div>

 
  
<!-- /.card -->





<?php

include "footer.php";


?>
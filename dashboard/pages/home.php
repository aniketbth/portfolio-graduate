<?php 
include('../../config.php');
include('../masterpages/header.php');
include('../masterpages/sidebar.php');
include('../masterpages/Navbar.php');

?>


  <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item active">About Us</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <?php 

 $fetch = mysqli_query($config,"SELECT * FROM admin_info");
  $id = $_GET['id'];
 while($row = mysqli_fetch_assoc($fetch))
{


   
   $Aname = $row['name'];
   $pass = $row['password'];
   $Email = $row['email'];
   $pic = $row['admin_pic'];
   $info = $row['description'];
}
?>

  

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Quick Example</h3>
</div>


 <form method="POST" enctype="multipart/form-data">


      <div class="card-body">      
        <label for="exampleInputPassword1" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="aname" value="<?php echo $Aname ;?>">
      </div>



     <div class="card-body">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="text" class="form-control" id="email" value="<?php echo $Email ;?>">
      </div>


      <div class="card-body">      
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="" class="form-control" id="" name="description" value="<?php echo $info ;?>">
      </div>


      <div class="card-body">      
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?php echo $pass ;?>">
      </div>


     

      <div class="card-body">      
         <label class="form-label">Upload Pic Here</label>
        <input type="file" class="form-control" id="images" name="images"  value="<?php echo $pic ;?>">

      </div>

      
     <div class="card-body" >
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
     </div>
      
    </form>

</div>

<?php 

if(isset($_POST['submit']))
 
{

 $aname = $_POST['aname'];
 $mail = $_POST['email'];
 $Description = $_POST['description'];
 $pass = $_POST['password'];
 $pic = $_POST['images'];


   $base_url = 'http://localhost/portfolio-graduate/#home';
$targetFolder = 'uploaded_adminpic/';
$orgFileName = $_FILES['images']['name'];
$tempFileName = $_FILES['images']['tmp_name'];

$completeAddress = $base_url.$targetFolder.$orgFileName;

if(!empty($orgFileName))
{
  mysqli_query($config,"UPDATE admin_info SET  name = '$aname', email = '$mail', password = '$pass', description = '$Description',admin_pic = '$completeAddress'");

  move_uploaded_file($tempFileName,$targetFolder.$orgFileName);

  echo "<script>alert('Data & Profile Picture Updated Successfully');</script>";
}

  elseif(empty($orgFileName)) 
  {

     mysqli_query($config,"UPDATE admin_info SET  name = '$aname', email = '$mail', password = '$pass', description = '$Description'");
    echo "<script>alert('Data Updated Successfully);</script>";
  }

  else
  {
    echo "<script>alert('No Data Changed')</script>";
  }
}


 ?>

</div>

</div>
</div>
</div>
</section>

</div>









<?php 
include('../masterpages/footer.php');
?>
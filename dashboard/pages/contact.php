<?php 
include('../../config.php');
include('../masterpages/header.php');
include('../masterpages/Navbar.php');
include('../masterpages/sidebar.php');
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

 $fetch = mysqli_query($config,"SELECT * FROM contact_admin");
 while($row = mysqli_fetch_assoc($fetch))
{
   
   $Address = $row['address'];
   $mail = $row['email'];
   $contact = $row['phone_number'];
   $free = $row['freelance'];
  
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


<form method="post" enctype="multipart/form-data">
<div class="card-body">
<div class="form-group">
<label for="text">Address</label>
<input type="text" class="form-control" name="address" id=""  value="<?php echo $Address; ?>">
</div>

<div class="form-group">
<label for="text">Email</label>
<input type="text" class="form-control" name="mail" id="mail" value="<?php echo $mail; ?>">
</div>

<div class="form-group">
<label for="Address">Contact</label>
<input type="number" class="form-control" name="contact" id="" value="<?php echo $contact; ?>">
</div>

<div class="form-group">
<label for="Address">Freelance</label>
<input type="text" class="form-control" name="free" id="" value="<?php echo $free; ?>">
</div>




<button type="submit" name="submit" class="btn btn-primary">Update Profile</button>

</div>
</form>

</div>

<?php 
if(isset($_POST['submit'])) 
{
  $Address = $_POST['address'];
  $mail = $_POST['mail'];
  $contact = $_POST['contact'];
  $freelance = $_POST['free'];
  

  $updatecontact = mysqli_query($config,"UPDATE contact_admin SET  address = '$Address', email = '$mail', phone_number = '$contact', freelance = '$freelance'");

 
    if($updatecontact)
    {
      echo "<script>alert('Data Updated Successfully');</script>";
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
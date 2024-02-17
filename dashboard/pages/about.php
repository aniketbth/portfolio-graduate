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
 $fetch = mysqli_query($config,"SELECT * FROM admin_about ");
 while($row = mysqli_fetch_assoc($fetch))
{
   $age = $row['age'];
   $residence = $row['residence'];
   $adress = $row['address'];
   $mail = $row['email'];
   $number = $row['phone'];
   $skype = $row[' skype'];
   $freelance = $row['freelance'];
   $adminimg = $row['admin_img'];
   $instagram = $row['instagram_acc'];
   $facebook = $row['facebook_acc'];
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
<label for="exampleInputNumber">Age</label>
<input type="number" class="form-control" name="age" id="Pnumber"  value="<?php echo $age; ?>">
</div>

<div class="form-group">
<label for="Address">Residence</label>
<input type="text" class="form-control" name="residence" id="mail" value="<?php echo $residence; ?>">
</div>

<div class="form-group">
<label for="Address">Address</label>
<input type="text" class="form-control" name="address" id="fname" value="<?php echo $adress; ?>">
</div>

<div class="form-group">
<label for="Address">e-mail</label>
<input type="text" class="form-control" name="mail" id="Address" value="<?php echo $mail; ?>">
</div>

<div class="form-group">
<label for="Address">phone</label>
<input type="username" class="form-control" name="number" id="username" value="<?php echo $number; ?>" >
</div>

<div class="form-group">
<label for="Address">skype</label>
<input type="username" class="form-control" name="skype" id="username" value="<?php echo $skype; ?>" >
</div>

<div class="form-group">
<label for="Address">Freelance</label>
<input type="username" class="form-control" name="flance" id="username" value="<?php echo $freelance; ?>" >
</div>

<div class="form-group">
<label for="Address">Instagram profile</label>
<input type="username" class="form-control" name="instagram" id="profile" value="<?php echo $instagram; ?>" >
</div>

<div class="form-group">
<label for="Address">Facebook Profile</label>
<input type="username" class="form-control" name="facebook" id="profile" value="<?php echo $facebook; ?>" >
</div>

<div class="form-group">
<label for="image">User Image</label>
<input type="file" accept="jpg,png,jpeg" class="form-control" name="userimg" id="userpimg" value="<?php echo $adminimg; ?>">
</div>


<button type="submit" name="update" class="btn btn-primary">Update Profile</button>

</div>
</form>

</div>

<?php 
if(isset($_POST['update'])) 
{
  $age = $_POST['age'];
  $residence = $_POST['residence'];
  $adress = $_POST['address'];
  $email = $_POST['mail'];
  $freelance = $_POST['flance'];
  $skype = $_POST['skype'];
  $pone = $_POST['uphon'];
  $userimg = $_POST['user_image'];
  $instagram = $_POST['instagram'];
  $facebook = $_POST['facebook'];

  // image configuration starts here
  // $base_url = "http://localhost/vCard/";
  $base_url = "http://localhost/portfolio-graduate/index.php#about_me";
  $targetFolder = '../../uploaded_adminpic/';

  $orgimageName = $_FILES['adminimg']['name'];
  $tempPicName = $_FILES['adminimg']['tmp_name'];

  $completeImageName = $base_url.$targetFolder.$orgimageName;

 
  if(!empty($orgimageName))
  {
    mysqli_query($config,"UPDATE admin_about SET phone='$pone',email='$mail',address='$address',instagram_acc='$instagram',facebook_acc = '$facebook',admin_img = '$completeImageName',skype = '$skype',freelance = '$freelance',age = '$age',residence = '$residence'  WHERE username ='{$_SESSION['loggedInUser']}'");

    move_uploaded_file($tempPicName, $targetFolder.$orgimageName);
    
    echo "<script>alert('Data & Profile Picture Updated Successfully');window.location.href='home.php'</script>";
  }
  elseif(empty($orgimageName)) 
  {
    mysqli_query($config,"UPDATE admin_about SET phone='$pone',email='$mail',address='$address',instagram_acc='$instagram',facebook_acc = '$facebook',skype = '$skype',freelance = '$freelance',age = '$age',residence = '$residence'  WHERE username ='{$_SESSION['loggedInUser']}'");

    echo "<script>alert('Data Updated Successfully63);window.location.href='home.php'</script>";
  
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
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
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
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
   $sky = $row['skype'];
   $title = $row['title'];
   $freelance = $row['freelance'];
   $adminimg = $row['admin_img'];
   $instagram = $row['instagram_acc'];
   $facebook = $row['facebook_acc'];
   $web = $row['web_design'];
   $photo = $row['photography'];
   $crate = $row['creativity'];
   $designing = $row['desiging'];
   $Hclients = $row['happy_clients'];
   $Whours = $row['working_hours'];
   $Awon = $row['awards_won'];
   $Cconsumed = $row['coffee_consumed'];
   $detail = $row['detail'];
   $c1 = $row['client1'];
   $c2 = $row['client2'];
   $c3 = $row['client3'];
   $c4 = $row['client4'];
   $c5 = $row['client5'];
   $c6 = $row['client6'];
}
  ?>


<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">About Section</h3>
</div>


<form method="post" enctype="multipart/form-data">
<div class="card-body">


  <div>
  <h1>----------Edit About Section Here--------</h1>
</div>
<div style="height: 50px;"></div>



<div class="form-group">
<label for="exampleInputNumber">Age</label>
<input type="number" class="form-control" name="age" id="Pnumber"  value="<?php echo $age; ?>">
</div>

<div class="form-group">
<label for="Address">Residence</label>
<input type="text" class="form-control" name="residence" id="" value="<?php echo $residence; ?>">
</div>

<div class="form-group">
<label for="Address">Address</label>
<input type="text" class="form-control" name="address"  value="<?php echo $adress; ?>">
</div>

<div class="form-group">
<label for="Address">e-mail</label>
<input type="text" class="form-control" name="mail" id="" value="<?php echo $mail; ?>">
</div>

<div class="form-group">
<label for="Address">phone</label>
<input type="username" class="form-control" name="number" id="username" value="<?php echo $number; ?>" >
</div>

<div class="form-group">
<label for="text">skype</label>
<input type="text" class="form-control" name="skype" id="" value="<?php echo $sky
; ?>" >
</div>

<div class="form-group">
<label for="text">Detail</label>
<input type="text" class="form-control" name="detail" id="" value="<?php echo $detail
; ?>" >
</div>


<div class="form-group">
<label for="text">Title</label>
<input type="text" class="form-control" name="title" id="" value="<?php echo $title
; ?>" >
</div>

<div class="form-group">
<label for="text">Freelance</label>
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
<input type="file" accept="jpg,png,jpeg" class="form-control" name="images"  value="<?php echo $adminimg; ?>">
</div>

<div><h1>---------Edit Services Section Here--------</div>
  <div style="height: 50px;"></div>


<div class="form-group">
<label for="text">Web-Design</label>
<input type="text" class="form-control" name="web_design" id="" value="<?php echo $web; ?>" >
</div>

<div class="form-group">
<label for="text">Photography</label>
<input type="text" class="form-control" name="photography" id="" value="<?php echo $photo; ?>" >
</div>

<div class="form-group">
<label for="text">Creativity</label>
<input type="text" class="form-control" name="creativity" id="" value="<?php echo $crate; ?>" >
</div>

<div class="form-group">
<label for="text">Designing</label>
<input type="text" class="form-control" name="desiging" id="" value="<?php echo $designing; ?>" >
</div>
<div>
  <h1>----------Edit Fun Facts Sections Here--------</h1>
</div>
<div style="height: 50px;"></div>


<div class="form-group">
<label for="text">Happy Clients</label>
<input type="text" class="form-control" name="Hclients" id="" value="<?php echo $Hclients; ?>" >
</div>

<div class="form-group">
<label for="number">Working Hours</label>
<input type="text" class="form-control" name="wHours" id="" value="<?php echo  $Whours; ?>" >
</div>

<div class="form-group">
<label for="number">Awards Won</label>
<input type="text" class="form-control" name="Awon" id="" value="<?php echo  $Awon; ?>" >
</div>


<div class="form-group">
<label for="text">Coffee Consumed</label>
<input type="number" class="form-control" name="cConsumed" id="" value="<?php echo $Cconsumed; ?>" >
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
  $addres = $_POST['address'];
  $email = $_POST['mail'];
  $freelance = $_POST['flance'];
  $sky = $_POST['skype'];
  $title = $_POST['title'];
  $pone = $_POST['number'];
  $adminimg = $_POST['images'];
  $instagram = $_POST['instagram'];
  $facebook = $_POST['facebook'];
  $detail = $_POST['detail'];
  // =======services========
  $web = $_POST['web_design'];
  $photo = $_POST['photography'];
  $crate = $_POST['creativity'];
  $designing = $_POST['desiging'];
  // =========Fun Facts=======
  $Hclients = $_POST['Hclients'];
  $Whours = $_POST['wHours'];
  $Awon = $_POST['Awon'];
  $Cconsumed = $_POST['cConsumed'];
 
  
   $base_url = 'http://localhost/portfolio-graduate/#about_me';
$targetFolder = 'uploaded_adminpic/adminpic_about/';
$orgFileName = $_FILES['images']['name'];
$tempFileName = $_FILES['images']['tmp_name'];

$completeAddress = $base_url.$targetFolder.$orgFileName;

 
  if(!empty($orgFileName))
  {
    mysqli_query($config,"UPDATE admin_about SET phone='$pone',email='$email',address='$addres',instagram_acc='$instagram',facebook_acc = '$facebook',about_img = '$completeAddress',skype = '$sky',title = '$title',freelance = '$freelance',age = '$age',residence = '$residence',web_design = '$web',photography = '$photo',creativity = '$crate',desiging = '$designing',happy_clients = '$Hclients',working_hours = '$Whours',awards_won = '$Awon',coffee_consumed = '$Cconsumed',detail = '$detail'");

    move_uploaded_file($tempFileName, $targetFolder.$orgimageName);
    
    echo "<script>alert('Data & Profile Picture Updated Successfully');window.location.href='home.php'</script>";
  }
  elseif(empty($orgFileName)) 
  {
    mysqli_query($config,"UPDATE admin_about SET phone='$pone',email='$email',address='$addres',instagram_acc='$instagram',facebook_acc = '$facebook',skype = '$sky',title = '$title', freelance = '$freelance',age = '$age',residence = '$residence',web_design = '$web',photography = '$photo',creativity = '$crate',desiging = '$designing',happy_clients = '$Hclients',working_hours = '$Whours',awards_won = '$Awon',coffee_consumed = '$Cconsumed',detail = '$detail'");

    echo "<script>alert('Data Updated Successfully);window.location.href='home.php'</script>";
  
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
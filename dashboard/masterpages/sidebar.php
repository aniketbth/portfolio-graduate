<?php
include ('../../config.php');
?>

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<?php
     $fetch = mysqli_query($config,"SELECT * FROM admin_info");
  $id = $_GET['id'];
 while($row = mysqli_fetch_assoc($fetch))
{

   $Aname = $row['name'];
   $pic = $row['admin_pic'];
}
?>
    <a href="index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $pic ;?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $Aname;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../index.php" class="nav-link active">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="../pages/home.php" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/about.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Me
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/resume.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Resume
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="../pages/portfolio.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Portfolio
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Chats
              </p>
            </a>
            
          </li>
          

            <li class="nav-item">
            <a href="../pages/contact.php" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                logout
              </p>
            </a>
            
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
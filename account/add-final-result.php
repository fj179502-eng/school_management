 <?php
session_start();
if(!isset($_SESSION['userid'])){
  echo "--".$_SESSION['userid'];
  header('location:../logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SufiTech |Final Result </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
     
    <?php
     include('dbconection.php');
     $cid=$_GET['cid'];
   
      $s=mysqli_query($conn,"SELECT * FROM student WHERE std_id='".$_GET['std']."' and is_active=1");
        $rows=mysqli_fetch_array($s);
    
    ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->-
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Contact</a> -->
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Profile
                  
                </h3>
                
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="../index.php" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Logout
                  
                </h3>
                
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">School Name</span>
    </a>

    <!-- Sidebar -->
     <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php
       $z=mysqli_query($conn,"SELECT * FROM employee WHERE emp_id='".$_SESSION['userid']."' and is_active=1");
       $rowz=mysqli_fetch_array($z)
         ?>
        <div class="info">
          <a href="#" class="d-block"><?php echo $rowz['emp_name']?></a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Result
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-mid-result.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Mid Result</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-mid-result.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Mid Result</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="add-final-result.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Final Result</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="view-final-result.php" class="nav-link"><i class="nav-icon far fa-circle"></i>
                  <p>View Final Result</p></a>
              </li>
               
             <li class="nav-item">
            <a href="percentage.php" class="nav-link">
              <i class="nav-icon far fa-circle"></i>
              <p>
              Over All Report
              </p>
            </a>
          </li>

            </ul>
          </li>
            
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1><?php echo $rows['std_name']?> Final Result</h1>
          </div><!--col div-->
        </div><!--col div-->
      </div><!--container fluid-->
    </section><!--content header-->
     
     <div class="card">
       <div class="card card-header">
         <h3 class="card-title">
         <i class="fas fa-book"></i>
         Add Final Result
         </h3>
       </div><!--card header-->
       
       <section class="content">
         <div class="container-fluid" align="center">
           
           <div class="col-md-6">
            <div class="card card-warning">
             <div class="card-header">
               <h2 class="card-title">Result</h2>
             </div><!--card header-->
               
               <div class="card-body">
                 <form method="post">
                   <div class="row">       
                  <div class="col-md-12">
                    <div class="form-group">
                      <label style="float: left">Obtain Marks</label>
                      <input type="text" required name="obtainmarks" class="form-control" placeholder="Enter...">
                    </div><!--form group-->
                  </div><!--col div-->  
                   
                   <div class="col-md-12">
                     <div class="form-group">
                      <label style="float: left">Total Marks</label>
                       <input type="text" required name="totalmarks" class="form-control" placeholder="Enter...">
                     </div><!--form group-->
                   </div><!--col div-->
                         
                    <div class="col-md-12" >
                      <div class="form-group">
                        <label style="float: left">Exam Year</label>
                        <input type="month" required name="year1" class="form-control">
                      </div><!--form group-->
                    </div><!--col div-->
                      </div><!--row div-->
                   <div align="center"><input type="submit" style="width: 150px" name="btn" value="Sumbit" class="btn btn-primary"></div>

                     </form>
                     
                     <?php
                     $cid=$_GET['cid'];
                     if(isset($_POST['btn'])){
                     $q=mysqli_query($conn,"SELECT * FROM bridge WHERE b_id='".$cid."' and is_active=1");
                     $s=0;
                     while($row=mysqli_fetch_array($q)){
                      $s++;
                      if($row>0){
                        $q1=mysqli_query($conn,"SELECT * FROM class WHERE class_id='".$row['class_id']."' and is_active=1");
                        $row1=mysqli_fetch_array($q1);
                        if($row1>0){
                          $q2=mysqli_query($conn,"SELECT * FROM student WHERE class='".$row['class_id']."' and is_active=1");
                          $row2=mysqli_fetch_array($q2);
                          if($row2>0){
                            $q3=mysqli_query($conn,"SELECT * FROM employee WHERE emp_id='".$row['teacher_id']."' and is_active=1");
                            $row3=mysqli_fetch_array($q3);
                            if($row3>0){
                              $q4=mysqli_query($conn,"SELECT * FROM subject WHERE sub_id='".$row['subject_id']."' and is_active=1");
                              $row4=mysqli_fetch_array($q4);
                              if($row4>0){

                            $a=mysqli_query($conn,"INSERT INTO `final_result`(`student_id`, `class_id`, `teacher_id`, `subject_id`, `obtain_marks`, `total_marks`, `exam_year`) VALUES ('".$_GET['std']."','".$row['class_id']."','".$row['teacher_id']."','".$row['subject_id']."','".$_POST['obtainmarks']."','".$_POST['totalmarks']."','".$_POST['year1']."')");
                            if($a>0){
                              echo "<h3>Your Message is Successfully Submit</h3>";
                              }
                              else{
                                echo "<h3>Your Message is not Submit</h3>";
                              }
                            }
                            }
                          }
                        }
                      }
                     }
                     }
                     ?>

                  

               </div><!--card body-->

             </div><!--card warning-->
           </div><!--col div-->
         </div><!-- container fluid-->
           
        
       </section><!--section content-->

     </div><!--card-->

  </div><!--content wrapper-->

  <footer class="main-footer">
    <strong>Copyright &copy; 20124 <a href="#">SufiTech</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

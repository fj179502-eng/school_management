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
  <title>SufiTech |Update Employee </title>

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
     $eid=$_GET['empid'];
     $q=mysqli_query($conn,"SELECT * FROM employee WHERE emp_id='".$eid."' and is_active=1");
     $row=mysqli_fetch_array($q);
    ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
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
          <a href="../logout.php" class="dropdown-item">
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
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SufiTech</a>
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
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Role Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-role.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Role</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-role.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-role.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Role</p>
                </a>
              </li>
              
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                District Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-district.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add District</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-district.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View District</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-district.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive District</p>
                </a>
              </li>
              </ul>
          </li>
              
                 <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Designation Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-designation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Designation</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-designation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Designation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-designation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Designation</p>
                </a>
              </li>
              
            </ul>
          </li>

            
           
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Employee Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-employee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Employee</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-employee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-employee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Employee</p>
                </a>
              </li>
            </ul>
          </li>
           
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                School Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-school.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add School</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-school.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View School</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-school.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive School</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Student Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add student</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Student</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Class Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-class.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Class</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-class.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-class.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Class</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Subject Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-subject.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Subject</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-subject.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-subject.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Subject</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Timetable Operation
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-timetable.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Timetable</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="view-timetable.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Timetable</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deactive-timetable.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deactive Timetable</p>
                </a>
              </li>
            </ul>
          </li>
            
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Over All Reports
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="class-report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Report</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="teacher-report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teacher Report</p>
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
            <h1>Employee Form</h1>
          </div><!--col div-->
        </div><!--col div-->
      </div><!--container fluid-->
    </section><!--content header-->
     
     <div class="card">
       <div class="card card-header">
         <h3 class="card-title">
         <i class="fas fa-book"></i>
         Update Employee
         </h3>
       </div><!--card header-->
       
       <section class="content">
         <div class="container-fluid" align="center">
           
           <div class="col-md-10">
            <div class="card card-warning">
             <div class="card-header">
               <h2 class="card-title">Employee</h2>
             </div><!--card header-->
               
               <div class="card-body">
                 <form method="post">
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label style="float: left">Employee Name</label>
                         <input type="text" required="" name="ename" class="form-control" value="<?=$row['emp_name']?>">
                       </div><!--form group-->
                     </div><!--col div-->
                     <div class="col-md-6">
                      <div class="form-group">
                      <label style="float: left">Employee Fathername</label><input type="text" required name="fname" class="form-control" value="<?=$row['emp_fname']?>">
                    </div>
                    </div><!--col div-->
                   </div><!--row div-->

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label style="float: left">Employee Cast</label>
                         <input type="text" required="" name="ecast" class="form-control" value="<?=$row['emp_cast']?>">
                       </div><!--form group-->
                     </div><!--col div-->
                     <div class="col-md-6">
                      <div class="form-group">
                        <?php
                       $q1=mysqli_query($conn,"SELECT * FROM employee WHERE emp_id='".$eid."' and is_active=1");
                       $row1=mysqli_fetch_array($q1);

                        ?>
                      <label style="float: left">Employee Gender</label>
                      <select id="egender" name="egender" class="form-control">
                        <option selected value="<?php echo $row1['emp_gender']?>"><?php echo $row1['emp_gender']?></option>
                        <option >Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Femle</option>
                      </select>
                    </div>
                     </div><!--col div-->
                   </div><!--row div-->

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label style="float: left">Employee CNIC</label>
                         <input type="text" required="" name="ecnic" class="form-control" value="<?=$row['emp_cnic']?>">
                       </div><!--form group-->
                     </div><!--col div-->
                     <div class="col-md-6">
                      <?php
                      $did=$row['emp_district_id'];
                      $q2=mysqli_query($conn,"SELECT * FROM district WHERE district_id='".$did."' and is_active=1");
                      $row2=mysqli_fetch_array($q2);
                      $q3=mysqli_query($conn,"SELECT * FROM district WHERE is_active=1");
                      ?>

                     <div class="form-group">
                      <label style="float: left">Employee District</label>
                       
                       <select id="district1" name="district1" class="form-control">
                         <option value="<?php echo $row2['district_id']?>"><?php echo $row2['district_name']?></option>
                         <option>Select</option>
                         <?php
                         while($row3=mysqli_fetch_array($q3)){ ?> 
                        <option value="<?php echo $row3['district_id']?>"><?php echo $row3['district_name']?></option>
                         <?php }
                         ?>
                       </select>

                     </div><!--form group-->
                     </div><!--col div-->
                   </div><!--row div-->

                    <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label style="float: left">Employee Phone</label>
                         <input type="text" required="" name="ephone" class="form-control" value="<?=$row['emp_phone']?>">
                       </div><!--form group-->
                     </div><!--col div-->
                     <div class="col-md-6">
                      <?php
                      $deid=$row['emp_designation_id'];
                      $q3=mysqli_query($conn,"SELECT * FROM designation WHERE designation_id='".$deid."' and is_active=1");
                        $row3=mysqli_fetch_array($q3);
                     $q4=mysqli_query($conn,"SELECT * FROM designation WHERE is_active=1");
                      ?>
                     <div class="form-group">
                      <label style="float: left">Employee Designation</label>
                       <select id="designation1" name="designation1" class="form-control">
                        <option selected value="<?php echo $row3['designation_id']?>"><?php echo $row3['designation_name']?></option>
                         <option>Select</option>
                         <?php 
                         while($row4=mysqli_fetch_array($q4)){ ?> 
                    <option value="<?php echo $row4['designation_id']?>"><?php echo $row4['designation_name']?></option>
                         <?php }
                         ?>
                       </select>

                     </div><!--form group-->
                     </div><!--col div-->
                   </div><!--row div-->

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label style="float: left">Date Of Birth</label>
                         <input type="date" required="" name="birth" class="form-control" value="<?=$row['emp_dob']?>">
                       </div><!--form group-->
                     </div><!--col div-->
                     <div class="col-md-6">
                      <div class="form-group">
                      <label style="float: left">Date Of Job</label><input type="date" required name="job" class="form-control" value="<?=$row['emp_doj']?>">
                    </div>
                    </div><!--col div-->
                   </div><!--row div-->

                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label style="float: left">Employee Qualification</label>
                         <input type="text" required="" name="equalification" class="form-control" value="<?=$row['emp_qualification']?>">
                       </div><!--form group-->
                     </div><!--col div-->
                     <div class="col-md-6">
                      <div class="form-group">
                        <?php 
                       $q5=mysqli_query($conn,"SELECT * FROM employee WHERE emp_id='".$eid."' and is_active=1");
                       $row5=mysqli_fetch_array($q5);
                        ?>
                      <label style="float: left">Is Class Teacher</label>
                      <select id="classteacher" name="classteacher" class="form-control">
                        <option value="<?php echo $row5['is_class_teacher']?>"><?php echo $row5['is_class_teacher']?></option>
                        <option>Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    </div><!--col div-->
                   </div><!--row div-->

                   <div class="form-group">
                        <label style="float: left">Employee Address</label>
                        <input type="text" required name="eaddress" class="form-control"  value="<?=$row['emp_address']?>">
                      </div><!-- group div-->
                 
                 <div align="center"><input type="submit" style="width: 150px" name="btn" value="Update" class="btn btn-success"></div>
                 </form>
                 
                 <?php
                if(isset($_POST['btn'])){
                  $a=mysqli_query($conn,"UPDATE `employee` SET `emp_name`='".$_POST['ename']."',`emp_fname`='".$_POST['fname']."',`emp_cast`='".$_POST['ecast']."',`emp_gender`='".$_POST['egender']."',`emp_cnic`='".$_POST['ecnic']."',`emp_district_id`='".$_POST['district1']."',`emp_phone`='".$_POST['ephone']."',`emp_designation_id`='".$_POST['designation1']."',`emp_dob`='".$_POST['birth']."',`emp_doj`='".$_POST['job']."',`emp_qualification`='".$_POST['equalification']."',`is_class_teacher`='".$_POST['classteacher']."',`emp_address`='".$_POST['eaddress']."' WHERE emp_id='".$eid."' and is_active=1");
                  if($a>0){
                  ?>
                  <script type="text/javascript">
                    window.location="view-employee.php";
                  </script>
                  <?php

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

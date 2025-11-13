<?php
session_start();
if(!isset($_SESSION['stdid'])){
  echo "--".$_SESSION['stdid'];
  header('location:../student-logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SufiTech |Student Marksheet </title>

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

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">
 <?php
  include('dbconection.php');
   $a=mysqli_query($conn,"SELECT * FROM student WHERE std_id='".$_SESSION['stdid']."' and is_active=1");
   $rows=mysqli_fetch_array($a);
   $total=0;
   $obtain=0;
  ?>
</head>
<body onload="window.print()" class="hold-transition sidebar-mini layout-fixed">
<br/>
       <section class="content">
         <div class="container-fluid" align="center">
          
          <div class="col-md-8">
          
            
               <div class="card" style="border-radius: 20px;box-shadow: rgba(0, 0, 1.5)0px 0px 10px;">
               <div class="card-body" style="padding: 30px">
                <h5 align="center"><b>Student Marksheet 2024-2025</b></h5>
                  <p align="center"><img src="logo-image.jpeg" style="width: 50px"></p>
               <h3 align="center"><b>Goverment Boys High School Hassan Jamali</b></h3>
              
              <br/>   
          
              <?php
             $b=mysqli_query($conn,"SELECT * FROM mid_result WHERE student_id='".$_SESSION['stdid']."' and is_active=1");
             $rowb=mysqli_fetch_array($b);
             if($rowb>0){
                $c=mysqli_query($conn,"SELECT * FROM student WHERE std_id='".$rowb['student_id']."' and is_active=1");
                $rowc=mysqli_fetch_array($c);
                if($rowc>0){
                  
                  }
                }
              ?>
              
           <!--use a css classs and remove table border --> 
              <style>
  .no-border td {
    border: none !important; /* Ensure no borders */
  }
</style>
              
              <table class="table">
              
                <tr  class="no-border">
                  <td><label style="float: left" >Student Name:</label></td>
                  <td><?php echo $rowc['std_name']?></td>
                </tr>
                 
                 <tr class="no-border">
                  <td><label style="float: left" >Father Name:</label></td>
                  <td><?php echo $rowc['std_fname']?></td>
                </tr>
                
                <tr class="no-border">
                  <td><label style="float: left" >Student Phone:</label></td>
                   <td><?php echo $rowc['std_phone'] ?></td>
                </tr>

                <tr class="no-border">
                  <td><label style="float: left" >Student CNIC:</label></td>
                  <td><?php echo $rowc['std_cnic']?></td>
                </tr>
              </table>
              <br/>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                   <th>S.NO</th>
                   <th>Subject</th>
                   <th>Obtain Marks</th>
                   <th>Total Marks</th>
                  </tr>
                </thead>
                <tbody>
                   
           <?php
           $q=mysqli_query($conn,"SELECT * FROM mid_result WHERE student_id='".$_SESSION['stdid']."' and is_active=1");
          $s=0;
          while($row=mysqli_fetch_array($q)){ 
            $s++;
            if($row>0){
             $q1=mysqli_query($conn,"SELECT * FROM student WHERE std_id='".$row['student_id']."' and is_active=1");
             $row1=mysqli_fetch_array($q1);
             if($row1>0){
             $q2=mysqli_query($conn,"SELECT * FROM class WHERE class_id='".$row['class_id']."' and is_active=1");
               $row2=mysqli_fetch_array($q2);
               if($row2>0){
               $q3=mysqli_query($conn,"SELECT * FROM employee WHERE emp_id='".$row['teacher_id']."' and is_active=1");
                 $row3=mysqli_fetch_array($q3);
                 if($row3>0){
                $q4=mysqli_query($conn,"SELECT * FROM subject WHERE sub_id='".$row['subject_id']."' and is_active=1");
               $row4=mysqli_fetch_array($q4);
              if($row4>0){
            $q5=mysqli_query($conn,"SELECT * FROM final_result WHERE student_id='".$row['student_id']."' and subject_id='".$row['subject_id']."' and is_active=1");
            $row5=mysqli_fetch_array($q5);
           if($row5>0){    
            $obtainmarks=$row['obtain_marks']+$row5['obtain_marks'];
            $totalmarks = $row['total_marks'] + $row5['total_marks'];
           $obtain+=$obtainmarks;
           $total+=$totalmarks;
             
        
             ?>

             <tr>
               <td><?php echo $s;?></td>
               <td><?php echo $row4['subject_name']?></td>
               <td><?php echo $obtainmarks ; ?></td>
               <td><?php echo $totalmarks ; ?></td>
                
             </tr> 
                 

        <?php }
                       }
                      }
                 }
                }
             }
              
            }
            ?>
          
          <tr>
            <td></td>

            <td ><b style="float: right">Total</b></td>
            <td><b><?php echo $obtain; ?></b></td>
            <td><b><?php echo $total?></b></td>
          </tr>

       </tbody>
        </table>
        <br/>

        <p style="float: left"><b>Percentage</b>
          <?php  $p=$obtain*100/$total;
          echo "<b/>" .$p."</b>";
           ?><b>%</b></p><p><br/></p>
           <table class="table">
              <tr class="no-border">
                <p style="float: left"><img src="signature.png" style="width: 120px; margin-bottom: -15px;"></p>
                <td>
                
                  <h3 style="float: left; margin-top: -15%;">____________</h3><br/>
                <p style="float: left;margin-top: -14%;"><b>Signature Class Teacher</b></p>
                </td>
                <h3 style="float: right"><img src="signature.png" style="width: 120px; margin-bottom: -15px;"></h3>
                <td>
                  <h3 style="float: right;margin-top: -15%;">___________</h3><br/>
                <p style="float: right;margin-top: -14%;"><b>Signature Head Master</b></p>
                 </td>       
               </tr>
           </table>     
                
    </div><!--card body-->

   </div><!--card-->
  </div><!--col div-->

   </div><!-- container fluid-->
           
        
  </section><!--section content-->


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



<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{
   
  ?>
<!DOCTYPE html>

<html lang="en">

  <head>

       
    <title>TUP Student Information System|||Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles --> 
 
  </head>
  <body>
    
  <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Courses </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Courses</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <table border="1" class="table table-bordered mg-b-0">
                    <?php
$stuclass=$_SESSION['stuclass'];
$sql="SELECT tblclass.ID,tblclass.ClassName,tblclass.Section,tblclass.Course,tblclass.ClassId,tblclass.ID as nid from tblclass join tblclass on tblclass.ID=tblclass.ClassId where tblclass.ClassId=:stuclass";
$query = $dbh -> prepare($sql);
$query->bindParam(':stuclass',$stuclass,PDO::PARAM_STR);
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
 <tr align="center" class="table-warning">
<td colspan="4" style="font-size:50px;color:Red">
 This is Your Courses</td></tr>
<tr class="table-info">
    <th>Class</th>
    <td><?php  echo $row->Course;?></td>
  </tr>
    <tr class="table-info">
    <th>Class</th>
    <td><?php  echo $row->Course;?></td>
  </tr>
  <tr class="table-info">
     <th>Class</th>
    <td><?php  echo $row->Course;?></td>
     
  </tr>
  <tr class="table-info">
     <th>Class</th>
    <td><?php  echo $row->Course;?></td>
     
  </tr>
  <tr class="table-info">
     <th>Class</th>
    <td><?php  echo $row->Course;?></td>
     
  </tr>
  <?php $cnt=$cnt+1;}} else { ?>
    <tr>
  <th colspan="2" style="color:red;">No Courses Yet</th>
</tr>
  <?php } ?>
</table>
       

                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
   
  </body>
      
</html><?php }  ?>
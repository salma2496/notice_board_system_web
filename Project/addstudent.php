<div style="width: 100%; margin:auto;">
        <h4 style="color:black; margin-top: 3%"class="text-center"> REGISTER STUDENT ON NOTES BOARD</h4>
      </div>
      </div>
    
      <div>
    </div>
    <div class="col-sm-10" id="content">
    <div class="col-sm-12" ><p>© Notes Board 2020</p></div>
    <div class="col-sm-12"></div>
         <?php include "menu.php"; ?>
     </div>
                          <input type="password" class="form-control form-control-sm" name="Password" placeholder="Password" required="required">
                          <input type="text" class="form-control form-control-sm" name="Role" placeholder="Student" readonly>
                          <input type="text" class="form-control form-control-sm" name="UserName" placeholder="UserName" required="required">
              <div class="row">
              <form action=" " method="Post" style="margin-top: 3%;  padding: 10px; width:100%; min-height:350px">
                            <input type="text" class="form-control form-control-sm" name="Academic" placeholder="Academic" required="required">
                            <input type="text" class="form-control form-control-sm" name="regID" placeholder="Regisration ID" required="required">
                            <input type="text" class="form-control form-control-sm" name="studentName" placeholder="Student Name" required="required">
                            <label>Registration ID</label>
                            <label>Student Name</label>
                            <label>Academic Year</label>
                            <option value="">Select Department</option>
                            <option value="">Select Gender</option>
                            <option>Art</option>
                            <option>Computing</option>
                            <option>Female</option>
                            <option>Library</option>
                            <option>Male</option>
                            <option>Science</option>
                           <select name="Gender" class="form-control form-control-sm" required="required">
                           <select name="dept" class="form-control form-control-sm"  required="required">
                          </div>
                          </div>
                          </select>
                          </select>
                          <div class="form-group">
                          <div class="form-group">
                          <div class="form-group">
                          <input type="submit" name="save" class="btn btn-primary btn-sm" value="save" style="margin-top:10%; width:100%;">
                          <input type="text" class="form-control form-control-sm" name="Course" placeholder="Course" required="required">
                          <label for="Password">Password</label>
                          <label for="UserName">UserName</label>
                          <label>Course</label>
                          <label>Department</label>
                          <label>Gender</label>
                          <label>Role</label>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                        <div class="form-group">
                        <div class="form-group">
                        <div class="form-group">
                        <div class="form-group">
                       <div class="form-group">
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="col-md-4">
                    <div class="col-md-4">
                </div>
            </div>
            </form>
    <div class="row" id="body">
   </div>
   </div>
   </div>
   <div class="row" id="footer">
  $academic=$_POST['Academic'];
  $course=$_POST['Course'];
  $dept=$_POST['dept'];
  $gender=$_POST['Gender'];
  $password=$_POST['Password'];
  $regNo=$_POST['regID'];
  $res=$sql->execute();
  $role=$_POST['Role'];
  $sql=$con->prepare("insert into student values('$regNo','$studentName','$academic','$course','$gender','$dept','$username')");
  $studentName=$_POST['studentName'];
  $username=$_POST['UserName'];
  header("location:viewstudent.php");
  include 'connection.php';
 <5`  <div class="row" id="heading">
</body>
</div>
</div>
</head>
</head>
</html>
<?php 
<body>
<div class="container-fluid">
<head>
<html>
<html>
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
?>
if(isset($_POST['save']))
{
}
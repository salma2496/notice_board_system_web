<?php 
include 'connection.php';
if(isset($_POST['save']))
{

  $username=$_POST['UserName'];
  $gender=$_POST['Gender'];
  $position=$_POST['Position'];
  $dept=$_POST['dept'];
  $teacherName=$_POST['teacherName'];
  $teacherID=$_POST['teacherID'];

  $sql=$con->prepare("update teacher set 
    teacherid=:teacher,teachername=:tname,department=:d,position=:p,gender=:g,username=:u where teacherid=:id");
  $res=$sql->execute(array(':teacher'=>$teacherID,':tname'=>$teacherName,':p'=>$position,':d'=>$dept,':g'=>$gender,':u'=>$username,':id'=>$_POST['id']));
  header("location:viewteacher.php");

}
?>
<?php 
include 'connection.php';
session_start()
if(isset($_POST['save']))
{

  $username=$_POST['UserName'];
  $dept=$_POST['dept'];
  $gender=$_POST['Gender'];
  $teacherName=$_POST['teacherName'];
  $position=$_POST['position']
  $teacherNo=$_POST['teacherID'];

  $sql=$con->prepare("update teacher set 
    teacherid=:reg,teachertname=:ttname,department=:dept,position=:p,gender=:g,username=:u where teacherid=:id");
  $res=$sql->execute(array(':reg'=>$regNo,':ttname'=>$teacherName,':p'=>$position,':g'=>$gender,':dept'=>$department,':u'=>$username,':id'=>$_POST['id']));
  header("location:viewteacher.php");

}
?>
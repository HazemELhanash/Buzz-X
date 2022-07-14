<?php


#function to test inputs

function test($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

#commands to connect database

$conn=mysqli_connect("localhost","root","");
$my_db=mysqli_select_db($conn,"bido");

if(!$my_db)
{echo "connection faild";}

#for sign up new user into database

if(isset($_REQUEST['insert'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['cities'];
    
   $insert_user="INSERT INTO user (name, email ,password,phone , city) VALUES('$name','$email','$pass','$phone','$city')";
   mysqli_query($conn,$insert_user); 
   header("location:tour.php?info=inserted");

}


#to validate admin or users acounts

if(isset($_REQUEST['login'])){

    $email=test($_POST['email']);
    $pass=test($_POST['pass']);

    if($email=="marawanelsawy00@gmail.com"){
        $select_admin="SELECT * FROM admin WHERE email='$email'  AND password='$pass' ";
        $sql=mysqli_query($conn,$select_admin); 
        $num=mysqli_num_rows($sql);
        if($num==1){
            session_start();
            $_SESSION['sid']=session_id();
            header("location: home.php");
        }else{
            header("location: loginsign.php");      
        }  } elseif ( $email=="hazemelhanash@gmail.com" ){
        $select_admin="SELECT * FROM admin WHERE email='$email'  AND password='$pass' ";
        $sql=mysqli_query($conn,$select_admin); 
        $num=mysqli_num_rows($sql);
        if($num==1){
            session_start();
            $_SESSION['sid']=session_id();
            header("location: home.php");
        }else{
            header("location: loginsign.php"); }  

    }
    elseif ($email=="buzzx2020@gmail.com"){
        $select_admin="SELECT * FROM admin WHERE email='$email'  AND password='$pass' ";
        $sql=mysqli_query($conn,$select_admin); 
        $num=mysqli_num_rows($sql);
        if($num==1){
            session_start();
            $_SESSION['sid']=session_id();
            header("location: home.php");
        }else{
            header("location: loginsign.php"); }  

    }
    elseif ($email=="bedoa949a@gmail.com"){
        $select_admin="SELECT * FROM admin WHERE email='$email'  AND password='$pass' ";
        $sql=mysqli_query($conn,$select_admin); 
        $num=mysqli_num_rows($sql);
        if($num==1){
            session_start();
            $_SESSION['sid']=session_id();
            header("location: home.php");
        }else{
            header("location: loginsign.php"); }  

    }
    else{
        header("location: index.php");
    }
        
       $select_admin="SELECT * FROM admin WHERE email='$email'  AND password='$pass' ";
       $sql=mysqli_query($conn,$select_admin); 
       $num=mysqli_num_rows($sql);
       if($num==1){
           session_start();
           $_SESSION['sid']=session_id();
           header("location: home.php");
       }else{
           header("location: loginsign.php");
           
       }  
       
    
    }

  #insert into contact table
    if(isset($_REQUEST['contact'])){
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $msg=$_POST['Message'];
            
           $insert_contact="INSERT INTO contact (name, email ,message) VALUES('$name','$email','$msg')";
           mysqli_query($conn,$insert_contact); 
           header("location:index.php?info=sent");
        
        }

  #insert into book table (tickets)
        if(isset($_REQUEST['ticket'])){
            session_start();
            if($_SESSION['sinovice']==session_id()){
            $name=test($_POST['name']);
            $phone1=test($_POST['phone1']);
            $phone2=test($_POST['phone2']);
            $adr=test($_POST['adr']);
            $email= test($_POST['email']);
            $reg=test($_POST['regular']);
            if($reg=="") {$reg=0;}
            $gold=test($_POST['gold']);
            if($gold=="") {$gold=0;}
            $vip=test($_POST['vip']);
            if($vip=="") {$vip=0;}
            $total=($reg*210) + ($gold*360) + ($vip*500);
            $select_id="SELECT id FROM book WHERE email='$email' AND name='$name'";
            $id=mysqli_query($conn,$select_id); 
            $_SESSION['name']=$name;
            $_SESSION['adr']=$adr;
            $_SESSION['email']=$email;
            $_SESSION['reg']=$reg;
            $_SESSION['gold']=$gold;
            $_SESSION['vip']=$vip;
            $_SESSION['phone1']=$phone1;
            $_SESSION['phone2']=$phone2;
            $_SESSION['id']=$id;
            $_SESSION['total']=$total;

               $insert_ticket="INSERT INTO book (name, email ,adr,phone1,phone2,regular,gold,vip,total_price) 
               VALUES('$name','$email','$adr','$phone1','$phone2','$reg','$gold','$vip','$total')";
               mysqli_query($conn,$insert_ticket); 
               header("location:inovice.php");
            }
            
            }


#for displaying data to admin

$select_book="SELECT * FROM book";
$booked=mysqli_query($conn,$select_book);

$select_contact="SELECT * FROM contact";
$contact=mysqli_query($conn,$select_contact);

$select_user="SELECT * FROM user";
$users=mysqli_query($conn,$select_user);


?>
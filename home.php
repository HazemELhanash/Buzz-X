<?php
   include "back.php";

   session_start();
   if($_SESSION['sid']==session_id())
   {

   }else{
       header("location:index.php");
   }

   ?>


<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
        <title> Home </title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="styles.css" />
        <script src="index.js"></script>
        
    </head>


  <body>

  <header>
   <div id="brand">B U Z Z <span style="font-size: 30px; color:red; padding:10px;">X</span> </div>
   <nav>
     <ul>
     <li id="signup"><a href="#booked" class="btn btn-outline-success" style="color:white;">Booked</a></li>
     <li id="login"><a href="#contact"  class="btn btn-outline-warning"style="color:white;" >contact</a></li>
     <li id="signup"><a href="#users" class="btn btn-outline-primary" style="color:white;">All users</a></li>
     <li id="signup"><a href="check.php"class="btn btn-danger" style="color:white;">Logout</a></li>
     </ul>
   </nav>

  </header>

         <hr style="background-color:white;">

             <header style="width: 100%;">
               <h2 class="text-7 mb-0" style="margin-left: 40%;  color:white;"> Booked Table </h2>
             </header>

        <hr style="background-color:white;">

        <table border="1" class="table" id="booked">
                    <thead class="thead-dark">
                        <tr>
                            <th  scope="col"> <h3>#</h3></th>
                            <th  scope="col"> <h3>Name</h3></th>
                            <th  scope="col"><h3>Adress</h3></th>
                            <th  scope="col"><h3>phone 1</h3></th>
                            <th  scope="col"><h3>phone 2</h3></th>
                            <th  scope="col"><h3>Email </h3></th>
                            <th  scope="col"><h3>Regular</h3></th>
                            <th  scope="col"><h3>Golden</h3></th>
                            <th  scope="col"><h3>Vip</h3></th>
                            <th  scope="col"><h3>Total</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($booked as $q) {?>
                        <tr style="background-color:white;">
                            <td class="no" scope="row"> <?php echo $q['id']  ?></td>
                            <td class="text-left" scope="row"> <?php echo $q['name']  ?> </td>
                            <td class="unit" scope="row"> <?php echo $q['adr']  ?> </td>
                            <td class="unit" scope="row"> <?php echo $q['phone1']  ?> </td>
                            <td class="unit" scope="row">  <?php echo $q['phone2']  ?> </td>
                            <td class="unit" scope="row">  <?php echo $q['email']  ?> </td>
                            <td class="unit" scope="row"> <?php echo $q['regular']  ?> </td>
                            <td class="unit" scope="row"> <?php echo $q['gold']  ?></td>
                            <td class="unit" scope="row">  <?php echo $q['vip']  ?> </td>
                            <td class="total" scope="row">  <?php echo $q['total_price']  ?> </td>

                        </tr> 
                        <?php  }?>
                    </tbody>
                </table>

                <hr style="background-color:white;">

                <header style="width: 100%;">
                  <h2 class="text-7 mb-0" style="margin-left: 40%;  color:white;"> Contact Table </h2>
                </header>

                <hr style="background-color:white;">

                <table border="1" class="table" id="contact">
                    <thead class="thead-light">
                        <tr>
                            <th  scope="col"> <h3>#</h3></th>
                            <th  scope="col"> <h3>Name</h3></th>
                            <th  scope="col"><h3>Email </h3></th>
                            <th  scope="col"><h3>Message</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($contact as $q) {?>
                        <tr style="background-color:white; font-size:20px;">
                            <td class="no" scope="row"> <?php echo $q['id']  ?></td>
                            <td class="text-left" scope="row"> <?php echo $q['name']  ?> </td>
                            <td class="unit" scope="row">  <?php echo $q['email']  ?> </td>
                            <td class="unit" scope="row"> <?php echo $q['message']  ?> </td>
                        </tr> 
                        <?php  }?>
                    </tbody>
                </table>


                <hr style="background-color:white;">

                <header style="width: 100%;">
                  <h2 class="text-7 mb-0" style="margin-left: 40%;  color:white;"> Users Data </h2>
                </header>

                <hr style="background-color:white;">

                <table border="1" class="table" id="users">
                    <thead class="thead-dark">
                        <tr>
                            <th  scope="col"> <h3>#</h3></th>
                            <th  scope="col"> <h3>Name</h3></th>
                            <th  scope="col"><h3>Email </h3></th>
                            <th  scope="col"><h3>phone</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $q) {?>
                        <tr style="background-color:white; font-size:20px;">
                            <td class="no" scope="row"> <?php echo $q['u_id']  ?></td>
                            <td class="text-left" scope="row"> <?php echo $q['name']  ?> </td>
                            <td class="unit" scope="row">  <?php echo $q['email']  ?> </td>
                            <td class="unit" scope="row"> <?php echo $q['phone']  ?> </td>
                        </tr> 
                        <?php  }?>
                    </tbody>
                </table>

                <a href="javascript:window.print()"  class="btn btn-outline-secondary" style="color:black; background-color:yellow;" >
     <i class="fa fa-print"></i> Save</a> 




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>



</body>
</html>
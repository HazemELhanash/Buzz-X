<?php 

session_start();
?>

<?php if($_SESSION['sinovice']==session_id())  {?>
  <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Inovice </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    </head>
    <body style=" background-color: rgba(0,0,0,0.7);">
       <!-- Container -->

<div class="container-fluid invoice-container">

    <!-- Header -->
    <br>
    
    <header style="width: 100%;">
        <h2 class="text-7 mb-0" style="margin-left: 44%; color:white; ">Invoice</h2>
    </header>
    <hr style="background-color:white;">
    <hr style="background-color:white;">
    
    <!-- Main Content -->
    <main>
    <hr>
    <div class="row">
      <div class="col-sm-6 text-sm-end order-sm-1"> <strong style="color:yellow;">Pay To:</strong>
        <pre  style="color:white;">
             Buzz-X<br />
             buzzx2020@gmail.com<br/>
             01234506088<br/>
        </pre>
      </div>

      <div class="col-sm-6 order-sm-0"> <strong  style="color:yellow;">Invoiced To:</strong>
        <pre style="color:white;">
              <?php echo $_SESSION['name'] ?><br />
              <?php echo $_SESSION['adr'] ?><br />
              <?php echo $_SESSION['phone1'] ?><br />
              <?php echo $_SESSION['phone2'] ?><br />
              Egypt
       </pre>
      </div>
    </div>
      
    <div class="card">
      <div class="card-body p-0">
        <div class="table-responsive">

          <table class="table mb-0" border=1 >
          <thead class="card-header">
            <tr style="color:black;">
              <th class="col-1 text-center"> <pre><strong>Regular <span style="font-family: cursive;">210 LE</span>  </strong></pre></th>
              <th class="col-1 text-center" ><pre><strong>Gold <span style="font-family: cursive;">360 LE</span>  </strong></pre></th>
              <th class="col-1 text-center"><pre><strong>vip <span style="font-family: cursive;">500 LE</span>  </strong></pre></th>
              <td class="col-1 text-center"><pre><strong style="font: weight 900px;" >T O T A L </strong></pre></td>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td class="col-1"><?php echo $_SESSION['reg'] ?></td>
                <td class="col-1 text-1"><?php echo $_SESSION['gold'] ?></td>
                <td class="col-1 text-center"><?php echo $_SESSION['vip'] ?></td>
                <td class="col-1 text-center" style="background-color: mediumblue; color: mintcream;"><?php echo $_SESSION['total'] ?></td>
                
              </tr>
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
    </main>
    <!-- Footer -->
    <br>
     <a href="javascript:window.print()"  class="btn btn-outline-secondary" style="color:black; background-color:yellow;" >
     <i class="fa fa-print"></i> Save</a> 
    
  </div>
       <hr style="background-color:white;">
       <hr style="background-color:white;">
  


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
        
        <script>
            
                alert(" Don't forget to print your inovice please")
        </script>
         <?php
         session_destroy();
        ?>
    </body>
</html>

<?php } else if( $_SESSION['sinovice'] != session_id()) { ?>
  <div>
   <?php header("location:index.php"); ?>
  </div>
     
  <?php }?>
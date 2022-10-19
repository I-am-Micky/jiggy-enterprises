 



 <?php include_once("frontheader.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>Payment Failed</small>
    </h1>

    <div class="row">
      <div class="col">
        
        <?php 

        if (isset($_REQUEST['ref'])) {
          // code...
          ?>
          <div class="alert alert-danger">
            <p>
              Your Payment with Reference Number <b><?php echo $_REQUEST['ref']?></b> was not Successfull.
            </p>
          </div>

          <?php
        }

        ?>
      </div>
      


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

   <?php include_once("frontfooter.php"); ?>
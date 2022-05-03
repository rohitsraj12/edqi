<?php

  if(isset($_POST['submit'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $object = $_POST['object'];
    $code = $_POST['code_skill'];
    $db = $_POST['database'];
    $framework = $_POST['framework'];
    $tool = $_POST['tool'];


  }





?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini py-4">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center">
        Resume Builder
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol> -->
    </section>

    <!-- <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div> -->

    <!-- Main content -->
    <section class="container resume border p-5">
      <!-- title row -->
      <div class="row">
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-8 invoice-col">
          <!-- <b>Invoice #007612</b><br> -->
          <table>
            <tr>
              <th>Name</th>
              <td>: <?php echo $first_name . " " . $last_name;?></td>
            </tr>
            <tr>
              <th>Phone Number</th>
              <td>: <?php echo $phone; ?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td>: <?php echo $email; ?></td>
            </tr>
            <tr>
              <th>Address</th>
                <td>: <?php echo $address; ?>
              </td>
            </tr>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <hr>
      <!-- Table row -->

      <div class="object contianer py-4">
        <p>
          <?php echo $object; ?>  
        </p>
      </div>
      <!-- end object -->

      <div class="skill pb-4">
        <h5>Skills</h5>
        <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:15%">Coding:</th>
                <td>: <?php echo $code; ?></td>
              </tr>
              <tr>
                <th>Database</th>
                <td>: <?php echo $db; ?></td>
              </tr>
              <tr>
                <th>Framework</th>
                <td>: <?php echo $framework; ?></td>
              </tr>
              <tr>
                <th>Tools</th>
                <td>: <?php echo $tool; ?></td>
              </tr>
            </table>
          </div>
      </div>
      <!-- end skils -->

      <div class="experience">
        <div class="pb-4">
          <h5>Working Experience</h5>

          <article>
            <div class="pt-2 d-flex justify-content-between">
              <div class="">
                <h5 class="mb-0">
                  Profile Name
                </h5>
                <p>
                  company Name
                </p>
              </div>
              <div class="">
                <p>June 2020 - Jan 2022</p>
              </div>
            </div>
            <div class="table-responsive">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem dolore repellat quae, modi magnam consequatur facere pariatur illo incidunt iste similique quidem ut qui error doloremque maiores nobis, vel voluptatem.
              </p>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia iste vel ipsam facere ipsa, soluta eius! Ullam minus iste deleniti. </li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, obcaecati! Corrupti repellat quasi iusto nihil quod dolores? </li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam voluptates nobis similique magnam, neque suscipit quaerat autem quas maiores, asperiores mollitia et! </li>
                <li>Lorem ipsum dolor sit amet ipsam facere ipsa, soluta eius! Ullam minus iste deleniti. </li>
              </ul>  
            </div>
            <!-- exp one -->
          </article>
          
          <article>
            <div class="pt-2 d-flex justify-content-between">
              <div class="">
                <h5 class="mb-0">
                  Profile Name
                </h5>
                <p>
                  company Name
                </p>
              </div>
              <div class="">
                <p>June 2020 - Jan 2022</p>
              </div>
            </div>
            <div class="table-responsive">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem dolore repellat quae, modi magnam consequatur facere pariatur illo incidunt iste similique quidem ut qui error doloremque maiores nobis, vel voluptatem.
              </p>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia iste vel ipsam facere ipsa, soluta eius! Ullam minus iste deleniti. </li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, obcaecati! Corrupti repellat quasi iusto nihil quod dolores? </li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam voluptates nobis similique magnam, neque suscipit quaerat autem quas maiores, asperiores mollitia et! </li>
                <li>Lorem ipsum dolor sit amet ipsam facere ipsa, soluta eius! Ullam minus iste deleniti. </li>
              </ul>  
            </div>
            <!-- exp one -->
          </article>
          
        </div>
      </div>
      <!-- end experience -->
      
      <div class="academic">
        <h5>Academic</h5>
        <div class="row">
          
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th width="10%">Year</th>
                <th width="40%">Course</th>
                <th width="40%">Univercity</th>
                <th width="10%">Grade</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>2011</td>
                <td>B.Tech</td>
                <td>IIT Mumbai</td>
                <td>A</td>
              </tr>
              <tr>
                <td>2009</td>
                <td>A Levels</td>
                <td>Mumbai Univercity</td>
                <td>A+</td>
              </tr>

              <tr>
                <td>2011</td>
                <td>B.Tech</td>
                <td>IIT Mumbai</td>
                <td>A</td>
              </tr>
              <tr>
                <td>2009</td>
                <td>A Levels</td>
                <td>Mumbai Univercity</td>
                <td>A+</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
      <!-- academic -->
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <div class="container">
    <div class="row no-print py-4">
      <div class="col-xs-12">
        <form action="temp_1_print.php" method="POST">

          <input type="hidden" name="name" value="<?php echo $first_name . " " . $last_name;?>">
          <input type="hidden" name="phone" value="<?php echo $phone;?>">
          <input type="hidden" name="email" value="<?php echo $email;?>">
          <input type="hidden" name="address" value="<?php echo $address;?>">
          <input type="hidden" name="object" value="<?php echo $object;?>">
          <input type="hidden" name="code" value="<?php echo $code;?>">
          <input type="hidden" name="database" value="<?php echo $db;?>">
          <input type="hidden" name="framework" value="<?php echo $framework;?>">
          <input type="hidden" name="tool" value="<?php echo $tool;?>">

          <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-print"></i> Print</button>

        </form>

        <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> 
          Submit Payment
        </button>

        <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
          <i class="fa fa-download"></i> Generate PDF
        </button> -->
      </div>
    </div>
  </div>
  
</div>
</body>
</html>

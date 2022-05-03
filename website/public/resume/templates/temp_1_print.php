<?php
  
  if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $object = $_POST['object'];
    $code = $_POST['code'];
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
  <title>Resume Builder</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/css/pdf.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
  <div class="wrapper">
  <!-- Main content -->
    
  <section class="container resume p-5">
      <!-- title row -->
      <div class="row">
      </div>
      <!-- info row -->
      <div class="row invoice-info border-bottom pb-2">
        <div class="col-sm-8 invoice-col">
          <!-- <b>Invoice #007612</b><br> -->
          <table>
            <tr>
              <th>Name</th>
              <td>: <?php echo $name;?></td>
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

      <div class="object contianer py-2">
        <p>
          <?php echo $object; ?>  
        </p>
      </div>
      <!-- end object -->

      <div class="skill pb-2">
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
        <div class="pb-2">
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
            <div class="">
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
            <div class="">
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
<!-- ./wrapper -->
</body>
</html>

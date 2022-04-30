<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<?php
if(isset($_POST['submit'])){
    //collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

        //create HTML of the post data
        $body = '<h1>Data from form</h1>'
		.'<p>Name: '.$name.'</p>'
		.'<p>Email: '.$email.'</p>'
		.'<p>Phone: '.$phone.'</p>';

        echo $body;
}   
?> 
</head>
<body>
<form action="" method="post">
  <div class="form-group">
    <label for="name">Name:
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email:
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:
    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" required>	
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>
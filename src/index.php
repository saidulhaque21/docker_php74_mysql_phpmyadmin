<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP Docker Application: Apache, PHP 74, mysql and phpMyAdmin in docker!</title>
  </head>
  <body>
    <h1>PHP Docker Application: Apache, PHP 74, mysql and phpMyAdmin in docker!</h1>
<hr/>

<h1>Database Connection & Data: </h1>
<?php
    $conn = mysqli_connect('mysqldb', 'admin', 'Pass123', "docker_db");
    $query = 'SELECT * From contacts';
    $result = mysqli_query($conn, $query);
    ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
<?php 
while($contact = $result->fetch_object()){
   
    
    ?> 
 <tr>
      <th scope="row"><?php echo $contact->id?></th>
      <td><?php echo $contact->first_name?></td>
      <td><?php echo $contact->last_name?></td>
      <td><?php echo $contact->email?></td>
      <td><?php echo $contact->mobile?></td>
    </tr>


<?php }

?>
    
    
    
  </tbody>
</table>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
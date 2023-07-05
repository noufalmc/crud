<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/style.css')?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Blood List</title>
</head>
<body>
   <div class="container">
    <h3>Blood List</h3>
    <a class="add-new-link" href="<?php echo site_url("add-new-record")?>">Add New Record</a>
    <br>
    <br>
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Mobile No</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    foreach($user as $key =>$value)
    {
    ?>
    <tr>
    <td><?php echo $key+1?></td>
    <td><?php echo $value->username?></td>
    <td><?php echo $value->name?></td>
    <td><?php echo $value->mobile?></td>
    <td>
    <a href="<?php echo site_url("edit/".$value->id)?>"><button>Edit</button></a>
    <a href="<?php echo site_url("delete/".$value->id)?>"><button>Delete</button></a>
    </td>
    </tr>
    <?php
    }
    ?>

  </tbody>
   </div> 
</body>
</html>
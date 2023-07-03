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
    <title>Add New Record</title>
</head>
<body>
    <div class="container">
        <h3>Add New Record</h3>
        <a class="add-new-link" href="<?php echo site_url("")?>">Home</a>
        <form method="post" action="<?php echo base_url("CrudView/add_new")?>">
        <div class="row">
            <div class="col-md-2">
                <label>Enter Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="col-md-2">
                <label>Enter Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile">
            </div>
            <div class="col-md-2">
                <label>Blood Group</label>
                <select class="form-control" name="blood_group">
                    <option>-Choose Group-</option>
                </select>
            </div>
        </div>
    </div>
</body>
</html>
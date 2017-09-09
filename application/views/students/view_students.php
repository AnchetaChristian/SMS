<html>
<head>
  <title><?php echo $title; ?></title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 header">
        <h1>Student Management System</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-xs-4 col-sm-4 bg-primary">
        <p class="lead">Menu</p>
      </div>


<div class="col-md-8 col-xs-8 col-sm-8 contents">
<div id="new_student">
<!-- 	<a class="button" href="../mvc/students.php?request=add">New Student</a>
 -->
 	                  <?php echo '<button type="button" class="btn btn-warning"><a href='.base_url('boots/new_student').'>Add Student</a></button>';

 	                  ?>

					<form action="" method="get">
						<input type="text" name="search" placeholder="Search Student" />
 						<input  type="submit" name="submit" value="find" />

 					</form>
 </div>
<table border = "1">
  <thead>
    <tr>
        <th>ID NO</th>
        <th>LAST NAME</th>
        <th>FIRST NAME</th>
        <th>MIDDLE NAME</th>
        <th>SEX</th>
        <th>COURSE</th>
        <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($students as $a) {
        # code...
        echo '
            <tr>
              <td>'.$a['idno'].'</td>
              <td>'.$a['lastname'].'</td>
              <td>'.$a['firstname'].'</td>
              <td>'.$a['middlename'].'</td>
              <td>'.$a['sex'].'</td>
              <td>'.$a['course'].'</td>
                <td>

                  <button type="button" class="btn btn-warning"><a href='.base_url('boots/profile/'.$a['idno']).'>View</a></button>
                  <button type="button" class="btn btn-success"><a href='.base_url('boots/edit_student/'.$a['idno']).'>Edit</a></button>
                  <button type="button" class="btn btn-danger"><a href='.base_url('boots/drop/'.$a['idno']).'>Delete</a></button>
                </td>
            </tr>
          ';
      }
      // minsan di na ggana to pag sa image <img src="assets/image/hugh-jackman.jpg" alt="My Favorite Actor" />
    ?>
  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>

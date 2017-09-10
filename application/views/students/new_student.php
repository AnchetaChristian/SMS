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
        <div class="col-md-8 col-xs-8 col-sm-8">

<table border = "1">
  <!-- <thead>
    <tr>
        <th>ID NO</th>
        <th>LAST NAME</th>
        <th>FIRST NAME</th>
        <th>MIDDLE NAME</th>
        <th>SEX</th>
        <th>COURSE</th>
    </tr>
  </thead> -->
  <tbody>
  </tbody><form role="form" class="" method="POST">
    <div class="form-group">
      <label for="idno">ID NO.:</label>
      <input type="text" class="form-control" id="idno" name="idno" />
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" name="lname" />
    </div>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" name="fname" />
    </div>
    <div class="form-group">
      <label for="mname">Middle Name:</label>
      <input type="text" class="form-control" id="mname" name="mname" />
    </div>
      <label for="course">Course:</label>
      <select class="form-control" id="coure" name="course" >
        <option value="BSIT">BSIT</option>
        <option value="BSIS">BSIS</option>
        <option value="BSCS">BSCS</option> -->
      
      </select>

      <label for="sex">Sex:</label>
      <input type="radio" class="form-group" id="sex" name="sex" value="Male">Male</input>
      <input type="radio" class="form-group" id="sex" name="sex" value="Female">Female</input>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">
          Save <span class="glyphicon glyphicon-save"></span>
        </button>
      </div>
    </div>
  </form>
</table>

</div>
</div>
</div>
</body>
</html>

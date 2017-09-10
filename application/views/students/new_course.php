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
  <tbody>
  </tbody><form role="form" class="" method="POST">
    <div class="form-group">
      <label for="crs_code">Course Code</label>
      <input type="text" class="form-control" id="crs_code" name="crs_code" />
    </div>
    <div class="form-group">
      <label for="crs_desc">Course Description</label>
      <input type="text" class="form-control" id="crs_desc" name="crs_desc" />
    </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="submit">
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

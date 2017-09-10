<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>  </head>
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
          <?php  echo '<a href='.base_url('boots/list_students').'>Students</a>' ?>
          <p class="View_Courses">Courses</p>
        </div>
        <div class="col-md-8 col-xs-8 col-sm-8 bg-primary">
          <h1 id="dash">SMS COURSES</h1>
        </div>
        <div class="col-md-2 col-xs-2 col-sm-2 contents">
          <?php echo '<button type="button" class="btn btn-warning"><a href='.base_url('boots/new_course').'>Add Course</a></button>';

          ?>
            <table border = "1">
              <thead>
                <tr>
                    <th>COURSE CODE</th>
                    <th>COURSE DESCRIPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($crs as $b) {
                    # code...
                    echo '
                        <tr>
                          <td>'.$b['crs_code'].'</td>
                          <td>'.$b['crs_desc'].'</td>
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
    </div>
  </div>
  </body>
</html>

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
      <?php
      //  $idno = "12-234-534";
      //  $name = "Ancheta, Christian Daniel M.";
      //  $course = "BSIT";
      //  $sex = "male";

      //  print_r(student);
      ?>
      <div class="student-picture">
        <img src="<php base_rul('assets/image/hugh-jackman.jpg')?>" alt="student ppicture">
        </div>
        <div class="student-profile">

          <p>ID No: <?php echo $student[0]['idno']; ?></p>
          <p>Name: <?php echo $student[0]['lname'].','.$student[0]['fname'].''.$student[0]['mname']; ?></p>
          <p>Course: <?php echo $student[0]['course'] ?></p>
          <p>Sex: <?php echo $student[0]['sex'] ?></p>
        </div>
        <button id="btn"> Vanish</button>
        <script type="text/javascript">
        $(document).ready(function() {
          $('#btn').click(function () {
            $('#para').vanish();
          });
        });

        </script>
      </div>
          </div>
      </div>
    </div>

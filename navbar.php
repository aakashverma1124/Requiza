<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Requiza: Technical Club</a>
    </li>
    <li>
        <?php 
              session_start();
              if(isset($_SESSION)){
                  $name = $_SESSION["student_name"];
              }
              

             echo 
             '<div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">'.$name.'
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>';

            ?>
    </li>
  </ul>
</nav>
            <?php 
              session_start();
              if(isset($_SESSION)){
                  $name = $_SESSION["student_name"];
              }
              

             echo 
             '<div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">'.$name.'
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>';

            ?>

</body>
</html>
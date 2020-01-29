<?php include "db.php"; ?>

<?php include "admin/inc/functions.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Website Title -->
    <title>Engineer Brother | Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  </head>

  <body>
    <!-- Header Section Start -->
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Engineer Brother</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">      
                    <?php 
                        $query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($select_all_categories)) { 
                            $cat_id   = $row['cat_id'];
                            $cat_name = $row['cat_name'];
                          ?>
                            <a class="dropdown-item" href="index.php?catID=<?php echo $cat_id; ?>"><?php echo $cat_name;?></a>
                            <div class="dropdown-divider"></div>
                    <?php
                      }
                    ?>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                  <li class="nav-item">
                      <a class="nav-link" href="register.php"><span class="glyphicon glyphicon-user "></span> Sign Up</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in "></span> Log In</a>
                  </li>
               </ul>
             </div>
          </nav>
      </div>
    </header>
    <!-- Header Section End -->
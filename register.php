<?php include "inc/header.php"; ?>

<?php 

    ob_start();

    if(isset($_POST['register'])){
      $fullname               = $_POST['fullname'];
      $username               = $_POST['username'];
      $email                  = $_POST['email'];
      $password               = $_POST['password'];
      $confirmpassword        = $_POST['confirmpassword'];

      $errors= array();
      // file handling for an image
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_size =$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];

      $a = explode('.', $file_name);
      $b = end($a);
      $file_ext = strtolower($b);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         echo '<div class="alert alert-warning">Only jpeg, jpg and png file supported.</div>';
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         echo '<div class="alert alert-warning">File size should have below 2mb size.</div>';
         $errors[]='File size must be excately 2 MB';
      }
      if($password != $confirmpassword){
        echo '<div class="alert alert-warning">Password not matched! Try again carefully.</div>';
        $errors[]='Password not matched!'; 
      }
      if(empty($errors)==true){
             //random number generator
          $number = rand(0,10000000);
          //set a random no infront of the image name
          $updatedName = $number.$file_name;
          // move image into the directory
          move_uploaded_file($file_tmp,"admin/img/users/$updatedName");

              // Encrypted Password
              $hassedPassword = sha1($password);

              if ( empty($fullname) || empty($username) || empty($hassedPassword) || empty($email) || empty($file_name))
              {
                $message = '<div class="alert alert-warning">Please Fillup all the Users Information Correctly</div>';
              }
              else{

                $query = "INSERT INTO users (fullname, username, password, email, avater) VALUES ( '$fullname', '$username', '$hassedPassword', '$email','$updatedName')";

                $add_a_member = mysqli_query($connection, $query);

                if ( !$add_a_member ){
                  die("Query Failed ". mysqli_error($connection));
                }
                else{
                  echo '<div class="alert alert-success" role="alert">TSuccessfully Registered! Please Login Now.</div>';
                  //header("Location: login.php");
                }

              }
          
      }else{
         
      }
    }
  
?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class=""></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="" name="fullname" placeholder="Full Name">
                          </div>
                          <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="" name="username" placeholder="User Name">
                          </div>
                        </div>

                        <div class="form-group">
                          <input type="email" class="form-control form-control-user" id="" name="email" placeholder="Email Address">
                        </div>

                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="" name="password" placeholder="Password">
                          </div>
                          <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="" name ="confirmpassword" placeholder="Repeat Password">
                          </div>
                        </div>

                        <div class="form-group">
                          <input type="file" class="form-control form-control-user" id="" name="image">
                        </div>

                        <button type="submit" value="" name="register" class="btn btn-primary btn-user btn-block">
                          Register Account
                        </button>
                        <hr>
                        <a href="" class="btn btn-google btn-user btn-block">
                          <i class="fab fa-google fa-fw"></i> Register with Google (UC) 
                        </a>
                        <a href="" class="btn btn-facebook btn-user btn-block">
                          <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook (UC)
                        </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php include "inc/footer.php" ?>
<?php ob_end_flush(); ?>

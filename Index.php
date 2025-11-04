<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Staff Login Form</title>
  <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    rel="stylesheet" />
  <style>
    #toast-container {
      z-index: 1050;
    }

    .login-form {
      max-width: 400px;
      margin: 50px auto;
      padding: 30px 25px;
      background: #f7f7f7;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
      margin-bottom: 20px;
    }

    .login-form .form-control {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center pt-5 mt-5">
     
      <?php
                    if(isset($_SESSION['error'])){
                            echo "<div id='toast-container' class='toast-body position-fixed top-0 end-0 p-3' role ='alert'>
                                    <p>".$_SESSION['error']."</p>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                            unset($_SESSION['error']);
                        }
                ?>

      <div class="col-md-6 col-lg-4">
        <div class="login-form">
     
        <form method="POST" action="action.php?return=<?php echo basename(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" >
            <div class="text-center mb-4">
              <img
                src="../assets/images/logo.png"
                alt="Logo"
                class="img-fluid"
                style="width: 50px" />
            </div>
            <div class="form-group">
              <label for="staffId">Staff ID</label>
              <input
                type="text"
                name="staffId"
                class="form-control"
                id="staffId"
                placeholder="Enter Your Staff Id"
                required />
              <div class="invalid-feedback">
                Please provide a valid Staff Id.
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                placeholder="Enter Password"
                required />
              <div class="invalid-feedback">
                Please provide a valid password.
              </div>
            </div>
            <button type="submit" name ="login" class="btn btn-danger btn-block">
              Login
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
   
  </script>
</body>

</html>
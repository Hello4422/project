<?php require_once('config.php') ?>
<?php
   if(!empty($_SESSION['user_role'])){
    $role=$_SESSION['user_role'];
    header('location:'.$role.'/');
   }
?>
<?php include_once('includes/registration.php') ?>
<?php include_once(ROOT_PATH.'/includes/header.php') ?>
<?php include_once(ROOT_PATH.'/includes/nav.php') ?>
  <main id="main">
    <section id="contact" class="contact">
      <div class="container">
    
     <?php if (!empty($response)): ?>
          <?php foreach ($response as $resp): ?>
            <div class="alert alert-<?php echo $resp['sts'] ?> alert-dismissible fade show" role="alert">
              <?php echo $resp['msg'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


          <?php endforeach ?>
        <?php endif ?>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form mt-5 php-email-form">
              <form action="" method="post" role="form" id="login-form" class="login-form">
              <div class="card-header mb-4">
                <h2 class="card-title text-center">Login</h2>
              </div>
                <div class="row">
                  <div class="form-group col-12">
                    <input type="email" name="login_email" class="form-control" id="login_email" placeholder="Email">
                  </div>
                  <div class="form-group col-12">
                    <input type="password" class="form-control" name="login_pass" id="login_pass" placeholder="Enter Password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="login">Login</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form mt-5 php-email-form">
              <form action="<?php echo htmlspecialchars('') ?>" method="post" role="form" id="register-form" class="signup-form">
                <div class="card-header mb-4">
                  <h2 class="card-title text-center">Register</h2>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Your Name">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Your Email">
                  </div>
                  <div class="form-group col-12">
                    <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Enter Password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="signup">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php include_once(ROOT_PATH.'/includes/footer.php') ?> 




   
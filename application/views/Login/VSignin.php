<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->

    <title>E-Learning Login</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/ui.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/login.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="http://elearning.unbin.ac.id/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://elearning.unbin.ac.id/assets/css/signin.css">
    <link rel="stylesheet" href="http://elearning.unbin.ac.id/assets/libs/toastr/toastr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&amp;display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <section id="formHolder">
      <div class="row">
         <div class="col-sm-6 brand"> 
             <img src="<?= base_url('asset/images/unbin.png'); ?>" width="220px" height="150px" class="gbr">
            <div class="heading">
               <h2>Unbin</h2>
               <p>Signin</p>
            </div>
            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>
         <div class="col-sm-6 form">
            <div class="login form-peice switched">
               <form class="login-form" action="http://elearning.unbin.ac.id/login/doLogin" method="POST">
                  <div class="form-group">
                     <label for="loginemail">Email Adderss</label>
                     <input type="text" id="cuserid" name="cuserid" required>
                  </div>
                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" id="cpassword" name="cpassword" required>
                  </div>
                  <div class="CTA">
                      <button type="submit"  class="btn btn-sm btn-primary block" >Signin</button>
                     <a href="#" class="switch">I'm New</a>
                  </div>
               </form>
            </div>



            <div class="signup form-peice">
               <form class="signup-form" action="#" method="post">

                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="username" id="name" class="name">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Adderss</label>
                     <input type="email" name="emailAdress" id="email" class="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="phone">Phone Number - <small>Optional</small></label>
                     <input type="text" name="phone" id="phone">
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                  <button type="submit"  class="btn btn-sm btn-primary block" >Signin</button>
                     <a href="#" class="switch">I have an account</a>
                  </div>
               </form>
            </div>


         </div>
      </div>

   </section>

   <footer>
   <p class="mt-5 mb-3 text-muted">copyright © Universitas Binaniaga Indonesia 2022</p>
   </footer>

</div>
</body>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a351b990a2.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url('js/style.js');?>"></script>
        <!-- <script src="http://elearning.unbin.ac.id/assets/js/bootstrap.min.js"></script>
            <script src="http://elearning.unbin.ac.id/assets/libs/toastr/toastr.min.js"></script>
        <script src="http://elearning.unbin.ac.id/assets/libs/toastr/toastr.init.js"></script> -->
</html>
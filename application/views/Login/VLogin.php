<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <title>Rekam Perwalian Login</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://elearning.unbin.ac.id/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://elearning.unbin.ac.id/assets/css/signin.css">
    <link rel="stylesheet" href="<?= base_url(); ?>TOAST/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>js/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&amp;display=swap" rel="stylesheet">

  </head>

  <body class="text-center" data-new-gr-c-s-check-loaded="8.896.0" data-gr-ext-installed="">

  <form id="form" method="post">
       <!-- <input type="hidden" name="_secure_login" value="6fd6bcf580c08e46e8bc918ffdc586f3b7ec0718"> -->
	    <img class="mb-4" src="<?= base_url('asset/images/unbin.png'); ?>" alt="" width="72" height="72">
	    <h4 class="mb-3 font-weight-normal"><span class="e-letter"></span>Rekam Perwalian</h4>
	    <h4 class="h4 mb-3 font-weight-normal">Universitas Binaniaga Indonesia</h4>
	    <h5 class="mb-3 font-weight-normal">Log In</h5>
	    <div class="mb-2">
		    <label for="cuserid" class="sr-only">Email address</label>
		    <input type="text" id="cuserid" name="txt_user" class="form-control" placeholder="User ID" required="" autofocus="" autocomplete="off">
	    </div>
	    <div class="mb-2">
		    <label for="cpassword" class="sr-only">Password</label>
		    <input type="password" id="cpassword" name="txt_pass" class="form-control" placeholder="Password" required="">
		</div>
	    <div class="menu">
	    	<ul>
	    		<!-- <li><a href="http://elearning.unbin.ac.id/register">Daftar</a></li> -->
	    	</ul>
	    </div>
	    <button class="btn btn-lg btn-primary btn-block"  type="submit"  name="btn_login">Log In</button>
	    <p class="mt-5 mb-3 text-muted">copyright © Universitas Binaniaga Indonesia 2021</p>
    </form>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://elearning.unbin.ac.id/assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>TOAST/dist/js/iziToast.min.js"></script>
	<script src="<?= base_url(); ?>js/sweetalert2.min.js"></script>
	
	<script>
    $(document).ready(function() {
                $('#form').submit(function(e) {
                            e.preventDefault();
                            var formData = new FormData(this);
                            $.ajax({
                                url: '<?= base_url() ?>index.php/Login/goLogin',
                                type: 'POST',
                                data: formData,
                                success: function(data)  {
									var datas = JSON.parse(data);
									$.each(datas, function(key, val)
									{
										console.log(val);
										if (val == 'success') {
											iziToast.success({
												title: 'Hi - <?= $this->session->userdata('nama'); ?>',
												message: '<?= $this->session->flashdata('massages'); ?>',
												position: 'topRight'
											});
											
											setTimeout(function() {
												window.location.href = "<?= base_url(); ?>index.php/Welcome";
											}, 1500);
										} else {
											iziToast.error({
												title: 'Oops..!',
												message: '<?= $this->session->flashdata('message'); ?>',
												position: 'topRight'
											});
											
										}
										
											
									});
									
								},
								error:function(val){

										Swal.fire({
											icon: 'error',
											title: 'Opps!',
											text: 'Terjadi Kesalahan, harap periksa koneksi atau jaringan anda!'
										});

										console.log(val);
										},
								cache: false,
								contentType: false,
								processData: false,
								
							});
						});
			});
									
						
		
    
    </script>
	
	
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true">
</grammarly-desktop-integration></html>

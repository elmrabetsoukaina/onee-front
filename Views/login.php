<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<?php
include("head.php");
?>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Section d'authentification -->
                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <img src="assets/images/logo_onee.jpg" alt="Logo ONEE" class="img-fluid mb-3">
                            <h3 class="title">Authentifiez-vous</h3>
                        </div>
                        <form id="loginForm">
                            <div class="mb-4">
                                <label class="mb-1 text-dark">Email</label>
                                <input type="text" class="form-control form-control" id="username" placeholder="exemple@onee.com">
                            </div>
                            <div class="mb-4 position-relative">
                                <label class="mb-1 text-dark">Password</label>
                                <input type="password" id="userpassword" class="form-control" placeholder="123456">
                                <span class="show-pass eye">
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="mb-4">
                                    <div class="form-check custom-checkbox mb-3">
                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                        <label class="form-check-label" for="customCheckBox1">Mémoriser mes préférences </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <a href="page-forgot-password.html" class="btn-link text-primary"> Password oublié?</a>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                            </div>
                            <p class="text-center">Non inscrit?
                                <a class="btn-link text-primary" href="page-register.html">S'inscrire</a>
                            </p>
                        </form>
                    </div>
                </div>
                <!-- Section d'image -->
                <div class="col-xl-6 col-lg-6">
                    <div class="pages-left h-100 d-flex align-items-center justify-content-center" style="background: url('assets/images/bg.jpg') no-repeat center center; background-size: cover;">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include("script.php");
?>
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    // Show/hide password
    document.querySelector('.show-pass').addEventListener('click', function () {
        const passwordField = document.getElementById('userpassword');
        const passIcon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            passIcon.classList.remove('fa-eye-slash');
            passIcon.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            passIcon.classList.remove('fa-eye');
            passIcon.classList.add('fa-eye-slash');
        }
    });

    // Handle form submission
    $("#loginForm").submit((e) => {
			e.preventDefault()
			postData("login/login", [
				{ key: "user", value: $("#username").val() },
				{ key: "mdp", value: $("#userpassword").val() },
			], "cconn", true)
				.then(reponse => {
					if (reponse.result) {
						notifyMe(reponse.infos, 'green')
						connectNow(reponse)
					}

				})
		})
</script>
</html>

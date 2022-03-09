<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card-body p-5 text-center">
            <h1>Conectare</h1>
            <form method="post">
                    
                        <div class="form-outline form-white mb-4">
                            <label for="ex1">Email address</label><br>
                            <input class="form-control" type="email"  id="ex1" name="email_utilizator"/>
                        </div>

                        <div class="form-outline form-white mb-4">
                            
                            <label class="form-label" for="form2Example28">Password</label><br>
                            <input id="form2Example28" class="form-control col-xs-2" type="password" name="pass"/>
                            <br>
                        </div>

                            <input class="btn btn-outline-dark btn-lg px-5" type="submit" name="conectare" value="Conectare"/><br>


                        <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                        <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p> -->
                    
            </form>
            </div>
        </div>
    </div>
    </div>
</section>


<?php 
if (isset($_SESSION['eroare_login'])) {
   print '<h3 style="color: red">' . $_SESSION['eroare_login'] . '</h3>'; 
}

?>


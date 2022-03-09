<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card-body p-5 text-center">
        <h1>Inregistrare</h1>
            <form method="post">
   
                <div class="form-outline form-white mb-4">
                    <label for="ex1">Email address</label><br>
                    <input class="form-control" type="email" id="ex1" name="email_utilizator"/>
                </div>

                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="form2Example28">Password</label><br>
                    <input id="form2Example28" class="form-control col-xs-2" type="password" name="pass"/>
                    
                </div>
                
                        <input class="btn btn-outline-dark btn-lg px-5" type="submit" name="inregistrare" value="Inregistrare"/>
                  
            </form>
<?php 
if (isset($_POST['inregistrare'])) {
    $email = $_POST['email_utilizator'];
    $parola = $_POST['pass'];
    $rezultatInregistrare = inregistrare($email, $parola);
    if ($rezultatInregistrare) {
        print 'Inregistrare cu succes';
    } else {
        print 'Eroare la inregistrare';
    }
}


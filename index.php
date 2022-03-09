<?php 
session_start();
require_once 'functii/sql_functions.php';
if (isset($_POST['conectare'])) {
    $email = $_POST['email_utilizator'];
    $parola = $_POST['pass'];
    $rezultatConectare = conectare($email, $parola);
    if ($rezultatConectare) {
        if (isset($_SESSION['eroare_login'])) {
            unset($_SESSION['eroare_login']);
        }
        $_SESSION['user'] = $email;
    } else {
        $_SESSION['eroare_login'] = "Conectare esuata";
    }
}

if (isset($_GET['id_produs'])) {
    $id = $_GET['id_produs'];
    //verific daca am produsul in cos
    if (isset($_SESSION['cos'][$id])) {
        $_SESSION['cos'][$id]++;
    } else {
        //nu am deja produsul in cos, pun valoarea 1 pe cheia coresp id-ului produsului
        $_SESSION['cos'][$id] = 1;
    }       
}
//if (isset($_GET['sterge'])) {}
//daca am in cos mai mult de un produs cu un anumit id, fac doar --
//daca am un singur produs cu un anumit id, fac unset de cos de id
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
        <!-- ########################## -->

        <link href="admin/css/styles.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

<link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet" />

<!-- ########### custom  ########### -->
<link href="admin/css/custom.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

<!-- #########  datable 2  ######### -->

<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" />

<link href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css" rel="stylesheet" />

<!-- #########  datable 3  ######### -->

<link href="../../extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet" />

<link href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css" rel="stylesheet" />

<link href="https://cdn.datatables.net/colreorder/1.5.5/css/colReorder.dataTables.min.css" rel="stylesheet" />
   
   
    </head>
    <body>
        <header id="banner"></header>
        <?php
        if (isset($_SESSION['user'])) {
            require_once 'templates/template_conectat.php';
        } else {
            require_once 'templates/template_neconectat.php';
        }       
        ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script src="admin/js/scripts.js"></script>

<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<!-- <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->

<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script src="admin/assets/demo/datatables-demo.js"></script>

<script src="admin/assets/demo/datatables-second.js"></script>

<script src="admin/js/custom.js"></script>

<!-- datatable 2 -->

<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>

<!-- datatable 3 -->

<script src="../../extensions/Editor/js/dataTables.editor.min.js"></script>

<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>

<script src="https://cdn.datatables.net/colreorder/1.5.5/js/dataTables.colReorder.min.js"></script>

<script src=""></script>
</body>
</html>

<nav id="meniu">
    <ul>
        
        <li><a href="index.php?page=1" class="btn btn-secondary btn-lg active">Adauga Imagine</a></li>
        <li><a href="index.php" class="btn btn-secondary btn-lg active">Lista Imagini</a></li>
        <li><a href="index.php?page=2" class="btn btn-secondary btn-lg active">Vizualizare Imagini</a></li>
        <li><a href="index.php?deconectare" class="btn btn-secondary btn-lg active">Deconectare</a></li>
    </ul>
</nav>
<section id="continut">
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 1:
            require_once 'pagini/conectat/adauga_produs.php';
            break;
        case 2:
            require_once 'pagini/conectat/cos_cumparaturi.php';
            break;
        default:
     require_once 'pagini/eroare.php';
    }
} else {
    require_once 'pagini/conectat/lista_produse.php';
}

if (isset($_GET['deconectare'])) {
    session_destroy();
    header("location:index.php");
}
?>
</section>



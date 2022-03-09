<h1>Vizualizare Imagini</h1>
<?php
if (isset($_SESSION['cos']) && $_SESSION['cos'] != NULL) {
    ?>
<table>
    <tr>
        <td>Denumire</td>
        <td>Pret</td>
        <td>Cantitate</td>
        <td></td>
    </tr>
<?php
    foreach ($_SESSION['cos'] as $idProdus => $cantitate) {
        $produs = preiaProdusDupaId($idProdus);
        ?>
    <tr class="table table-striped table-bordered">
        <td><?php print $produs['denumire'];?></td>
        <td><?php print $produs['pret'];?></td>
        <td><?php print $cantitate;?></td>
        <td>
            <a href="index.php?page=2&sterge=<?php print $idProdus; ?>">Sterge</a>
        </td>
    </tr>
    <?php
    }
    print "</table>";
    
} else {
    print "Tabela este goala";
}

<h1>Lista Imagini</h1>
<?php
$produse = preiaProduse();
if (count($produse) == 0) {
    print "Fara imagini in baza de date";
} else {
?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead> 
        <tr>
            <th></th>
            <th class="text-center">Imagine</th>
            <th class="text-center">Denumire</th>
            <th class="text-center">Data introducere</th>
            <!-- add cos -->
            <!-- <th></th> -->
        </tr>
    </thead>
    <tbody>
            <tr>
<?php
    foreach ($produse as $produs) {
        print "<tr>";
        print "<td>";
?>
    <img width="100" src="imagini/<?php print $produs['imagine']; ?>"/>
    <?php
    print "</td>";
    print "<td>" . $produs['denumire'] . "</td>";
    print "<td>" . $produs['pret'] . "</td>";
    print "<td>"
    ?>
    <a href="index.php?id_produs=<?php print $produs['id'];?>"></a>
    <?php
    print "</td>";
    print "</tr>";
    }
}
?>
        </tr>
    </tbody>
</table>

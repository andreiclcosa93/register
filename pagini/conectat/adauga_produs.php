<h1>Adauga Imagine</h1>
<form method="post" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td class="text-center">Denumire Poza</td>
            <td>
                <input type="text" name="denumire" class="form-control"/>
            </td>
        </tr>
        <br>
        <tr>
            <td class="text-center">Data</td>
            <td>
                <input type="text" name="pret" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td class="text-center">Imagine</td>
            <td>
                <input type="file" name="img" class="form-control"/>
            </td>
        </tr>
        <br>
        <tr>
            <th colspan="2" class="text-center">
                <input  class="btn btn-secondary btn-lg" type="submit" name="adauga" value="Adauga"/>
            </th>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['adauga'])) {
    $denumire = $_POST['denumire'];
    $pret = $_POST['pret'];
    if (isset($_FILES['img'])) {
        if ($_FILES['img']['error'] == 0) {
            switch ($_FILES['img']['type']) {
                case 'image/jpg':
                case 'image/jpeg':
                case 'image/png':
                case 'image/bmp':
                case 'image/gif':
                    // $_FILES['img']['name'] nume_din_pc_user.jpg;
                    // daca scoatem uniqid - poza se salveaza asa cum o numim in pc
                    // $numeImagine = uniqid() . $_FILES['img']['name']; 
                    $numeImagine = $_FILES['img']['name'];
                    $salvareServer = move_uploaded_file(
                            $_FILES['img']['tmp_name'],
                            'imagini/' . $numeImagine
                            );
                    if ($salvareServer) {
                        $salvareBd = adaugaProdus($denumire, $pret, $numeImagine);
                        if ($salvareBd) {
                            print 'Produs adugat cu succes';
                        } else {
                            unlink('imagini/' . $numeImagine);
                            print 'Eroare la salvarea in baza de date';
                        }
                    } else {
                        print 'Eroare la salvarea pe server';
                    }
                    break;
                default:
                    print 'Fisierul adaugat nu este o imagine';
                    break;
            }
        } else {
            print 'Eroare la salvarea fisierului';
        }
    }
}

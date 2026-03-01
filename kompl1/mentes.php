<?php
// Engedélyezzük az adatfogadást
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev = $_POST['nev'] ?? 'Ismeretlen';
    $szazalek = $_POST['szazalek'] ?? '0';
    $datum = date('Y-m-d H:i:s');

    // Az adatsor formátuma: Név;Százalék;Dátum
    $sor = "$nev;$szazalek%;$datum\n";

    // Mentés az eredmenyek.csv fájlba (hozzáfűzés módban)
    file_put_contents("eredmenyek.csv", $sor, FILE_APPEND);
    
    echo "Sikeres mentés";
}
?>
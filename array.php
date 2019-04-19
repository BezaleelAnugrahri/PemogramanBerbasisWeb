<?php
// input value per index array dengan nilai index yang sudah ditentukan
$mahasiswa[1] = "Kadek";
$mahasiswa[2] = "Made";
$mahasiswa[3] = "Komang";

// input value per index tanpa menentukan index, maka array 
// memasukkan value ke index terakhir
$mahasiswa[] = "Nyoman"; // index 4

// index di dalam array boleh tidak urut
// index => value
$negara = array(
                    62 => "Indonesia", 
                    54 => "Singapura",
                    64 => "Amerika Serikat"
                );
echo "<pre>";
    var_dump($negara);
echo "</pre>";

echo "<br>";

// index bisa menggunakan string value dan harus memanggilnya dengan value tersebut
$club = array(
                    "RM" => "Real Madrid", 
                    "MU" => "Mancaster United",
                    "MIL" => "Ace Milan", 
                    "FCB" => "Barcelona"
                );
echo "<pre>";
    var_dump($club);
echo "</pre>";

/*
    Pada perulangan terdapat perbedaan mendasar antara (for, while dan foreach)
    pada array

    - for dan while : harus mengetahui jumlah array.
    - foreach : otomatis melakukan perulangan sesuai dengan jumlah isi array.
*/

// cara menampilkan semua "value" di array dengan for
echo "loop with for <br>";
for($x = 1; $x <= count($mahasiswa); $x++){
    echo $mahasiswa[$x] . " <br>";
}
echo "<br>";
// cara menampilkan semua "value" di array dengan foreach
echo "loop with foreach <br>";
foreach($mahasiswa as $x){
    echo "$x <br>";
}

echo "<br>";

// cara menampilakan "index => value" yang ada di dalam array
foreach($club as $x => $y){
    echo "$x adalah $y <br>";
}

// print_r same function with var_dump

/* 
    array_push() digunakan untuk menambah value
    array_pop() digunakan untuk mengeluarkan value
*/

//sort, asort, ksort
//rsort, arsort, krsort (kebalikan)

asort($club); // index akan berubah menjad decimal
echo "<br><table border='1' cellspacing='0' rowspacing='0'>";
echo "<tr><td colspan='2'>Setelah di 'asort()'</td></tr>";
foreach($club as $x => $y){
    echo "<tr>";
        echo "<td style='padding: 10px 10px;'> $x </td><td> $y </td>";
    echo "</tr>";
}
echo "</table>";


sort($club); // index akan berubah menjad decimal
echo "<br><table border='1' cellspacing='0' rowspacing='0'>";
echo "<tr><td colspan='2'>Setelah di 'sort()'</td></tr>";
foreach($club as $x => $y){
    echo "<tr>";
        echo "<td style='padding: 10px 10px;'> $x </td><td> $y </td>";
    echo "</tr>";
}
echo "</table>";

//array_sum() digunakan untuk menjumlahkan value desimal di dalam array

//array dua dimensi
/*
    like matriks sequence
    20  30
    40  50

*/
$array_duadimensi[1][1] = 20;
$array_duadimensi[1][2] = 30;
$array_duadimensi[2][1] = 40;
$array_duadimensi[2][2] = 50; 

echo "<pre>";
    var_dump($array_duadimensi);
echo "</pre>";

$array_mahasiswa = array(
                            "Joko" => array(
                                                "Tinggi" => 172, 
                                                "Berat" => 80
                                            ),
                            "Tini" => array("
                                                Tinggi" => 168, 
                                                "Berat" => 60
                                            )
                        );
echo "<pre>";
    var_dump($array_mahasiswa);
echo "</pre>";

// kolom = field , baris = record


?>
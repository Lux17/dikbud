<?php
echo("



██╗░░██╗███████╗███╗░░░███╗███████╗███╗░░██╗██████╗░██╗██╗░░██╗██████╗░██╗░░░██╗██████╗░
██║░██╔╝██╔════╝████╗░████║██╔════╝████╗░██║██╔══██╗██║██║░██╔╝██╔══██╗██║░░░██║██╔══██╗
█████═╝░█████╗░░██╔████╔██║█████╗░░██╔██╗██║██║░░██║██║█████═╝░██████╦╝██║░░░██║██║░░██║
██╔═██╗░██╔══╝░░██║╚██╔╝██║██╔══╝░░██║╚████║██║░░██║██║██╔═██╗░██╔══██╗██║░░░██║██║░░██║
██║░╚██╗███████╗██║░╚═╝░██║███████╗██║░╚███║██████╔╝██║██║░╚██╗██████╦╝╚██████╔╝██████╔╝
╚═╝░░╚═╝╚══════╝╚═╝░░░░░╚═╝╚══════╝╚═╝░░╚══╝╚═════╝░╚═╝╚═╝░░╚═╝╚═════╝░░╚═════╝░╚═════╝░


");
echo("Pilih:
1. Cari Nama Mahasiswa \n
2. Cari  Dengan NIM \n
3. Cari Nama & Perguruan tingginya \n
4. Cari Perguruan Tinggi \n
5. Cari Dosen \n
pilih: ");

$pilih = trim(fgets(STDIN));

if($pilih == 1){
    echo("Masukan Nama: ");
    $nama = trim(fgets(STDIN));
    $ganti= preg_replace('/\s+/', '%20',$nama);
    $data = ("https://api-frontend.kemdikbud.go.id/hit_mhs/$ganti");
   
    $tampil = file_get_contents($data);
    $dec = json_decode($tampil, true);


    foreach ($dec["mahasiswa"] As $Row):
        echo "\n\nNama Mahasiswa : \n";
        echo $Row["text"];
        echo "\n";
        echo "LINK : \n";
        echo "https://pddikti.kemdikbud.go.id";
        echo $Row["website-link"];
        echo "\n";
    Endforeach; 
    
}elseif($pilih == 2){
    echo("Masukan NIM: ");
    $nim = trim(fgets(STDIN));
    $data = ("https://api-frontend.kemdikbud.go.id/hit_mhs/$nim");
    $tampil = file_get_contents($data);
    $dec = json_decode($tampil, true);

    foreach ($dec["mahasiswa"] As $Row):
        echo "\n\nNama Mahasiswa : \n";
        echo $Row["text"];
        echo "\n";
        echo "LINK : \n";
        echo "https://pddikti.kemdikbud.go.id";
        echo $Row["website-link"];
        echo "\n";
    Endforeach; 

}
elseif($pilih == 3){
    echo("Masukan Nama: ");
    $nama = trim(fgets(STDIN));
    echo("Masukan Perguruan Tinggi: ");
    $pt = trim(fgets(STDIN));
    $data = ("https://api-frontend.kemdikbud.go.id/hit_mhs/$nama'',$pt");
    $tampil = file_get_contents($data);
    $dec = json_decode($tampil, true);

    foreach ($dec["mahasiswa"] As $Row):
        echo "\n\nNama Mahasiswa : \n";
        echo $Row["text"];
        echo "\n";
        echo "LINK : \n";
        echo "https://pddikti.kemdikbud.go.id";
        echo $Row["website-link"];
        echo "\n";
    Endforeach; 
}
elseif($pilih == 4){
    echo("Masukan Perguruan Tinggi: ");
    $pt = trim(fgets(STDIN));
    $ganti= preg_replace('/\s+/', '%20',$pt);
    $data = ("https://api-frontend.kemdikbud.go.id/hit/$ganti");
    $tampil = file_get_contents($data);
    $dec = json_decode($tampil, true);

    foreach ($dec["dosen"] As $Row):
        echo "\n\nNama Dosen : \n";
        echo $Row["text"];
        echo "\n";
        echo "LINK : \n";
        echo "https://pddikti.kemdikbud.go.id";
        echo $Row["website-link"];
        echo "\n";
    Endforeach; 

    foreach ($dec["prodi"] As $Row):
        echo "\n\nNama Prodi : \n";
        echo $Row["text"];
        echo "\n";
        echo "LINK : \n";
        echo "https://pddikti.kemdikbud.go.id";
        echo $Row["website-link"];
        echo "\n";
    Endforeach; 

    foreach ($dec["pt"] As $Row):
        echo "\n\nNama Perguruan Tinggi : \n";
        echo $Row["text"];
        echo "\n";
        echo "LINK : \n";
        echo "https://pddikti.kemdikbud.go.id";
        echo $Row["website-link"];
        echo "\n";
    Endforeach; 
}
elseif($pilih  == 5){

    echo("Masukan Nama: ");
    $nama = trim(fgets(STDIN));
    $ganti= preg_replace('/\s+/', '%20',$nama);
    $data = ("https://api-frontend.kemdikbud.go.id/hit/$ganti");
    $tampil = file_get_contents($data);

    $dec = json_decode($tampil, true);

    foreach ($dec["dosen"] As $Row):
        echo "\n\nNama Dosen : \n";
        echo $Row["text"];
        echo "\n";
        echo "LINK : \n";
        echo "https://pddikti.kemdikbud.go.id";
        echo $Row["website-link"];
        echo "\n";
    Endforeach; 
    // print_r($dec);
}
else{
    echo("masukan angka dengan benar");
};



?>

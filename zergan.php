"<?php
echo "List Tools :\n[1]TOKOPEDIA\n[2]MATAHARI MALL\n[3]PHD\nMasukan Pilihanmu (1-3) : ";
$pilih = trim(fgets(STDIN));
if($pilih>5 OR $pilih<1){ 
    echo "Pilihan Tidak ada, silahkan pilih yang ada!\nMasukan Pilihanmu : ";
	$pilih = trim(fgets(STDIN));
	if($pilih>5 OR $pilih<1) $type = "RIZKY";
}
if($pilih==1){
	$type = "1";
	$n = "TOKOPEDIA";
}elseif($pilih==2){
	$type = "3";
	$n = "MATAHARI MALL";
}elseif($pilih==3){
	$type = "4";
	$n = "PHD";
}
if($type=="RIZKY"){
	echo "Kamu Tidak Memilih Tools Manapun.\n";
}else{
	echo "Kamu Telah Memilih Tools $n , Silahkan Tekan Enter untuk Melanjutkan..";
	$lanjut = trim(fgets(STDIN));
	require_once($type.".php");
}

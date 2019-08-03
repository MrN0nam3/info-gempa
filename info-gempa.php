#!/usr/bin/php
<?php
// Data Gempa Terbaru
function main(){
	$url = "http://data.bmkg.go.id/autogempa.xml";
	$get = file_get_contents($url, False);
	$data = simplexml_load_string($get) or die("Error: Cannot create object");
	print " Tanggal   : ".$data->gempa->Tanggal."\n";
	print " Jam       : ".$data->gempa->Jam."\n";
	print "\n";
	print "\033[1;92m"; // BIBlue
	print " Lintang   : ".$data->gempa->Lintang."\n";
	print " Bujur     : ".$data->gempa->Bujur."\n";
	print " Magnitude : ".$data->gempa->Magnitude."\n";
	print " Kedalaman : ".$data->gempa->Kedalaman."\n";
	print "\n";
	print "\033[1;92m"; // BIPurple
	print " Wilayah   : ".$data->gempa->Wilayah1."\n";
	print " Potensi   : ".$data->gempa->Potensi."\n";
	print "\033[0m"; // Normal
}
system('clear');
print "\033[1;33m"; // BIBlue
print "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ \n";
print "        INFO GEMPA DAN TSUNAMI Terbaru dan Terkini         \n";
print "  Gempa Terbaru yang diambil dari data BMKG   \n";
print "                                              \n";
print "     Author By     : MR.N0N4M3               \n";
print "     My Team : Galaxi Cyber Anonymous      \n";
print "     Thanks To       : ALL Member G.C.A        \n";
print "     My sekutu  : U.O.H.P.I                \n";
print "     semoga dengan kejadian ini kita akan tersadar dengan                   \n";
print "       peringatan ALLAH S.W.T                                       \n";
print "  Semoga kita dalam lindungan ALLAH S.W.T     \n";
print "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ \n";
print "\033[0m"; // Normal
main();
?>
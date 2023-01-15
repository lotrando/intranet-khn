<?php

'xxxx'*/
"ledna",
"února",
"března",
"dubna",
"května",
"června",
"července",
"srpena",
"září",
"října",
"listopadu",
"prosince");

$den=array(
"Neděle",
"Pondělí",
"Úterý",
"Středa",
"Čtvrtek",
"Pátek",
"Sobota");

/* mysql verze */
/*
function getSvatek($yday)
{
global $svatek_dnes, $svatek_zitra;
// spojeni zrejme provedeme jiz drive,
// ale v tomto ukazkovem pripade se nam to hodi prave zde/
mysql_connect() or die(mysql_error());
mysql_select_db("svatky") or die(mysql_error());
// konec spojeni

$yday2=$yday%366+1;

$res=mysql_query("SELECT uid, svatek FROM svatky WHERE
      uid=$yday OR uid=$yday2") or die(mysql_error());
$num=mysql_num_rows($res);
// zpracujeme data
for($i=0; $i<$num; $i++)
	{
	$uid=mysql_result($res,$i,0);
	$svatek=mysql_result($res,$i,1);
	if($uid==$yday) $svatek_dnes=$svatek; else $svatek_zitra=$svatek;
	}

// ukoncime spojeni. Opet, je-li script soucasti
// neceho vetsiho provedeme az na konci
mysql_close();
}
*/

/* ciste php */
include("svatky.inc.php");
function getSvatek($yday)
{
global $svatky,$svatek_dnes, $svatek_zitra;

$svatek_dnes=$svatky[$yday];
$svatek_zitra=$svatky[$yday%366+1];
}

function pday()
{
global $den, $mesic, $svatek_dnes, $svatek_zitra;

$d=getdate();
$y=$d["year"]; //jaky mame rok

$dnes=$den[$d["wday"]]; //jaky mame den v tydnu
$dden=$d["mday"]; // den v mesici
$dmes=$mesic[$d["mon"]]; // mesic, jmeno
$drok=$d["year"]; //rok
$hod=sprintf("%02d",$d["hours"]); //hodina
$min=sprintf("%02d",$d["minutes"]); //minuta, na dve desetina mista
$sec=sprintf("%02d",$d["seconds"]); // sekundy, dtto
getSvatek($d["yday"]+1); // naplnime datovou strukturu

echo "$dnes, $dden. $dmes $drok $hod:$min:$sec
       Svátek má $svatek_dnes, Zítra $svatek_zitra
";

}


pday();


?>

<?php

$r=file_get_contents('https://www.ipinfo.io/103.75.238.126');
$r=json_decode($r);
echo $r->country;
echo $r->loc;
echo $r->city;
echo $r->org;
echo $r->ip;
//var_dump($r);



?>
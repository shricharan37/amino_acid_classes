<?php
$seq=$_POST['sequence'];
$small=0;
$ali=0;
$tiny=0;
$aro=0;
$nonP=0;
preg_match_all("/[ACGLST]/",$seq,$matches_tiny);
echo "Number of tiny residues: ",count($matches_tiny[0]),"<br>";

preg_match_all("/[SCDGNPSTV]/",$seq,$matches_small);
echo "Number of small residues: ",count($matches_small[0]),"<br>";

preg_match_all("/[AILV]/",$seq,$matches_aliphatic);
echo "Number of aliphatic residues: ",count($matches_aliphatic[0]),"<br>";

preg_match_all("/[FHWY]/",$seq,$matches_aromatic);
echo "Number of aromatic residues: ",count($matches_aromatic[0]),"<br>";

preg_match_all("/[ACFGILMPVWY]/",$seq,$matches_nonP);
echo "Number of non-polar residues: ",count($matches_nonP[0]),"<br>";

preg_match_all("/[DEHKNQRST]/",$seq,$matches_polar);
echo "Number of polar residues: ",count($matches_polar[0]),"<br>";

preg_match_all("/[DEHKR]/",$seq,$matches_charged);
echo "Number of charged residues: ",count($matches_charged[0]),"<br>";

preg_match_all("/[HKR]/",$seq,$matches_basic);
echo "Number of basic residues: ",count($matches_basic[0]),"<br>";

preg_match_all("/[DE]/",$seq,$matches_acidic);
echo "Number of acidic residues: ",count($matches_acidic[0]),"<br>";
?>
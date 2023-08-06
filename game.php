<?php
echo "Welcome To My Game\n";
while(true) {
echo "====== Game Tebak Angka ======\n";
echo "Tebak angka dari 1 - 5!\n";
$computer = rand(1,5);
echo "Masukan Tebakan Lau : \n";
$player = trim(fgets(STDIN));
if ($player == $computer) {
    echo "WIN. Angka komputer $computer\n";
    exit;
}else {
    echo "LOSE. Angka komputer $computer\n";
}
}

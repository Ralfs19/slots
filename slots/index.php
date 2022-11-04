<?php


$slots = [
    [" ", " ", " ", " "],
    [" ", " ", " ", " "],
    [" ", " ", " ", " "],
];

function displaySlots($slots){
    echo "{$slots[0][0]} {$slots[0][1]} {$slots[0][2]} {$slots[0][3]} {$slots[0][3]}  \n";
    echo "{$slots[1][0]} {$slots[1][1]} {$slots[1][2]} {$slots[1][3]} {$slots[1][3]}  \n";
    echo "{$slots[2][0]} {$slots[2][1]} {$slots[2][2]} {$slots[2][3]} {$slots[2][3]}  \n";
}

$bets = 2;
$symbols = ["Q", "Q", "Q", "Q", "Q", "A", "A", "A", "A", "A", "J", "J", "J", "J", "J", "K", "K", "K", "K", "K", "Q", "A", "J", "J", "J", "J", "J", "J", "J", "J"];
$balance = 100;

echo "To start play press number 1" . PHP_EOL;
while (true) {

    if ($balance < 0){
        echo "Out of money";
        exit;
    }

    $input = readline("Enter your choise: ");
    if ($input == 2){
        $balance = 100;
    }
    if ($input == 3){
        $balance = 200;
    }
    if ($input == 4){
        $bets = 2;
    }
    if ($input == 5){
        $bets = 4;
    }
    if ($input == 6){
        $bets = 8;
    }
    $randomSym[] = shuffle($symbols);
    if ($input == 1 && $balance > $bets) {
        $balance -= $bets;
        // First Line
        $slots[0][0] = $symbols[0];
        $slots[0][1] = $symbols[1];
        $slots[0][2] = $symbols[2];
        $slots[0][3] = $symbols[3];
        $slots[0][4] = $symbols[4];
        //  Second Line
        $slots[1][0] = $symbols[5];
        $slots[1][1] = $symbols[6];
        $slots[1][2] = $symbols[7];
        $slots[1][3] = $symbols[8];
        $slots[1][4] = $symbols[9];
        //  Third Line
        $slots[2][0] = $symbols[10];
        $slots[2][1] = $symbols[11];
        $slots[2][2] = $symbols[12];
        $slots[2][3] = $symbols[13];
        $slots[2][4] = $symbols[13];
    }
    //  For Q lines
    if ($slots[0][0] == "Q" && $slots[0][1] == "Q" && $slots[0][2] == "Q" && $slots[0][3] == "Q" && $slots[0][4] == "Q" ) {
        $balance += 30 * $bets;
    }
    if ($slots[1][0] == "Q" && $slots[1][1] == "Q" && $slots[1][2] == "Q" && $slots[1][3] == "Q" && $slots[1][4] == "Q") {
        $balance += 30 * $bets;
    }
    if ($slots[2][0] == "Q" && $slots[2][1] == "Q" && $slots[2][2] == "Q" && $slots[2][3] == "Q" && $slots[2][4] == "Q") {
        $balance += 30 * $bets;
    }
    //  For A lines
    if ($slots[0][0] == "A" && $slots[0][1] == "A" && $slots[0][2] == "A" && $slots[0][3] == "A" && $slots[0][4] == "A") {
        $balance += 50 * $bets;
    }
    if ($slots[1][0] == "A" && $slots[1][1] == "A" && $slots[1][2] == "A" && $slots[1][3] == "A" && $slots[1][4] == "A") {
        $balance += 50 * $bets;
    }
    if ($slots[2][0] == "A" && $slots[2][1] == "A" && $slots[2][2] == "A" && $slots[2][3] == "A" && $slots[2][4] == "A") {
        $balance += 50 * $bets;
    }
    //  For J lines
    if ($slots[0][0] == "J" && $slots[0][1] == "J" && $slots[0][2] == "J" && $slots[0][3] == "J" && $slots[0][4] == "J") {
        $balance += 10 * $bets;
    }
    if ($slots[1][0] == "J" && $slots[1][1] == "J" && $slots[1][2] == "J" && $slots[1][3] == "J" && $slots[1][4] == "J") {
        $balance += 10 * $bets;
    }
    if ($slots[2][0] == "J" && $slots[2][1] == "J" && $slots[2][2] == "J" && $slots[2][3] == "J" && $slots[2][4] == "J") {
        $balance += 10 * $bets;
    }
    //  For K lines
    if ($slots[0][0] == "K" && $slots[0][1] == "K" && $slots[0][2] == "K" && $slots[0][3] == "K" && $slots[0][4] == "K") {
        $balance += 40 * $bets;
    }
    if ($slots[1][0] == "K" && $slots[1][1] == "K" && $slots[1][2] == "K" && $slots[1][3] == "K" && $slots[1][4] == "K") {
        $balance += 40 * $bets;
    }
    if ($slots[2][0] == "K" && $slots[2][1] == "K" && $slots[2][2] == "K" && $slots[2][3] == "K" && $slots[2][4] == "K") {
        $balance += 40 * $bets;
    }
    //  For A zigzag
    if ($slots[0][0] == "A" && $slots[1][1] == "A" && $slots[2][2] == "A" && $slots[1][3] == "A" && $slots[0][4] == "A"){
        $balance += 25 * $bets;
    }
    if ($slots[2][0] == "A" && $slots[1][1] == "A" && $slots[0][2] == "A" && $slots[1][3] == "A" && $slots[2][4] == "A"){
        $balance += 25 * $bets;
    }
    // For K zigzag
    if ($slots[0][0] == "K" && $slots[1][1] == "K" && $slots[2][2] == "K" && $slots[1][3] == "K" && $slots[0][4] == "K"){
        $balance += 20 * $bets;
    }
    if ($slots[2][0] == "K" && $slots[1][1] == "K" && $slots[0][2] == "K" && $slots[1][3] == "K" && $slots[2][4] == "K"){
        $balance += 20 * $bets;
    }
    //  For J zigzag
    if ($slots[0][0] == "J" && $slots[1][1] == "J" && $slots[2][2] == "J" && $slots[1][3] == "J" && $slots[0][4] == "J"){
        $balance += 15 * $bets;
    }
    if ($slots[2][0] == "J" && $slots[1][1] == "J" && $slots[0][2] == "J" && $slots[1][3] == "J" && $slots[2][4] == "J"){
        $balance += 15 * $bets;
    }
    // For Q zigzag
    if ($slots[0][0] == "Q" && $slots[1][1] == "Q" && $slots[2][2] == "Q" && $slots[1][3] == "Q" && $slots[0][4] == "Q"){
        $balance += 30 * $bets;
    }
    if ($slots[2][0] == "Q" && $slots[1][1] == "Q" && $slots[0][2] == "Q" && $slots[1][3] == "Q" && $slots[2][4] == "Q"){
        $balance += 30 * $bets;
    }


    displaySlots($slots);
    echo 'Your balance: ' . $balance . '$' . PHP_EOL;
    echo "[2] balance 100$" . PHP_EOL;
    echo "[3] balance 200$" . PHP_EOL;
    echo "[4] bet 2$" . PHP_EOL;
    echo "[5] bet 4$" . PHP_EOL;
    echo "[6] bet 8$" . PHP_EOL;

}


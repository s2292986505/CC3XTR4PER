<?php
/**
 * @package CC Extraper & Checker
 * @author jacek-9999, radenvodka, zelsaddr
 * Thanks to https://github.com/radenvodka/color-php for PHP Color Function
 * Thanks to https://github.com/jacek-9999/credit-card-generator/ 
 * Iam Recode the cc.class.php from jacek-9999 in github'
 * Changelog : - Adding feature Date,
 *             - Adding feature Year,
 *             - Adding feature CVV,
 *             - Adding feature Checker for Live card dll
 * NOTE : FILE NAME SAVED WITH YOUR BIN INPUT.
 * MAZTERIN.COM
**/
require "./cc.class.php";
echo ">> BIN : "; $bin = trim(fgets(STDIN)); // BIN
echo ">> Total : "; $total = trim(fgets(STDIN)); // TOTAL in Numeric
echo ">> Check : "; $check = trim(fgets(STDIN)); // BOOLEAN 1 or 0
$cc = new creditCardGenerator($bin, $total, $check);
$cc->getCC();
?>
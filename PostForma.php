<html>
<body>

Laba diena, <?php echo $_POST["vardas"]; ?>!<br>
Jūsų pašto adresas yra: <?php echo $_POST["pastas"]; ?><br>
Rombas, kurio kraštinė lygi <?php echo $_POST["krastine"]; ?>:<br>
<?php
include '../funkcijos/Funkcijos.php';
KurtiRomba($_POST["krastine"]);
function picture($number){
for($break = 1; $break < $number; $break++){
for($dot = $number-$break;$dot>=0;$dot--)
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for($dot= 2*$break-1;$dot > 0;$dot--)
echo ("&nbsp;✇&nbsp;");
echo "<br>";
};
for($break = $number;$break >= 0;$break--){
for($dot = $number - $break; $dot>=0; $dot--)
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for($dot=2*$break-1;$dot>0;$dot--)
echo ("&nbsp;✇&nbsp;");
echo "<br>";
}
}
picture($_POST["krastine"]);
?>
</body>
</html>
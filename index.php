<?php
// $dita = "marte";
// switch ($dita) {
//     case "hene" : echo 'its monday';
//     break;
//     case "marte" : echo 'its tuesday';
//     break;
//     case 'merkure' : echo 'its wendsday';
//     break;
//     case 'enjte' : echo 'its thursday';
//     break;
//     case 'premte' : echo 'its friday';
//     break;
//     case 'shtune' : echo 'its saturday';
//     break;
//     case 'diell' : echo 'its sunday';
//     break;
//     default : echo 'Shkruje ni dit';
// }

// phpinfo();

$x = "hello";
print_r($x);
echo "<br>";
$y = 15;
echo gettype($y)."<br>";

$z = 10.3;
echo gettype($z)."<br>";

function display(){

    echo "this is " . phpversion();

}
function hello(){
    echo "hello world!!!";
}
display();
echo "<br>";
hello();
echo "<br>";
function shum(){
    $n1 = 120 + 100;
    echo $n1;
}
shum();
















?>
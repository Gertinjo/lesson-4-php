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

// $x = "hello";
// print_r($x);
// echo "<br>";
// $y = 15;
// echo gettype($y)."<br>";

// $z = 10.3;
// echo gettype($z)."<br>";

// function display(){

//     echo "this is " . phpversion();

// }
// function hello(){
//     echo "hello world!!!";
// }
// display();
// echo "<br>";
// hello();
// echo "<br>";
// function shum(){
//     $n1 = 120 + 100;
//     echo $n1;
// }
// shum();

// function maximum ($x , $y) {

//     if($x > $y){
//         return $x;
//     }else {
//         return $y;
//     }
// }

// $a = 20;

// $b = 30;

// $test = maximum($a , $b);

// echo "Max of $a and $b is $test";



// function diver($n){

//     if(($n % 2)== 0){
//         echo "this is yes";
//     }else {
//         echo "this is not";
//     }
// }
// print_r(diver(4)."<br>");
// print_r(diver(12)."<br>");
// print_r(diver(23)."<br>");
// print_r(diver(20)."<br>");

// $y= 52;

// function globalvar(){
//     $c = 20;
//     // echo  $y;
//     echo  $c;
// }
// globalvar();
// echo  $y;

// function stati(){
//     static $count = 0;
//     $count++;

//     echo "This will rize by one $count";
// }
// stati();

// $x = 10;

// function lokalvar() {
//     $y = 20;
//     echo $y;
// }
// lokalvar();
// echo $x;


$sport = ['Futboll' , 'Basketball' , 'tennis' , 'hockey' , 'handball', 'Volleyball'];

echo $sport[0];

echo "<br>";

echo end($sport);

echo "<br>";

echo count ($sport);
echo "<br>";
for ($i=0; $i < 4 ; $i++) { 
    


    echo $sport[$i];
}
echo "<br>";












?>
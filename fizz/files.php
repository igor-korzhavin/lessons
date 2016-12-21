<?

$handle = fopen("example.txt", "a+") or die ("File Error");
 
function getFizz($file) {

$int = fgets($file);
$int1 = fgets($file);
$int2 = fgets($file);

$fizz = $int;
$buzz = $int1;
$iteration = $int2;

  for($i = 1; $i <= $iteration; $i++) {

   $fz = !($i % $fizz);
   $bz = !($i % $buzz);

   switch(true) {
   	case ($fz && $bz): echo "FB"; break;
   	case $fz: echo "F"; break;
   	case $bz: echo "B"; break;
   	default: echo "$i"; break;	
}
}
}
getFizz($handle);
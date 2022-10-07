<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php $array = array();
$mayores = array();
$menores = array();

for ($valores = 0; $valores<=10; $valores++) {
  $random = rand(1,100);
  echo "<br>";
  array_push($array, $random);
 
  
  
}

foreach ($array as $valor) {
  if ($valor >= 50) {
    array_push($mayores, $valor);
  }
}

foreach ($array as $valor) {
  if ($valor <= 50) {
    array_push($menores, $valor);
  }
}

echo "<br>";
print_r($array);
echo "<br>";
print_r($mayores);
echo "<br>";
print_r($menores);
echo "<br>"; ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
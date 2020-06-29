 <?php
// Array with names
$a[] = "test";
$a[] = "starbucks";
$a[] = "Nafiul's Biriyani Ghor";
$a[] = "Nafiul's Cafe";
$a[] = "Nafiul Cafe 2";
$a[] = "Western Food Hub";
$a[] = "abc";
$a[] = "Arif's Coffee";
$a[] = "Saiful's Coffee";
$a[] = "Apon's Coffee";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 
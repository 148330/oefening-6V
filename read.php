<pre>
<?php

if (isset($_POST["verzend"])) {
    $opdracht = $_POST["opdracht"];
}
$file_handle = fopen("$opdracht", "a+");
$regel1 = array();
while (!feof($file_handle)) {
    $line = fgets($file_handle);
    $regel = $line . "<br />";
    $regel1[] = $regel;
    #print_r($regel);
    #print_r($regel[0]);
}
fclose($file_handle);
#$x = 0.5;
$regel2 = array();
for ($x = 0.5; $x < 6; $x++) {
    $y = $x * 4;
    $regel2[] = explode(")", $regel1[$y]);
};
#print_r($regel2);
for($i = 1; $i < count($regel2[0]) ; $i++) {
    foreach($regel2[$i] as $regel3){
        $regel4 =explode("(", $regel3);
        #print_r($regel4);
    }
    #$regel3[] = explode("(", $regel2[$i]);
}
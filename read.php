<?php
if(isset($_POST["verzend"])){
        $opdracht = $_POST["opdracht"];
    }
$file_handle = fopen("$opdracht", "a+");
while (!feof($file_handle)) {
    $line = fgets($file_handle);
        $regel = $line . "<br />";
        print_r($regel); 
}
fclose($file_handle);


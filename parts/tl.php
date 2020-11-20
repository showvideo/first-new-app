<?php 

$result = anitl();
$array = array_slice($result, 0 ,100);
foreach($array as $tl) {
    table_titles($tl);
}

?>

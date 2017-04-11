<?php

/* 
 * 
 */

ob_start() ?>

<?php

$i = 0;

foreach($state_list as $stateOne) {
    if($i > 0) {
        echo '<h3> <a href="index.php?state='.$stateOne->country_name.'">'.$stateOne->country_name.'</a></h3>';
    }
    $i++;
}
$stateOne->country_name="";
?>

<?php $menyy = ob_get_clean(); ?>
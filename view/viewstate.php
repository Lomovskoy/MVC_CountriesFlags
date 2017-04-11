<?php

/* 
 * 
 */

ob_start() ?>

<article>
    
    <?php
    
    echo '<h3>';
    if(isset($_GET['state'])) echo 'Country: ';
    echo $state->country_name . '</h3>';
    
    if(file_exists('public/images/'.$state->image)) {
        echo '<img src="public/images/'.$state->image.'" >';
    }
    
    if(file_exists('public/text/'.$state->description) and $state->description!="") {
        require_once ('public/text/'.$state->description);
    }
    ?>
</article>
<?php $content = ob_get_clean(); ?>
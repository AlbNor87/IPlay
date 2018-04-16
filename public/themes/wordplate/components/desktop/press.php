<?php 

$sports = collect(get_posts(['post_type' => 'sports']));

foreach ($sports as $sport) {

        $post_id = $sport->ID;
        die(var_dump(get_field('hero', $post_id)));
}
 
?>

<!-- DESKTOP START-->
<div class="desktop">
    
        <H1>Welcome to the DESKTOP press page!</H1>
        
</div><!-- desktop -->
<!-- DESKTOP END -->
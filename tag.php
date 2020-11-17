<?php
    get_header();
?>
<div class="category">
    <h1>tag <?php single_tag_title(); ?></h1>
    <?php get_template_part('loop'); ?>
</div>
<?php
get_sidebar();
get_footer();
?>
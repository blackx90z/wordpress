<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * Template Name: Full Width Template
 *
 * @package whc-underscores
 */

get_header();
?>
<div class="col-md-8">
<form action="">
<div class="form-group">
<label for="">First Name</label>
<input type="text" class="form-control">
</div>


<div class="form-group">
<label for="">Last Name</label>
<input type="text" class="form-control">
</div>


<div class="form-group">
<label for="">Email</label>
<input type="text" class="form-control">
</div>
</form>
</div>

<div class="col-md-4">
<?php get_sidebar(); ?>
</div>

<?php

get_footer();
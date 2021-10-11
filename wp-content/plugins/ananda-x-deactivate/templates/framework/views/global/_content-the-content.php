<?php

// =============================================================================
// VIEWS/GLOBAL/_CONTENT-THE-CONTENT.PHP
// -----------------------------------------------------------------------------
// Display of the_content() for various entries.
// =============================================================================

$swiftype_atts = array(
    'name' => 'body',
    'type' => 'text',
);

?>

<?php do_action( 'x_before_the_content_begin' ); ?>

<div class="entry-content content" <?php ananda_x_swiftype_atts( $swiftype_atts ); ?>>

<?php do_action( 'x_after_the_content_begin' ); ?>

  <?php the_content(); ?>
  <?php x_link_pages(); ?>

<?php do_action( 'x_before_the_content_end' ); ?>

</div>

<?php do_action( 'x_after_the_content_end' ); ?>
<?php 

	$the_post_id = get_the_ID();
	$content_further_information = get_post_meta( $the_post_id, '_metabox_content_further_information', true );
?>
	<div id="main_content_further_information">
		<div id="content_content_further_information" class="hr-before">
			<?php echo $content_further_information; ?>
		</div>
	</div>

	<style type="text/css" media="screen">
		#content_content_further_information{
			font-size: 20px;
			font-family: 'alda',Georgia,serif;
			font-style: italic;
            color: rgba(0,0,0,0.5);
            margin-top: 20px;
		}
		#main_content_further_information em{
			font-style: normal;
		}
        .hr-before::before{
            content: '';
            width: 100%;
            height: 3px;
            left: 0;
            display: block;
            clear: both;
            background-color: black;
            margin-bottom:20px;
        }
	</style>

<?php do_action( 'x_after_the_content_end' ); ?>
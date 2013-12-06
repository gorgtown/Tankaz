<?php
/**
 * @file block--xhtml.tpl.php
 * Extend theme implementation to display a block in Nucleus.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user module
 *     is responsible for handling the default user navigation block. In that case
 *     the class would be "block-user".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
?>
<?php $n ="";
	$l1 = "net-interests"; 
	$l2 = "kazakh-land";
	$l3 = "gymnastic";
	$l4 = "videoclips";
	$l5 = "weather";
	$l6 = "prognosis";
	if($block_html_id == "block-block-2--2"){
		$n = $l1;
	}
	else if($block_html_id == "block-block-14--2"){
		$n = $l2;
	}
	else if($block_html_id == "block-block-6--2"){
		$n = $l3;
	}
	else if($block_html_id == "block-block-15--2"){
		$n = $l4;
	}
	else if($block_html_id == "block-block-8--2"){
		$n = $l5;
	}
	else if($block_html_id == "block-block-16--2"){
		$n = $l6;
	}

 ?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> block-icon"<?php print $attributes; ?> style="width:150px; float:left;">
  <div class="block-inner clearfix" style="width:150px; float:left;">
    <a href="<?php print $n; ?>"><span class="icon">&nbsp;</span></a>
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div <?php print $content_attributes; ?>>
      <?php print $content; ?>
    </div>
  </div>
</div>

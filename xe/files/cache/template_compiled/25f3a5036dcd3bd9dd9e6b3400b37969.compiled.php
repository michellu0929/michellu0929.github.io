<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->li->use_camera_slide == 'Y' && $__Context->li->camera_slide_image_1){ ?><div id="fs-camera-slide" class="camera-fs-wrap<?php if($__Context->li->camera_slide_width_fixed == 'Y'){ ?> fs-wrap<?php };
if($__Context->li->camera_slide_pattern != 'none'){ ?> pattern-<?php echo $__Context->li->camera_slide_pattern;
} ?>">
	<div data-src="<?php echo $__Context->li->camera_slide_image_1 ?>"<?php if($__Context->li->camera_slide_thumb_1){ ?> data-thumb="<?php echo $__Context->li->camera_slide_thumb_1 ?>"<?php } ?>>
		<?php if($__Context->li->camera_slide_caption_1){ ?><div class="camera-caption fadeIn clear">
			<?php echo $__Context->li->camera_slide_caption_1 ?>
		</div><?php } ?>
	</div>
	<?php if($__Context->li->camera_slide_image_2){ ?><div data-src="<?php echo $__Context->li->camera_slide_image_2 ?>"<?php if($__Context->li->camera_slide_thumb_2){ ?> data-thumb="<?php echo $__Context->li->camera_slide_thumb_2 ?>"<?php } ?>>
		<?php if($__Context->li->camera_slide_caption_2){ ?><div class="camera-caption fadeIn clear">
			<?php echo $__Context->li->camera_slide_caption_2 ?>
		</div><?php } ?>
	</div><?php } ?>
	<?php if($__Context->li->camera_slide_image_3){ ?><div data-src="<?php echo $__Context->li->camera_slide_image_3 ?>"<?php if($__Context->li->camera_slide_thumb_3){ ?> data-thumb="<?php echo $__Context->li->camera_slide_thumb_3 ?>"<?php } ?>>
		<?php if($__Context->li->camera_slide_caption_3){ ?><div class="camera-caption fadeIn clear">
			<?php echo $__Context->li->camera_slide_caption_3 ?>
		</div><?php } ?>
	</div><?php } ?>
	<?php if($__Context->li->camera_slide_image_4){ ?><div data-src="<?php echo $__Context->li->camera_slide_image_4 ?>"<?php if($__Context->li->camera_slide_thumb_4){ ?> data-thumb="<?php echo $__Context->li->camera_slide_thumb_4 ?>"<?php } ?>>
		<?php if($__Context->li->camera_slide_caption_4){ ?><div class="camera-caption fadeIn clear">
			<?php echo $__Context->li->camera_slide_caption_4 ?>
		</div><?php } ?>
	</div><?php } ?>
	<?php if($__Context->li->camera_slide_image_5){ ?><div data-src="<?php echo $__Context->li->camera_slide_image_5 ?>"<?php if($__Context->li->camera_slide_thumb_5){ ?> data-thumb="<?php echo $__Context->li->camera_slide_thumb_5 ?>"<?php } ?>>
		<?php if($__Context->li->camera_slide_caption_5){ ?><div class="camera-caption fadeIn clear">
			<?php echo $__Context->li->camera_slide_caption_5 ?>
		</div><?php } ?>
	</div><?php } ?>
</div><?php } ?>
<?php if(count($states) > 0) : ?>
	<div class="message error validation_error">
		<?php foreach ($states as $state): ?>
			<p><div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;"><?php echo $state; ?></h2></div></p>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
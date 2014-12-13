<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
	<?php echo $form->label('title', t('Title')); ?>
	<?php echo $form->text('title', $title, array('placeholder' => 'Optional title')); ?>
</div>

<div class="form-group markdown-field">
	<?php echo $form->label('markdown', t('Markdown')); ?>
	<?php echo $form->textarea('markdown', $markdown, array('placeholder' => 'Your markdown code')); ?>
</div>
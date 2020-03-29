<?php include_once('_header.php');?>

<h1>WYSIWYG Example:</h1>
<h2>When you submit the form, <br/>the filtered HTML will be outputted in a text box</h2>

<?php $form->open('test')->method('POST')->action($dotz->url . '/filter/submit')->show();?>
	
	<div class="row">
		<?php $form->editor('text')
				->label('Add rich content below:')
				->text('You can enter any formatted text here.')
				->show();?>
	</div>
	<div class="row">
		<?php $form->button('submit')->value('Submit')->show();?>
	</div>

<?php $form->close()->show();?>

<h4><a href="<?php echo $dotz->url;?>/filter" class="item">Try filtering raw HTML here</a></h4>

<?php include_once('_footer.php');?>
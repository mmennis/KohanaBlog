<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h3>Add a comment</h3>

<?php echo Form::open('comment/post/'); ?>
	<?php echo Form::label("name", "Name"); ?>
	<br />
	<?php echo Form::input("name", $comment->name); ?>
	<br /><br />
	
	<?php echo Form::label("email", "Email"); ?>
	<br />
	<?php echo Form::input("email", $comment->email); ?>
	<br /><br />
	
	<?php echo Form::label("comment", "Comment"); ?>
	<br />
	<?php echo Form::textarea("comment", $comment->comment); ?>
	<br /><br />
	
	<?php echo Form::hidden("article_id", $article->pk()); ?>
	<?php echo Form::submit("submit", "Submit"); ?>	
<?php echo Form::close(); ?>
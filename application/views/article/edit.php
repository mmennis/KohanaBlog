<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1><?php echo ($article->id ? "Edit" : "New"); ?> article</h1>

<?php $errors = isset($errors) ? $errors : array(); ?>

<?php echo Form::open('article/post/'.$article->id); ?>
	<?php echo Form::label("title", "Title"); ?>
	<br />
	<?php echo Form::input("title", $article->title); ?>
	<span class="error"><?php echo Arr::get($errors, 'title'); ?></span>
	<br />
	<?php echo Form::label("content", "Content"); ?>
	<br />
	<?php echo Form::textarea("content", $article->content); ?>
	<span class="error"><?php echo Arr::get($errors, 'content'); ?></span>
	<br />
	<br />
	<?php echo Form::submit("submit", "Submit"); ?>
<?php echo Form::close(); ?>
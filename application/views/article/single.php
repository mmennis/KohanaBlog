<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div>
	<h2><?php echo $article->title; ?></h2>
	<pre><?php echo $article->content;?></pre>
	<?php echo HTML::anchor("article/edit/".$article->id, "Edit"); ?>
	<?php echo HTML::anchor("article/delete/".$article->id, "Delete"); ?>
</div>

<div id="comments" style="margin: 10px 0px 10px 0px;">
	<?php foreach($article->comments->find_all() as $comment): ?>
		<!-- showing comment -->
		<?php echo View::factory('comment/single', array('comment' => $comment)); ?>
	<?php endforeach; ?>
</div>

<!-- Only show commnts of individual blogs (not on index page) -->
<?php echo View::factory('comment/edit', array('comment' => new Model_Comment(), 'article' => $article)); ?>
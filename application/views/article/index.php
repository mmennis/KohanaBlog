<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>Kohana Blog Homepage</h1>

<?php echo HTML::anchor("article/new", "New Article"); ?>

<?php foreach($articles as $article): ?>
<div class="article">
	<div class="title"><?php echo HTML::anchor("article/view/".$article->id, $article->title); ?></div>
	<pre><?php echo $article->content; ?></pre>
	<?php echo HTML::anchor("article/edit/".$article->id, "Edit"); ?>
	<?php echo HTML::anchor("article/delete/".$article->id, "Delete"); ?>
</div>
<?php endforeach; ?>
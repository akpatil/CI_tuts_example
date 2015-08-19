<?php foreach($news as $newsItem): ?>	

<h2><?php echo $newsItem['title']; ?>
</h2>

<div class="main"><?php echo $newsItem['text']; ?>
</div>

<p><a href = "<?php echo $newsItem['slug'] ?>">View Article</a></p>

<?php endforeach ?>
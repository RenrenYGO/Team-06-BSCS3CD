<h2><?= $title; ?></h2>
<ul class="list-group">
<?php foreach($threads as $thread) : ?>
	<li class="list-group-item"><a href="<?php echo site_url('/threads/posts/'.$thread['id']); ?>"><?php echo $thread['name']; ?></a>
		
	</li>
<?php endforeach; ?>
</ul>
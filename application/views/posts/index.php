<h2><?= $title ?></h2>

<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>

    <!-- User id to name -->

    <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
    ?><br>

    <!-- End -->


    <small>Posted by: <?php echo $post['name']; ?></small><br>
    <small>Posted on: <?php echo $post['date']; ?></small><br>
    <?php echo $post['content']; ?>

    <p><a href="<?php echo site_url('/posts/'. $post['slug']); ?>">
    Read More
    </a></p>

    <?php endforeach; ?>
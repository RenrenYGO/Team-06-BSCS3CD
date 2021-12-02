<h2><?php echo $post['title']; ?></h2>

    <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
    ?><br>

    <small>Posted by: <?php echo $post['name']; ?></small><br>
    <small>Posted on: <?php echo $post['date']; ?></small><br>
    <?php echo $post['content']; ?>

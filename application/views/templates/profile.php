<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php include 'prof.css';?>
        <?php include 'style.css';?>
    </style>
</head>
<body class="profile-page">

    <div class="page-header"></div>
    <div class="main">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="profile">
                            <?php if($user['profile_picture']!='noimage.jpg'):?>
                            <img src="<?php echo base_url('images/profile_picture/' . $user['profile_picture']);?>" width= "60" height="60" class="rounded rounded-circle">
                            <?php else:?>
                            <img src="<?php echo base_url('assets/avatar.jpg');?>" width= "60" height="60" class="rounded rounded-circle">
                            <?php endif;?>
                        </div>

                        <div class="name d-inline text-center mb-5">
                            <h1 class="title"><?php echo $user['name'] ?>
                            <a class="btn px-2" id="edit" href="<?php echo base_url('users/index');?>"> <img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/pencil-square.svg');?>" alt="edit"></a></h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container px-4 pb-4 mt-5">

                <div class="p-3 border border-dark box">
                    <h3>About Me</h3>
                    <p><?php echo $user['bio'];?></p>
                </div>
                <?php $num = count($posts); ?>
                <div class="d-flex mt-3">
                    <?php if($user['post_count']!=0) : ?>
                    <h4 class="mt-4"> Posts:[<?php echo $num;?>]</h4>
                    <?php endif;?>
                    <?php if($user['post_count']==0) : ?>
                    <h4>No Posts To Display</h4>  
                    <?php endif;?>

                    <h3 class=" mt-4 ms-auto box text-decoration-none">
                        <a href="<?php echo base_url('posts/create'); ?>" class="btn btn-custom" type="button" id="create" title="Create a Post"><img src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/plus-lg.svg');?>"></a> 
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($posts as $post) : ?>
        <div class="container pt-3 border bg-white border-none mt-5">

            <div class="d-flex flex-wrap">
                <?php if($user['profile_picture']!='noimage.jpg'):?>
                <img src="<?php echo base_url('images/profile_picture/' . $user['profile_picture']); ?>" width= "60" height="60" class="rounded rounded-circle"></p>
                <?php else:?>
                <img src="<?php echo base_url('assets/avatar.jpg');?>" width= "60" height="60" class="rounded rounded-circle">
                <?php endif; ?>

                <div class="ps-2 row">
                    <dt id="username"> <?php echo $post['name'];?></dt> 
                    <dd class="text-muted" id="date"><small> <?php echo $post['date'];?></small></dd>
                </div>
            </div>

            <div class="d-flex">
                <div class="row">
                    <a id="title" href="<?php echo site_url('/posts/'. $post['id']);?>" class="link-secondary">
                    <h3 class="display pt-2"><?php echo $post['title'];?></h3></a>
                    <div class="d-inline-flex">
                        <dd class="ms-2 rounded rounded-3 px-2" id="tags"><?php echo $post['at'];?></dd>
                    </div>
                </div>
            </div>
            <p class="lead d-inline-block text-truncate" id="description" style="max-width:700px;"><?php echo $post['content'];?></p>

            <div class="d-flex">

                <div class="p-2">
                    <span class="px-2 py-1 rounded border border-2"><?php echo $post['reply_count'];?></span>Replies
                </div>

                <div class="p-2">
                    <img class="display py-2 ms-2 me-1" src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-up-circle.svg');?>" id="arrowup"><?php echo $post['upvote'];?>
                </div>

                <div class="p-2">
                    <img class="display py-2 me-1" src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/arrow-down-circle.svg');?>" id="arrowdown"><?php echo $post['downvote'];?>
                </div>

                <div class="p-2"></div>

            </div>

        </div>
        
    <?php endforeach;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
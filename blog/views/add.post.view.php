<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ms-auto">
       <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
       </li>
       <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
       </li>    
    </ul>
</nav>

<div class="jumbotron text-center" style="padding: 85px; background-color: silver;">
    <h4>Add new post</h4>
</div>

<div class="container" style="margin-top: 35px; ">
    <div class="row">
        <div class="col-8 offset-2">
            <form action="add_post.php" method="POST">
                <input type="text" name="post_title" placeholder="title" class="form-control"><br>
                <textarea name="post_description" class="form-control" placeholder="description" cols="30" rows="10"></textarea><br>
                <button type="submit" name="post_sub_btn" class="form-control btn btn-primary">
                    Add
                </button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php'; ?>
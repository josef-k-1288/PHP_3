<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to blog</a>
        </li>
    </ul>
</nav>
<div class="jumbotron text-center" style="padding: 85px; background-color: silver;">
    <h4>Login/Register</h4>
</div>
<div class="container m-5">
    <div class="row m-5">
        <div class="col-6">
            <h4 class="mb-5">Login</h4>
            <form action="login_register.php" method="POST">
                <input type="text" name="login_email" placeholder="email" class="form-control" required><br>
                <input type="text" name="login_password" placeholder="password" class="form-control" required><br><br>
                <button class="form-control btn btn-primary" name="loginBtn">Login</button>
            </form>
            <?php if($user->loggedUser): ?> <!-- ako je od samog usera njegov properti loggedUser -->
                <div class="alert alert-success">Uspesno logovanje <a href="index.php">Odi na gblo</a></div>
            <?php elseif(isset($_POST['loginBtn'])): ?>
                <div class="alert alert-danger">Username i password pogresni</div>
            <?php endif; ?>    


        </div>
        <div class="col-6">
        <h4>Register</h4>
            <form action="login_register.php" method="POST">
                <input type="text" name="register_name" placeholder="name" class="form-control" required><br>
                <input type="text" name="register_email" placeholder="email" class="form-control" required><br>
                <input type="text" name="register_password" placeholder="password" class="form-control" required><br>
                <button class="form-control btn btn-warning" name="registerBtn">Register</button>
            </form>
            <?php if($user->register_result): ?>
                    <div class="alert alert-success">Uspesna registracija! Ulogujte se</div>
            <?php endif; ?>

        </div>
    </div>
</div>
<?php require_once 'partials/bottom.php'; ?>
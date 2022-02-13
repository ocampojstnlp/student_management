<?php $this->view('includes/header') ?>

<div class="container-fluid has-form <?= explode('.', basename(__FILE__, '.php'))[0]; ?>">
    <div class="mt-5 p-3 mx-auto shadow-lg rounded" style="width: 100%;max-width: 390px;">
        <h2 class="text-center">Your School</h2>
        <div class="col-12 my-5  text-center text-5">
            <span class="container-iterate border border-primary">
                <i class="fa fa-user"></i>
            </span>
        </div>
        <div class="form-group">
            <h2>Login</h2>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control" autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Secret password" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Sign in</button>
        </div>
    </div>
</div>

<?php $this->view('includes/footer') ?>
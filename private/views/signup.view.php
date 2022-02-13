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
            <h2>Add user</h2>
        </div>
        <div class="form-group">
            <input type="text" name="firstname" placeholder="First Name" class="form-control" autofocus>
        </div>
        <div class="form-group">
            <input type="text" name="lastname" placeholder="Last Name" class="form-control" autofocus>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control" autofocus>
        </div>
        <div class="form-group">
            <select name="" class="form-control" id="">
                <option value="">--Select a gender--</option>
                <option value="">Male</option>
                <option value="">Female</option>
            </select>
        </div>
        <div class="form-group">
            <select name="" class="form-control" id="">
                <option value="">--Select a rank--</option>
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="lecturer">Lecturer</option>
                <option value="admin">Admin</option>
                <option value="super_admin">Super admin</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="password" placeholder="Secret password" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="password2" placeholder="Re-type secret password" class="form-control">
        </div>
        <div class="form-group d-flex justify-content-between">
            <button class="btn btn-primary float-end" type="submit">Add user</button>
            <button class="btn btn-danger float-start text-white">Cancel</button>
        </div>
    </div>
</div> 

<?php $this->view('includes/footer') ?>
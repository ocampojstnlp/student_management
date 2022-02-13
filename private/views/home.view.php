<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>


<div class="container-fluid <?= explode('.', basename(__FILE__, '.php'))[0]; ?>">
    <h1>This is the home</h1>
</div>

<?php $this->view('includes/footer')?>

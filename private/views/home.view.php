<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>

<pre>
<div class="container-fluid <?= explode('.', basename(__FILE__, '.php'))[0]; ?>">
    <?php print_r($rows)?>
</div>

<?php $this->view('includes/footer')?>

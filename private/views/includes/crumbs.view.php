<!-- 
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
  <?php print_r(explode('/', filter_var(trim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL)));?>
</nav> -->




<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <?php
    $listOfcrumbs = explode('/', filter_var(trim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
    foreach($listOfcrumbs as $key => $value):?>
        <li class="breadcrumb-item <?php echo (count($listOfcrumbs) - 1) === $key ? 'active"  aria-current="page"' : '"';?> ><a href="#"><?= $value; ?></a></li>
    <?php endforeach;?>
  </ol>
</nav>



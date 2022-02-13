<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white" href="../public">My School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white" href="<?= ROOT ?>">DASHBOARD</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?= ROOT ?>users">USERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?= ROOT ?>classes">CLASSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?= ROOT ?>tests">TESTS</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USER
        </a>
        <div class="dropdown-menu text-white" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= ROOT ?>profile">Profile</a>
          <a class="dropdown-item" href="<?= ROOT ?>">Dashboard</a>
          <a class="dropdown-item" href="<?= ROOT ?>logout">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
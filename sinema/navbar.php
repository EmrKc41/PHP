<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Siverek Sinemaları</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Ana Sayfa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_movie.php">Film Ekle</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <li class="nav-item">
          <span class="navbar-text">Hoşgeldiniz, <?= htmlspecialchars($_SESSION['username']); ?></span>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Giriş Yap</a>
        </li>
      <?php endif; ?>
    </ul>
    <ul class="navbar-nav ml-auto">
  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    <li class="nav-item">
      <span class="navbar-text">Hoşgeldiniz, <?= htmlspecialchars($_SESSION['username']); ?></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Çıkış Yap</a>
    </li>
  <?php else: ?>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Giriş Yap</a>
    </li>
  <?php endif; ?>
</ul>
  </div>
</nav>

<?php
include 'db.php';
include 'header.php';
include 'navbar.php';

$stmt = $pdo->query("SELECT * FROM movies");
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <div id="headerCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($movies as $index => $movie): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <div class="card">
                        <img src="images/<?= $movie['id'] ?>.jpg" class="card-img-top" alt="<?= htmlspecialchars($movie['title']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($movie['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($movie['description']) ?></p>
                            <a href="movie.php?id=<?= $movie['id'] ?>" class="btn btn-primary">Tanıtımı İzle</a>
                            

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#headerCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Önceki</span>
        </a>
        <a class="carousel-control-next" href="#headerCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Sonraki</span>
        </a>
    </div>
    
    <div class="mt-5">
        <h1 class="text-center">Film Listesi</h1>
        <div class="row">
            <?php foreach ($movies as $movie): ?>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img src="images/<?= $movie['id'] ?>.jpg" class="card-img-top" alt="<?= htmlspecialchars($movie['title']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($movie['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($movie['description']) ?></p>
                            <a href="movie.php?id=<?= $movie['id'] ?>" class="btn btn-primary">Tanıtımı İzle</a>
                            <a href="update_movie.php?id=<?= $movie['id'] ?>" class="btn btn-warning">Güncelle</a>
                            <a href="delete_movie.php?id=<?= $movie['id'] ?>" class="btn btn-danger">Sil</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

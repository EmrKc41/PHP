<?php
include 'db.php';
include 'header.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM movies WHERE id = ?");
$stmt->execute([$id]);
$movie = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$movie) {
    echo "<div class='container mt-5'><h1>Film bulunamadı</h1></div>";
    exit;
}
?>

<div class="container mt-5">
    <h1 class="text-center"><?= htmlspecialchars($movie['title']) ?></h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <img src="images/<?= $movie['id'] ?>.jpg" class="card-img-top" alt="<?= htmlspecialchars($movie['title']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($movie['title']) ?></h5>
                    <p class="card-text"><strong>Yönetmen:</strong> <?= htmlspecialchars($movie['director']) ?></p>
                    <p class="card-text"><strong>Yıl:</strong> <?= htmlspecialchars($movie['year']) ?></p>
                    <p class="card-text"><?= htmlspecialchars($movie['description']) ?></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trailerModal">Tanıtımı İzle</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="trailerModal" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trailerModalLabel"><?= htmlspecialchars($movie['title']) ?> - Tanıtım</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="400" src="<?= htmlspecialchars($movie['trailer']) ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>

<h1>Film Ekle</h1>
<form action="add_movie.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Film Başlığı:</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="director">Yönetmen:</label>
        <input type="text" class="form-control" id="director" name="director" required>
    </div>
    <div class="form-group">
        <label for="year">Yıl:</label>
        <input type="number" class="form-control" id="year" name="year" required>
    </div>
    <div class="form-group">
        <label for="description">Açıklama:</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Film Afişi:</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
        <label for="trailer">Fragman Linki (YouTube Embed URL'si, örnek: https://www.youtube.com/embed/VIDEO_ID):</label>
        <input type="text" class="form-control" id="trailer" name="trailer" required>
    </div>
    <button type="submit" class="btn btn-primary">Ekle</button>
</form>

<?php include 'footer.php'; ?>

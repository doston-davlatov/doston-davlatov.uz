<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Doston Davlatov</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="projects py-5">
        <div class="container">
            <h2 class="text-center mb-4">Portfolio</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/project1.jpg" class="card-img-top" alt="Loyiha 1">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Sayt</h5>
                            <p class="card-text">Laravel va Vue.js yordamida yaratilgan onlayn do'kon.</p>
                            <p><strong>Texnologiyalar:</strong> PHP, Laravel, Vue.js, MySQL</p>
                            <a href="https://github.com/doston/project1" class="btn btn-primary">GitHub</a>
                            <a href="https://demo.project1.uz" class="btn btn-outline-primary">Demo</a>
                        </div>
                    </div>
                </div>
                <!-- Boshqa loyihalar shu tarzda qo'shiladi -->
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/d

ist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bog'lanish - Doston Davlatov</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="contact py-5">
        <div class="container">
            <h2 class="text-center mb-4">Bog'lanish</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="backend/form-handler.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ism</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Xabar</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Yuborish</button>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                <p><strong>Email:</strong> doston@example.com</p>
                <p><strong>Telegram:</strong> <a href="https://t.me/doston">t.me/doston</a></p>
                <p><strong>GitHub:</strong> <a href="https://github.com/doston">github.com/doston</a></p>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
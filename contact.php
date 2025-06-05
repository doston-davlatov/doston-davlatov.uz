<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bog'lanish - Doston Davlatov</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
        .contact-section {
            background: #f8f9fa;
            padding: 60px 0;
        }
        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        .contact-form input, .contact-form textarea {
            border-radius: 10px;
            box-shadow: none;
        }
        .contact-form button {
            border-radius: 999px;
            padding: 10px 30px;
        }
        .contact-info p a {
            color: #007bff;
            text-decoration: none;
        }
        .contact-info p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="contact-section">
        <div class="container">
            <h2 class="text-center mb-5">📫 Menga Bog'laning</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <form action="backend/form-handler.php" method="POST" class="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ismingiz</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ismingizni kiriting" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email manzilingiz</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Xabaringiz</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Xabaringizni bu yerga yozing..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary shadow-sm">Yuborish</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-5 contact-info">
                <h5>Yana qanday bog'lansam bo'ladi?</h5>
                <p><strong>Email:</strong> <a href="dostondavlatov347@gmail.com">dostondavlatov347@gmail.com</a></p>
                <p><strong>Telegram:</strong> <a href="http://t.me/doston_l1ghtdream22_55">@doston_l1ghtdream22_55</a></p>
                <p><strong>GitHub:</strong> <a href="https://github.com/doston-davlatov">github.com/doston-davlatov</a></p>
                <p><strong>Phone:</strong> <a href="tel:+998913387075">+998 91 338 70 75</a></p>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/footer.js"></script></body>
</html>

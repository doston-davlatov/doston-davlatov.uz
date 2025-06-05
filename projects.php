<?php
include 'config.php';

$db = new Database();
$projects = $db->select('projects');
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Doston Davlatov</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* General Section Styling */
        .projects {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        /* Heading Styling */
        .projects h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px;
        }

        .projects h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #007bff, #00d4ff);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #222;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .card-body p strong {
            color: #333;
            font-weight: 600;
        }

        /* Button Styling */
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(90deg, #007bff, #00d4ff);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #0096c7);
            transform: translateY(-2px);
        }

        .btn-outline-primary {
            border-color: #007bff;
            color: #007bff;
        }

        .btn-outline-primary:hover {
            background: #007bff;
            color: #fff;
            transform: translateY(-2px);
        }

        /* No Projects Message */
        .text-center {
            font-size: 1.1rem;
            color: #777;
            font-style: italic;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .projects h2 {
                font-size: 2rem;
            }
            .card-img-top {
                height: 150px;
            }
            .card-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="projects py-5">
        <div class="container">
            <h2 class="text-center mb-4">Portfolio</h2>
            <div class="row">
                <?php if (!empty($projects)): ?>
                    <?php foreach ($projects as $project): ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="<?= htmlspecialchars($project['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($project['title']) ?>">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?= htmlspecialchars($project['title']) ?></h5>
                                    <p class="card-text"><?= htmlspecialchars($project['description']) ?></p>
                                    <p><strong>Texnologiyalar:</strong> <?= htmlspecialchars($project['technologies']) ?></p>
                                    <div class="mt-auto">
                                        <a href="<?= htmlspecialchars($project['github']) ?>" class="btn btn-primary" target="_blank">Link</a>
                                        <?php if (!empty($project['demo']) && $project['demo'] !== "#"): ?>
                                            <a href="<?= htmlspecialchars($project['demo']) ?>" class="btn btn-outline-primary" target="_blank">Demo</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">Hozircha loyiha mavjud emas.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/footer.js"></script>
</body>
</html>
<?php
include './includes/header.php';
include './config.php';

$db = new Database();
$projects = $db->select('projects');
?>
<section class="projects py-5">
    <div class="container">
        <h2 class="text-center mb-4">Portfolio</h2>
        <div class="row">
            <?php if (!empty($projects)): ?>
                <?php foreach ($projects as $project): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="https://admin.doston-davlatov.uz/src/images/<?= htmlspecialchars($project['image']) ?>"
                                class="card-img-top" alt="<?= htmlspecialchars($project['image']) ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= htmlspecialchars($project['title']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($project['description']) ?></p>
                                <p><strong>Texnologiyalar:</strong> <?= htmlspecialchars($project['technologies']) ?></p>
                                <div class="mt-auto">
                                    <a href="<?= htmlspecialchars($project['link']) ?>" class="btn btn-primary"
                                        target="_blank">Link</a>
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
<?php include './includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/footer.js"></script>
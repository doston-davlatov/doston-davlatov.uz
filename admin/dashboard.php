<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Admin Panel</h2>
        <a href="backend/logout.php" class="btn btn-danger mb-3">Chiqish</a>
        <div class="row">
            <div class="col-md-6">
                <h4>Loyihalar boshqaruvi</h4>
                <!-- Loyiha qo'shish/taxrirlash formasi -->
                <form action="backend/project-handler.php" method="POST">
                    <div class="mb-3">
                        <label for="project_name" class="form-label">Loyiha nomi</label>
                        <input type="text" class="form-control" id="project_name" name="project_name">
                    </div>
                    <button type="submit" class="btn btn-primary">Qo'shish</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Blog boshqaruvi</h4>
                <!-- Blog qo'shish/taxrirlash formasi -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
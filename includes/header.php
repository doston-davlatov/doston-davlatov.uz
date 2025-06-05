<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Doston Davlatov</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/" id="home-link">Bosh sahifa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" id="about-link">Men haqimda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php" id="projects-link">Portfolio</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="blog.php" id="blog-link">Blog</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" id="contact-link">Bog'lanish</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #007bff;
        }
        .nav-link {
            font-size: 1rem;
            color: #555;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .nav-link.active {
            color: #007bff;
            font-weight: bold;
            border-bottom: 2px solid #007bff;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname.split('/').pop() || 'index.html';
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                const linkPath = href.split('/').pop();

                if (linkPath === currentPath || (currentPath === 'index.html' && href === '/')) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</header>
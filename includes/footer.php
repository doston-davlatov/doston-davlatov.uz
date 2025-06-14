<div class="footer-wrapper" id="footer-wrapper">
    <canvas id="matrix-canvas"></canvas>
    <footer class="text-white text-center py-4" id="footer-content">
        <div class="container">
            <p class="mb-2" id="copyright-text">© 2025 Doston Davlatov. Barcha huquqlar himoyalangan.</p>
            <div class="social-buttons" id="social-buttons">
                <a id="telegram-link" href="http://t.me/doston_l1ghtdream22_55"><i class="fab fa-telegram"></i>
                    Telegram</a>
                <a id="github-link" href="https://github.com/doston-davlatov"><i class="fab fa-github"></i> GitHub</a>
                <a id="instagram-link" href="https://www.instagram.com/doston_l1ghdream"><i
                        class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
    </footer>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    #footer-wrapper {
        position: relative;
        overflow-x: hidden;
        width: 100%;
        max-width: 100vw;
        background: #1a1a1a;
    }

    #matrix-canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
    }

    #footer-content {
        position: relative;
        z-index: 1;
        padding: 20px 0;
        padding-bottom: 5px;
        min-height: 150px;
        background-color: transparent;
    }

    #copyright-text {
        font-size: 1.1rem;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 0 5px rgba(0, 255, 153, 0.5);
        word-wrap: break-word;
    }

    #social-buttons a {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        border: 2px solid #555;
        border-radius: 999px;
        margin: 5px;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    #social-buttons a:hover {
        border-color: #00ff99;
        background-color: rgba(0, 255, 153, 0.3);
        color: #f8faf9;
        box-shadow: 0 0 10px rgba(0, 255, 153, 0.5);
        text-decoration: none;
    }

    #social-buttons i {
        font-size: 16px;
        color: #fff;
    }

    @media (max-width: 576px) {
        #social-buttons a {
            display: block;
            width: 90%;
            margin: 5px auto;
            text-align: center;
            font-size: 0.9rem;
            padding: 8px 15px;
        }

        #footer-content {
            padding: 15px 0;
        }

        #copyright-text {
            font-size: 1rem;
        }

        .container {
            padding-left: 10px;
            padding-right: 10px;
        }
    }

    @media (max-width: 400px) {
        #social-buttons a {
            font-size: 0.85rem;
            padding: 6px 12px;
        }

        #copyright-text {
            font-size: 0.9rem;
        }
    }
</style>
<script>
    try {
        const canvas = document.getElementById("matrix-canvas");
        if (!canvas) {
            console.error("Canvas element with ID 'matrix-canvas' not found.");
            return;
        }
        const ctx = canvas.getContext("2d");
        if (!ctx) {
            console.error("Failed to get 2D context for canvas.");
            return;
        }

        const icons = [
            "\uf121", // fa-code
            "\uf120", // fa-terminal
            "\uf109", // fa-laptop
            "\uf188", // fa-bug
            "\uf085", // fa-cogs
            "\uf233", // fa-server
            "\uf1c0", // fa-database
            "\uf135"  // fa-rocket
        ];
        const fallbackLetters = "01";

        let fontSize = 24;
        let columns = Math.floor(canvas.width / fontSize);
        let drops = Array(columns).fill(1);

        function resizeCanvas() {
            canvas.width = canvas.parentElement.offsetWidth;
            canvas.height = canvas.parentElement.offsetHeight;
            columns = Math.floor(canvas.width / fontSize);
            drops = Array(columns).fill(1);
            console.log("Canvas resized: width=", canvas.width, "height=", canvas.height);
        }

        resizeCanvas();
        window.addEventListener("load", resizeCanvas);
        window.addEventListener("resize", resizeCanvas);

        const isFontAwesomeLoaded = document.fonts && document.fonts.check("16px 'Font Awesome 6 Free'");
        console.log("Font Awesome loaded:", isFontAwesomeLoaded);

        function draw() {
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            ctx.fillStyle = "#00ff99";
            ctx.font = isFontAwesomeLoaded ? `${fontSize}px 'Font Awesome 6 Free'` : `${fontSize}px monospace`;

            for (let i = 0; i < drops.length; i++) {
                const text = isFontAwesomeLoaded
                    ? String.fromCodePoint(parseInt(icons[Math.floor(Math.random() * icons.length)].substring(2), 16))
                    : fallbackLetters[Math.floor(Math.random() * fallbackLetters.length)];
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);

                if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }

        setInterval(draw, 50);
        console.log("Matrix animation started.");

        window.addEventListener("resize", () => {
            columns = Math.floor(canvas.width / fontSize);
            drops = Array(columns).fill(1);
        });

    } catch (error) {
        console.error("Error in Matrix animation script:", error);
    }
</script>

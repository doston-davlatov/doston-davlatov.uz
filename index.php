<?php include './includes/header.php'; ?>
<section class="hero py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container">
        <h1 class="text-center mb-4" style="font-size: 3rem; font-weight: 700; color: #2c3e50; text-shadow: 1px 1px 3px rgba(0,0,0,0.1);">
            <i class="fas fa-code me-2"></i>Salom, men Doston Davlatov
        </h1>
        <h3 class="text-center mb-5" style="font-size: 1.5rem; font-weight: 500; color: #34495e;">
            <i class="fas fa-laptop-code me-2"></i>Full-stack Dasturchi | <i class="fas fa-globe me-2"></i>Web Developer | <i class="fas fa-brain me-2"></i>AI Enthusiast
        </h3>
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <p style="font-size: 1.1rem; color: #4a5568; line-height: 1.8; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    Bu mening shaxsiy portfolio sahifam. Bu yerda siz mening loyihalarim, texnik ko‘nikmalarim, va
                    dasturlashga bo‘lgan ishtiyoqim haqida batafsil tanishishingiz mumkin.
                </p>
                <p style="font-size: 1.1rem; color: #4a5568; line-height: 1.8; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    Men <strong>JavaScript</strong>, <strong>Python</strong>, <strong>PHP</strong>, <strong>C++</strong> kabi dasturlash tillarida ishlayman va zamonaviy veb-texnologiyalar bilan
                    shug‘ullanaman. Asosiy e’tiborim foydalanuvchi interfeysi (UI) va foydalanuvchi tajribasini (UX)
                    yaxshilashga qaratilgan.
                    Portfolio sahifam orqali siz yaratganim veb-saytlar, interaktiv o‘yinlar,
                    animatsiyali sahifalar hamda boshqa dasturiy ishlanmalarim bilan tanishishingiz mumkin. Har bir loyiha
                    ustida puxta o‘ylab, zamonaviy dizayn va funksionallikni uyg‘unlashtirishga harakat qilaman.
                    Bundan tashqari, men doimiy ravishda yangi bilimlarni o‘zlashtirish, texnologiyalarni sinab ko‘rish va
                    o‘z bilimlarimni boshqalar bilan bo‘lishishni yoqtiraman.
                </p>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="projects.php" class="btn btn-primary me-3" style="padding: 12px 30px; font-size: 1.1rem; font-weight: 500; border-radius: 50px; background: linear-gradient(90deg, #007bff, #00d4ff); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <i class="fas fa-folder-open me-2"></i>Portfolio
            </a>
            <a href="contact.php" class="btn btn-outline-primary" style="padding: 12px 30px; font-size: 1.1rem; font-weight: 500; border-radius: 50px; border: 2px solid #007bff; color: #007bff; transition: transform 0.3s ease, background 0.3s ease;">
                <i class="fas fa-envelope me-2"></i>Bog'lanish
            </a>
        </div>
    </div>
    <style>
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero p {
            transition: transform 0.3s ease;
        }
        .hero p:hover {
            transform: translateY(-5px);
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #0056b3, #0096c7);
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .btn-outline-primary:hover {
            background: #007bff;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            .hero h3 {
                font-size: 1.2rem;
            }
            .hero p {
                font-size: 1rem;
                padding: 15px;
            }
            .btn {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
    </style>
</section>
<?php include './includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
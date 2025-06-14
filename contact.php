<?php include './includes/header.php'; ?>
<section class="contact py-5">
    <div class="container">
        <h2 class="text-center mb-4">📫 Menga Bog'laning</h2>
        <div class="row">
            <div class="col-md-6">
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ismingiz</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email manzilingiz</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Xabaringiz</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Yuborish</button>
                </form>

                <!-- SweetAlert2 script -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script>
                    document.getElementById('contactForm').addEventListener('submit', function (e) {
                        e.preventDefault();

                        const formData = new FormData(this);

                        fetch('contact_process.php', {
                            method: 'POST',
                            body: formData
                        })
                            .then(res => res.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    successAlert(data.message);
                                } else {
                                    errorAlert(data.message);
                                }
                                setTimeout(() => window.location.href = 'contact.php', 3000);
                            })
                            .catch(() => {
                                errorAlert('Tarmoqqa ulanishda xatolik yuz berdi.');
                                setTimeout(() => window.location.href = 'contact.php', 3000);
                            });
                    });

                    function successAlert(msg) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Bajarildi!',
                            text: msg,
                            timer: 3000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }

                    function errorAlert(msg) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Xatolik!',
                            text: msg,
                            timer: 3000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                </script>

            </div>
            <div>
                <hr style="color:blue; border: 3px;">
            </div>
            <div class="col-md-6">
                <h4>Yana qanday bog'lansam bo'ladi?</h4>
                <p><strong>Email:</strong> <a href="mailto:dostondavlatov347@gmail.com"
                        target="_blank">dostondavlatov347@gmail.com</a></p>
                <p><strong>Telegram:</strong><a href="https://t.me/doston_l1ghtdream22_55"
                        target="_blank">@doston_l1ghtdream22_55</a></p>
                <p><strong>GitHub:</strong> <a href="https://github.com/doston-davlatov"
                        target="_blank">github.com/doston-davlatov</a></p>
                <p><strong>Phone:</strong> +998 91 338 70 75</p>
            </div>
        </div>
    </div>
</section>
<?php include './includes/footer.php'; ?>
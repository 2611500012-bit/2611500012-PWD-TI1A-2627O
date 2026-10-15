// Interaksi Hamburger Menu
const menuToggle = document.querySelector('.menu-toggle');
const navList = document.querySelector('nav ul');

if (menuToggle && navList) {
    menuToggle.addEventListener('click', function () {
        navList.classList.toggle('active');
    });
}

// Validasi Formulir
const form = document.querySelector('form');

if (form) {
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const namaInput = document.querySelector('#nama');
        const emailInput = document.querySelector('#email');
        const pesanInput = document.querySelector('#pesan');

        if (namaInput.value.trim() === '' || emailInput.value.trim() === '' || pesanInput.value.trim() === '') {
            alert('Gagal! Harap isi semua bidang formulir.');
            return;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value)) {
            alert('Gagal! Format email tidak valid.');
            return;
        }

        alert('Berhasil! Data formulir valid.');
        form.reset();
    });
}
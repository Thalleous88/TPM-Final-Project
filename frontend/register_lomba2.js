let currentStep = 1; // Step awal adalah 1

// Validasi input (contoh sederhana)
function validateForm() {
    // Lakukan validasi input sesuai kebutuhan
    return true; // Untuk demo, selalu valid
}

// Event listener untuk tombol Next dan Back
const nextButton = document.querySelector(".next-button button");
const backButton = document.querySelector(".back-button button");

nextButton.addEventListener("click", (e) => {
    e.preventDefault();
    if (validateForm() && currentStep < 4) { // Maksimum step adalah 4
        currentStep++; // Tambahkan step
        updateStep(); // Perbarui sidebar
    }
});

backButton.addEventListener("click", (e) => {
    e.preventDefault();
    if (currentStep > 1) { // Minimum step adalah 1
        currentStep--; // Kurangi step
        updateStep(); // Perbarui sidebar
    }
});

// Inisialisasi tampilan awal
updateStep();


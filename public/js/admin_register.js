document.addEventListener("DOMContentLoaded", function () {
    const groupNameInput = document.getElementById("group-name");
    const passwordInput = document.getElementById("password");
    const registerButton = document.querySelector(".register-button button");
    const togglePasswordButton = document.getElementById("toggle-password");

    // validasi input
    function validateInputs() {
        const groupName = groupNameInput.value.trim();
        const password = passwordInput.value.trim();

        if (!groupName) {
            showToast("Group Name cannot be empty");
            return false;
        }
        if (!password) {
            showToast("Password cannot be empty");
            return false;
        }
        return true;
    }

    // event listener pada tombol register
    registerButton.addEventListener("click", function (event) {
        if (!validateInputs()) {
            event.preventDefault();
        }
    });

    // fitur show/hide password
    togglePasswordButton.addEventListener("click", function () {
        const isPasswordVisible = passwordInput.type === "text";
        passwordInput.type = isPasswordVisible ? "password" : "text";

        togglePasswordButton.innerHTML = isPasswordVisible
            ? '<i class="fas fa-eye"></i>'
            : '<i class="fas fa-eye-slash"></i>';
    });
});

function showToast(message) {
    const toastContainer = document.getElementById("toast-container");
  
    // Membuat elemen toast
    const toast = document.createElement("div");
    toast.className = "toast";
  
    // Tambahkan icon dan pesan ke toast
    toast.innerHTML = `
        <span class="icon">❗</span>
        <span>${message}</span>
    `;
  
    toastContainer.appendChild(toast);
  
    setTimeout(() => {
        toast.remove();
    }, 3500); 
  }
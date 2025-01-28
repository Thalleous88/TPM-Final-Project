document.addEventListener("DOMContentLoaded", function () {
    const groupNameInput = document.getElementById("group-name");
    const passwordInput = document.getElementById("password");
    const loginButton = document.querySelector(".login-button button");
    const togglePasswordButton = document.getElementById("toggle-password");

    // validasi input
    function validateInputs() {
        const groupName = groupNameInput.value.trim();
        const password = passwordInput.value.trim();

        if (!groupName) {
            alert("Please fill in the Group Name.");
            return false;
        }
        if (!password) {
            alert("Please fill in the Password.");
            return false;
        }
        return true;
    }

    // event listener pada tombol login
    loginButton.addEventListener("click", function (event) {
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

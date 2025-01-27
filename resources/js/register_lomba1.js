const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirm-password");
const togglePasswordButton = document.getElementById("toggle-password");
const toggleConfirmPasswordButton = document.getElementById(
    "toggle-confirm-password"
);
const lengthReq = document.getElementById("length");
const uppercaseReq = document.getElementById("uppercase");
const lowercaseReq = document.getElementById("lowercase");
const numberReq = document.getElementById("number");
const symbolReq = document.getElementById("symbol");
const nextButton = document.querySelector(".next-button button");
const binusianStatusInputs = document.getElementsByName("status"); 

// fitur show/hide password
function togglePasswordVisibility(input, button) {
    input.type = input.type === "text" ? "password" : "text";
    button.innerHTML =
        input.type === "password"
            ? '<i class="fas fa-eye"></i>'
            : '<i class="fas fa-eye-slash"></i>';
}

// requirements password
function validatePassword(password) {
    const hasLength = password.length >= 8;
    const hasUppercase = /[A-Z]/.test(password);
    const hasLowercase = /[a-z]/.test(password);
    const hasNumber = /\d/.test(password);
    const hasSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(password);

    updateRequirement(lengthReq, hasLength);
    updateRequirement(uppercaseReq, hasUppercase);
    updateRequirement(lowercaseReq, hasLowercase);
    updateRequirement(numberReq, hasNumber);
    updateRequirement(symbolReq, hasSymbol);

    return hasLength && hasUppercase && hasLowercase && hasNumber && hasSymbol;
}

// update status requirements password
function updateRequirement(element, isValid) {
    element.classList.toggle("valid", isValid);
    element.classList.toggle("invalid", !isValid);
}

// validasi input
function validateForm() {
    // group name
    const groupNameInput = document.getElementById("group-name");
    if (!groupNameInput.value.trim()) {
        errors.push("Group Name is required.");
    }

    // status
    const isStatusSelected = Array.from(binusianStatusInputs).some(
        (input) => input.checked
    );
    if (!isStatusSelected) {
        errors.push("Status is required.");
    }

    // password
    if (!passwordInput.value.trim()) {
        errors.push("Password is required.");
    } else if (!validatePassword(passwordInput.value)) {
        errors.push("Password does not meet the requirements.");
    }

    // confirm password
    if (!confirmPasswordInput.value.trim()) {
        errors.push("Confirm Password is required.");
    } else if (passwordInput.value !== confirmPasswordInput.value) {
        errors.push("Passwords do not match.");
    }

    return true;
}

// event listener toggle password
togglePasswordButton.addEventListener("click", () => {
    togglePasswordVisibility(passwordInput, togglePasswordButton);
});

toggleConfirmPasswordButton.addEventListener("click", () => {
    togglePasswordVisibility(confirmPasswordInput, toggleConfirmPasswordButton);
});

// event listener validasi password 
passwordInput.addEventListener("input", () => {
    validatePassword(passwordInput.value);
});

// event listener tombol next
nextButton.addEventListener("click", (e) => {
    e.preventDefault(); 
    if (validateForm()) {
        window.location.href = "register_lomba2.html";
    }
});

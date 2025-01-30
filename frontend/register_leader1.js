const form = document.getElementById("registration-form");
const nextButton = document.querySelector(".next-button button");
const backButton = document.querySelector(".back-button button");

function validateForm() {
    const errors = [];

    const fullName = document.getElementById("full-name");
    if(!fullName.value.trim()) {
        showToast("Full Name cannot be empty");
        errors.push("Full Name is required");
    }

    const github = document.getElementById("github-id");
    if(!github.value.trim()) {
        showToast("GitHub/GitLab ID cannot be empty");
        errors.push("GitHub/GitLab ID is required");
    }

    const email = document.getElementById("email");
    if(!email.value.trim()) {
        showToast("Email cannot be empty");
        errors.push("Email is required");
    }

    const birthPlace = document.getElementById("birth-place");
    if(!birthPlace.value.trim()) {
        showToast("Birth Place cannot be empty");
        errors.push("Birth Place is required");
    }

    const whatsappNum = document.getElementById("whatsapp");
    if(!whatsappNum.value.trim()) {
        showToast("WhatsApp Number cannot be empty");
        errors.push("WhatsApp Number is required");
    }

    const birthDate = document.getElementById("birth-date");
    if(!birthDate.value.trim()) {
        showToast("Birth Date cannot be empty");
        errors.push("Birth Date is required");
    }

    const lineId = document.getElementById("line-id");
    if(!lineId.value.trim()) {
        showToast("LINE ID cannot be empty");
        errors.push("LINE ID is required");
    }

    return errors.length === 0;
}

nextButton.addEventListener("click", (e) => {
    e.preventDefault();
    if (validateForm()) {
        window.location.href = "register_member11.html";
    }
});

backButton.addEventListener("click", (e) => {
    e.preventDefault();
    window.location.href = "register_group.html";
});

function showToast(message) {
    const toastContainer = document.getElementById("toast-container");

    const toast = document.createElement("div");
    toast.className = "toast";
    
    toast.innerHTML = `
        <span class="icon">❗</span>
        <span>${message}</span>
    `;

    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.remove();
    }, 3500);
}

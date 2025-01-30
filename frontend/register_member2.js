function validateForm() {
    const fileCV = document.getElementById("fileCV").files;
    const fileBinusian = document.getElementById("fileBinusian").files;
    const fileNonBinusian = document.getElementById("fileNonBinusian").files;

    let valid = true;

    if (fileCV.length === 0) {
        showToast("Upload CV is required.");
        valid = false;
    }

    if (fileBinusian.length === 0 && fileNonBinusian.length === 0) {
        showToast("You must upload either a Binusian ID Card or a Non-Binusian ID Card.");
        valid = false;
    }

    return valid;
}

function showToast(message, success = false) {
    const toastContainer = document.getElementById("toast-container");
    if (!toastContainer) {
        console.error("Toast container not found!");
        return;
    }

    const toast = document.createElement("div");
    toast.className = `toast ${success ? "success" : "error"}`;
    toast.textContent = message;

    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.remove();
    }, 3500);
}
document.getElementById("register-button").addEventListener("click", (e) => {
    e.preventDefault(); 
    if (validateForm()) {
        window.location.href = "login.html";
    }
});

const backButton = document.getElementById("back-button");

backButton.addEventListener("click", (e) => {
    e.preventDefault();
    window.location.href = "register_member1.html";
});

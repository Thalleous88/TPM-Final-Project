document.addEventListener("DOMContentLoaded", function () {
    const cvModal = document.getElementById("cv-modal");
    const idCardModal = document.getElementById("idcard-modal");
    const cvViewer = document.getElementById("cv-viewer");
    const idCardViewer = document.getElementById("idcard-viewer");
    const cvDownload = document.getElementById("cv-download");
    const idCardDownload = document.getElementById("idcard-download");
    const closeCvButton = document.querySelector(".close-cv"); // Specific close button for CV
    const closeIdCardButton = document.querySelector(".close-idcard"); // Specific close button for ID card
    const groupNameInput = document.getElementById("group-name");
    const editIcon = document.getElementById("edit-group-name");
    const logoutModal = document.getElementById("logout-modal");
    const logoutBtn = document.getElementById("logout-btn");
    const cancelLogout = document.getElementById("cancel-logout");
    const confirmLogout = document.getElementById("confirm-logout");

    // log out
    if (logoutBtn) {
        logoutBtn.addEventListener("click", function () {
            logoutModal.style.display = "flex";
        });
    }
    cancelLogout.addEventListener("click", function () {
        logoutModal.style.display = "none";
    });

    

    // edit group name
    if (editIcon) {
        editIcon.addEventListener("click", function () {
            groupNameInput.removeAttribute("readonly");
            groupNameInput.focus();
            groupNameInput.style.cursor = "text";
            groupNameInput.style.backgroundColor = "#FFCBCB"; 
            groupNameInput.addEventListener("blur", function () {
                groupNameInput.setAttribute("readonly", true); 
                groupNameInput.style.backgroundColor = "";
            });
        });
    }
    // view cv
    document.querySelectorAll(".view-cv").forEach((button) => {
        button.addEventListener("click", function () {
            const cvUrl = this.getAttribute("data-cv");
            cvViewer.src = cvUrl;
            cvDownload.href = cvUrl;
            cvModal.style.display = "flex";
        });
    });
    // view id card
    document.querySelectorAll(".view-idcard").forEach((button) => {
        button.addEventListener("click", function () {
            const idCardUrl = this.getAttribute("data-idcard");
            idCardViewer.src = idCardUrl;
            idCardDownload.href = idCardUrl;
            idCardModal.style.display = "flex";
        });
    });
   // close modal (view cv)
    if (closeCvButton) {
        closeCvButton.addEventListener("click", function () {
            cvModal.style.display = "none";
        });
    }
    // close modal (view id card)
    if (closeIdCardButton) {
        closeIdCardButton.addEventListener("click", function () {
            idCardModal.style.display = "none";
        });
    }
    window.addEventListener("click", function (event) {
        if (event.target === cvModal) cvModal.style.display = "none";
        if (event.target === idCardModal) idCardModal.style.display = "none";
    });
});
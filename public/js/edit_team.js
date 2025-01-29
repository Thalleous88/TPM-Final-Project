import { groups as initialGroups } from "./data.js";

// Ambil data dari LocalStorage atau gunakan data awal dari `data.js`
let groups = JSON.parse(localStorage.getItem("groups")) || [...initialGroups];

const urlParams = new URLSearchParams(window.location.search);
const groupId = parseInt(urlParams.get("id"), 10);
let selectedGroup = groups.find(g => g.id == groupId);

const teamNameInput = document.getElementById("team-name");
const membersContainer = document.getElementById("members-container");
const backButton = document.getElementById("back-button");
const editForm = document.getElementById("edit-form");
const toastContainer = document.getElementById("toast-container");

if (!selectedGroup) {
    window.location.href = "admin_participant.html";
    throw new Error("Group not found");
}

// Isi form dengan data tim
teamNameInput.value = selectedGroup.name;

// Tampilkan daftar anggota
selectedGroup.members.forEach(member => addMemberField(member));

// Fungsi untuk menampilkan anggota di form
function addMemberField(memberData = {}) {
    const teamNameText = document.getElementById("team-name-text");
    teamNameText.textContent = selectedGroup.name;

    const memberCard = document.createElement("div");
    memberCard.className = "member-card";

    memberCard.innerHTML = `
    <div class="form-row">
            <div class="form-group">
                <label><i class="fas fa-user"></i> Full Name</label>
                <input type="text" class="input-full-name" value="${memberData.name || ''}">
            </div>
            <div class="form-group">
                <label><i class="fab fa-github"></i> GitHub/GitLab ID</label>
                <input type="text" class="input-github-id" value="${memberData.github || ''}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email</label>
                <input type="email" class="input-email" value="${memberData.email || ''}">
            </div>
            <div class="form-group">
                <label><i class="fas fa-map-marker-alt"></i> Birth Place</label>
                <input type="text" class="input-birth-place" value="${memberData.birthplace || ''}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label><i class="fas fa-phone"></i> WhatsApp Number</label>
                <input type="text" class="input-no-wa" value="${memberData.wa || ''}">
            </div>
            <div class="form-group">
                <label><i class="fas fa-calendar-alt"></i> Birth Date</label>
                <input type="date" class="input-date" value="${memberData.birthdate || ''}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label><i class="fab fa-line"></i> LINE ID</label>
                <input type="text" class="input-line-id" value="${memberData.line || ''}">
            </div>
        </div>
    `;
    membersContainer.appendChild(memberCard);
}

// Event listener untuk tombol "Back"
backButton.addEventListener("click", () => {
    window.location.href = "admin_participant.html";
});

// Event listener untuk tombol "Save"
editForm.addEventListener("submit", (e) => {
    e.preventDefault(); // Mencegah reload halaman

    if (selectedGroup) {
        selectedGroup.name = teamNameInput.value;

        selectedGroup.members = [...document.querySelectorAll(".member-card")].map(memberCard => ({
            name: memberCard.querySelector(".input-full-name").value,
            email: memberCard.querySelector(".input-email").value,
            wa: memberCard.querySelector(".input-no-wa").value,
            line: memberCard.querySelector(".input-line-id").value,
            github: memberCard.querySelector(".input-github-id").value,
            birthplace: memberCard.querySelector(".input-birth-place").value,
            birthdate: memberCard.querySelector(".input-date").value,
        }));

        localStorage.setItem("groups", JSON.stringify(groups));

        // Munculkan toast notification sebelum redirect
        showToast("Team details updated successfully!");

        setTimeout(() => {
            window.location.href = "admin_participant.html";
        }, 2000);
    }
});

// Fungsi untuk menampilkan toast notification
function showToast(message) {
    const toast = document.createElement("div");
    toast.className = "toast";
    toast.innerHTML = `<span class="icon"><i class="fas fa-check-circle"></i></span> ${message}`;

    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.remove();
    }, 3500); 
}

import { groups as initialGroups } from "./data.js";
let groups = [...initialGroups];

const groupContainer = document.getElementById("group-container");
const searchInput = document.getElementById("group-search");
const filterBtn = document.getElementById("filter-btn");
const sortNameIcon = document.getElementById("sort-name");
const sortTimeIcon = document.getElementById("sort-time");
const deleteModal = document.getElementById("delete-modal");
const cancelDelete = document.getElementById("cancel-delete");
const confirmDelete = document.getElementById("confirm-delete");

function renderGroups(groupData) {
    groupContainer.innerHTML = "";

    groupData.forEach((group) => {
        const card = document.createElement("div");
        card.className = "group-card";
        card.innerHTML = `
            <h3>${group.name}</h3>
            <button class="view" data-id="${group.id}">View Team Details</button>
            <button class="edit">Edit Team</button>
            <button class="delete" data-id="${group.id}">Delete Team</button>
        `;
        groupContainer.appendChild(card);
    });

    // event listener view details
    document.querySelectorAll(".view").forEach((button) => {
        button.addEventListener("click", (e) => {
            const groupId = e.target.getAttribute("data-id");
            console.log("Redirecting to group ID:", groupId);
            window.location.href = `view_details.html?id=${groupId}`;
        });
    });

    // event listener delete team
    document.querySelectorAll(".delete").forEach((button) => {
        button.addEventListener("click", (e) => {
            groupIdToDelete = parseInt(e.target.getAttribute("data-id"), 10);
            deleteModal.style.display = "flex";
        });
    });
}

// Fungsi untuk filter grup (searching)
function filterGroups(searchTerm) {
    const filteredGroups = groups.filter((group) =>
        group.name.toLowerCase().includes(searchTerm.toLowerCase())
    );
    renderGroups(filteredGroups);
}

// Event listener untuk tombol filter
filterBtn.addEventListener("click", () => {
    const searchTerm = searchInput.value.trim();
    filterGroups(searchTerm);
});

let currentSort = {
    by: null, // Nama atau waktu
    order: "asc", // Ascending atau descending
};

// Fungsi untuk sorting grup
function sortGroups(groups, criteria, order) {
    const sortedGroups = [...groups];

    sortedGroups.sort((a, b) => {
        if (criteria === "name") {
            return order === "asc"
                ? a.name.localeCompare(b.name)
                : b.name.localeCompare(a.name);
        } else if (criteria === "time") {
            return order === "asc"
                ? new Date(a.registrationTime) - new Date(b.registrationTime)
                : new Date(b.registrationTime) - new Date(a.registrationTime);
        }
    });

    return sortedGroups;
}

// Event listener untuk ikon sort name
sortNameIcon.addEventListener("click", () => {
    currentSort.by = "name";
    currentSort.order = currentSort.order === "asc" ? "desc" : "asc"; // Toggle order
    const sortedData = sortGroups(groups, currentSort.by, currentSort.order);
    renderGroups(sortedData);
});

// Event listener untuk ikon sort time
sortTimeIcon.addEventListener("click", () => {
    currentSort.by = "time";
    currentSort.order = currentSort.order === "asc" ? "desc" : "asc"; // Toggle order
    const sortedData = sortGroups(groups, currentSort.by, currentSort.order);
    renderGroups(sortedData);
});

let groupIdToDelete = null;

// Event listener untuk tombol Tidak
cancelDelete.addEventListener("click", () => {
    deleteModal.style.display = "none"; // Sembunyikan modal
    groupIdToDelete = null; // Reset ID
});

// Event listener untuk tombol Ya
confirmDelete.addEventListener("click", () => {
    if (groupIdToDelete !== null) {
        groups = groups.filter((group) => group.id !== groupIdToDelete);
        renderGroups(groups);
    }
    deleteModal.style.display = "none";
    groupIdToDelete = null;
});

renderGroups(groups);

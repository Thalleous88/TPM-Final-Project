import { groups } from "./data.js";

const groupContainer = document.getElementById("group-container");
const searchInput = document.getElementById("group-search");
const filterBtn = document.getElementById("filter-btn");
const sortNameIcon = document.getElementById("sort-name");
const sortTimeIcon = document.getElementById("sort-time"); 

function renderGroups(groupData) {
    groupContainer.innerHTML = "";

    groupData.forEach((group) => {
        const card = document.createElement("div");
        card.className = "group-card";
        card.innerHTML = `
            <h3>${group.name}</h3>
            <button class="view" data-id="${group.id}">View Team Details</button>
            <button class="edit">Edit Team</button>
            <button class="delete">Delete Team</button>
        `;
        groupContainer.appendChild(card);
    });

    document.querySelectorAll(".view").forEach(button => {
        button.addEventListener("click", (e) => {
            const groupId = e.target.getAttribute("data-id");
            console.log("Redirecting to group ID:", groupId);
            window.location.href = `view_details.html?id=${groupId}`;
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

renderGroups(groups);

const groupContainer = document.getElementById("group-container");
const searchInput = document.getElementById("group-search");
const filterBtn = document.getElementById("filter-btn");
const sortNameIcon = document.getElementById("sort-name");
const sortTimeIcon = document.getElementById("sort-time");
const deleteModal = document.getElementById("delete-modal");
const cancelDelete = document.getElementById("cancel-delete");
const confirmDelete = document.getElementById("confirm-delete");

let groupIdToDelete = null; // Store the group ID to delete

function renderGroups(groupData) {
    groupContainer.innerHTML = "";

    groupData.forEach((group) => {
        const card = document.createElement("div");
        card.className = "group-card";
        card.innerHTML = `
            <h3>${group.group_name}</h3>
            <button class="view" data-id="${group.id}">View Team Details</button>
            <button class="edit" data-id="${group.id}">Edit Team</button>
            <button class="delete" data-id="${group.id}">Delete Team</button>
        `;
        groupContainer.appendChild(card);
    });

    // Add event listeners for buttons
    document.querySelectorAll(".view").forEach((button) => {
        button.addEventListener("click", (e) => {
            const groupId = e.target.getAttribute("data-id");
            window.location.href = `/admin/groups/${groupId}`;
        });
    });

    document.querySelectorAll(".edit").forEach((button) => {
        button.addEventListener("click", (e) => {
            const groupId = e.target.getAttribute("data-id");
            window.location.href = `/admin/edit/${groupId}`;
        });
    });

    document.querySelectorAll(".delete").forEach((button) => {
        button.addEventListener("click", (e) => {
            const groupId = e.target.getAttribute("data-id");
            deleteGroup(groupId);
        });
    });
}

// Search functionality
filterBtn.addEventListener("click", () => {
    const searchTerm = searchInput.value.trim();
    filterGroups(searchTerm);
});

function filterGroups(searchTerm) {
    const filteredGroups = groupsData.filter((group) =>
        group.group_name.toLowerCase().includes(searchTerm.toLowerCase())
    );
    renderGroups(filteredGroups);
}

// Sort functionality
let currentSort = { by: null, order: "asc" };

sortNameIcon.addEventListener("click", () => {
    currentSort.by = "name";
    currentSort.order = currentSort.order === "asc" ? "desc" : "asc";
    const sortedData = sortGroups(groupsData, currentSort.by, currentSort.order);
    renderGroups(sortedData);
});

sortTimeIcon.addEventListener("click", () => {
    currentSort.by = "time";
    currentSort.order = currentSort.order === "asc" ? "desc" : "asc";
    const sortedData = sortGroups(groupsData, currentSort.by, currentSort.order);
    renderGroups(sortedData);
});

function sortGroups(groups, criteria, order) {
    return [...groups].sort((a, b) => {
        if (criteria === "name") {
            return order === "asc"
                ? a.group_name.localeCompare(b.group_name)
                : b.group_name.localeCompare(a.group_name);
        } else if (criteria === "time") {
            return order === "asc"
                ? new Date(a.registrationTime) - new Date(b.registrationTime)
                : new Date(b.registrationTime) - new Date(a.registrationTime);
        }
        return 0;
    });
}

// Delete functionality
function deleteGroup(groupId) {
    groupIdToDelete = groupId; // Set the group ID to delete
    deleteModal.style.display = "flex"; // Show the modal
}

confirmDelete.addEventListener("click", async () => {
    if (groupIdToDelete) {
        try {
            const response = await fetch(`/admin/delete/${groupIdToDelete}`, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    "Content-Type": "application/json",
                },
            });

            if (response.ok) {
                // Remove the deleted group from the DOM
                const card = document.querySelector(`.delete[data-id="${groupIdToDelete}"]`).closest(".group-card");
                card.remove();
            } else {
                console.error("Failed to delete group");
            }
        } catch (error) {
            console.error("Error:", error);
        }
        deleteModal.style.display = "none"; // Hide the modal
        groupIdToDelete = null; // Reset the group ID
    }
});

cancelDelete.addEventListener("click", () => {
    deleteModal.style.display = "none"; // Hide the modal
    groupIdToDelete = null; // Reset the group ID
});

// Initial render
document.addEventListener("DOMContentLoaded", () => {
    renderGroups(groupsData);
});
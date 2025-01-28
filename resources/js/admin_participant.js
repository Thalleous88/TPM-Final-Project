const groups = [
    { id: 1, name: "Team Alpha", registrationTime: "2023-01-20T10:00:00" },
    { id: 2, name: "Team Beta", registrationTime: "2023-01-18T12:30:00" },
    { id: 3, name: "Team Charlie", registrationTime: "2023-01-22T08:15:00" },
    { id: 4, name: "Team Delta", registrationTime: "2023-01-19T09:45:00" },
    { id: 5, name: "Team Gamma", registrationTime: "2023-01-21T14:00:00" }
];


// Ambil elemen container dan search bar
const groupContainer = document.getElementById('group-container');
const searchInput = document.getElementById('group-search');
const filterBtn = document.getElementById('filter-btn');
const sortNameIcon = document.getElementById('sort-name'); // Ikon sorting berdasarkan nama
const sortTimeIcon = document.getElementById('sort-time'); // Ikon sorting berdasarkan waktu
const sortMenu = document.getElementById('sort-menu'); // Ikon menu sorting
const sortOptions = document.getElementById('sort-options'); // Dropdown menu


// Fungsi untuk menampilkan card grup
function renderGroups(groupData) {
    groupContainer.innerHTML = ''; // Kosongkan container sebelum render ulang

    groupData.forEach(group => {
        // Buat elemen card
        const card = document.createElement('div');
        card.className = 'group-card';
        card.innerHTML = `
            <h3>${group.name}</h3>
            <button class="view">View Team Details</button>
            <button class="edit">Edit Team</button>
            <button class="delete">Delete Team</button>
        `;
        groupContainer.appendChild(card); // Tambahkan card ke container
    });
}

// Fungsi untuk filter grup
function filterGroups(searchTerm) {
    const filteredGroups = groups.filter(group =>
        group.name.toLowerCase().includes(searchTerm.toLowerCase())
    );
    renderGroups(filteredGroups);
}

// Event listener untuk tombol filter
filterBtn.addEventListener('click', () => {
    const searchTerm = searchInput.value.trim();
    filterGroups(searchTerm);
});

let currentSort = {
    by: null, // Nama atau waktu
    order: 'asc' // Ascending atau descending
};

// Fungsi untuk sorting grup
function sortGroups(groups, criteria, order) {
    const sortedGroups = [...groups]; // Salin array agar tidak mengubah data asli

    sortedGroups.sort((a, b) => {
        if (criteria === 'name') {
            return order === 'asc'
                ? a.name.localeCompare(b.name)
                : b.name.localeCompare(a.name);
        } else if (criteria === 'time') {
            return order === 'asc'
                ? new Date(a.registrationTime) - new Date(b.registrationTime)
                : new Date(b.registrationTime) - new Date(a.registrationTime);
        }
    });

    return sortedGroups;
}

// Event listener untuk ikon sort name
sortNameIcon.addEventListener('click', () => {
    currentSort.by = 'name';
    currentSort.order = currentSort.order === 'asc' ? 'desc' : 'asc'; // Toggle order
    const sortedData = sortGroups(groups, currentSort.by, currentSort.order);
    renderGroups(sortedData);
});

// Event listener untuk ikon sort time
sortTimeIcon.addEventListener('click', () => {
    currentSort.by = 'time';
    currentSort.order = currentSort.order === 'asc' ? 'desc' : 'asc'; // Toggle order
    const sortedData = sortGroups(groups, currentSort.by, currentSort.order);
    renderGroups(sortedData);
});

// Event listener untuk tombol filter (integrasi search + sorting)
filterBtn.addEventListener('click', () => {
    const searchTerm = searchInput.value.trim();
    const filteredGroups = groups.filter(group =>
        group.name.toLowerCase().includes(searchTerm.toLowerCase())
    );
    const sortedData = sortGroups(filteredGroups, currentSort.by, currentSort.order);
    renderGroups(sortedData);
});

// Tampilkan semua grup saat halaman dimuat
renderGroups(groups);

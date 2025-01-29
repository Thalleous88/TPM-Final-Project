import { groups } from "./data.js";


const urlParams = new URLSearchParams(window.location.search);
const groupId = parseInt(urlParams.get("id"), 10);
const group = groups.find((g) => g.id === groupId);

if (group) {
    // nama grup
    document.getElementById("group-name").textContent = group.name;

    // daftar anggota
    const memberList = document.getElementById("member-list");
    group.members.forEach((member) => {
        const memberItem = document.createElement("div");
        memberItem.textContent = member;
        memberItem.className = "member-item";
        memberItem.innerHTML = `
        <span class="material-icons icon">person</span>
        <span class="member-name">${member}</span>
    `;
        memberList.appendChild(memberItem);
    });

    // waktu registrasi
    const registrationTime = new Date(group.registrationTime).toLocaleString();
    document.getElementById(
        "registration-time"
    ).textContent = `Registered: ${registrationTime}`;
} else {
    document.body.innerHTML = "<h2>Group not found!</h2>";
}

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
}

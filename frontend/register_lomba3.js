document.addEventListener("DOMContentLoaded", () => {
    const uploadBox = document.getElementById("uploadBox");
    const fileInput = document.getElementById("fileInput");
    const filePreview = document.getElementById("filePreview");

    // Trigger file input when upload box is clicked
    uploadBox.addEventListener("click", () => {
        fileInput.click();
    });

    // Handle file selection
    fileInput.addEventListener("change", () => {
        handleFiles(fileInput.files);
    });

    // Drag-and-drop functionality
    uploadBox.addEventListener("dragover", (e) => {
        e.preventDefault();
        uploadBox.classList.add("dragover");
    });

    uploadBox.addEventListener("dragleave", () => {
        uploadBox.classList.remove("dragover");
    });

    uploadBox.addEventListener("drop", (e) => {
        e.preventDefault();
        uploadBox.classList.remove("dragover");
        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    // Display uploaded files
    function handleFiles(files) {
        filePreview.innerHTML = ""; // Clear previous previews
        for (const file of files) {
            const fileItem = document.createElement("div");
            fileItem.textContent = `📄 ${file.name} (${(file.size / 1024).toFixed(2)} KB)`;
            filePreview.appendChild(fileItem);
        }
    }
});

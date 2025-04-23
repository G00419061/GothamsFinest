document.addEventListener("DOMContentLoaded", function () {
    const dropArea = document.getElementById("drop-area");
    const fileInput = document.getElementById("fileElem");
    const preview = document.getElementById("preview");
    const imgIcon = dropArea.querySelector("img");
    const instructions = dropArea.querySelector("p");
  
    // Click anywhere in the drop area triggers file input
    dropArea.addEventListener("click", () => {
      fileInput.click();
    });
  
    // Drag & Drop Events
    dropArea.addEventListener("dragover", (e) => {
      e.preventDefault();
      dropArea.classList.add("dragover");
    });
  
    dropArea.addEventListener("dragleave", () => {
      dropArea.classList.remove("dragover");
    });
  
    dropArea.addEventListener("drop", (e) => {
      e.preventDefault();
      dropArea.classList.remove("dragover");
      const files = e.dataTransfer.files;
      if (files.length > 0) {
        handleFile(files[0]);
      }
    });
  
    // File input change
    fileInput.addEventListener("change", () => {
      if (fileInput.files.length > 0) {
        handleFile(fileInput.files[0]);
      }
    });
  
    function handleFile(file) {
      if (!file.type.startsWith("image/")) return;
  
      const reader = new FileReader();
      reader.onload = function (e) {
        // Clear existing preview and instructions
        preview.innerHTML = "";
        preview.style.display = "block";
        if (imgIcon) imgIcon.style.display = "none";
        if (instructions) instructions.style.display = "none";
  
        // Create image preview
        const img = document.createElement("img");
        img.src = e.target.result;
        img.className = "preview-img";
        preview.appendChild(img);
      };
      reader.readAsDataURL(file);
    }
  });
  
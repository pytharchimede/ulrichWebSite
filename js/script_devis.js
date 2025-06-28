// Multi-step logic
const steps = [1, 2, 3];
let currentStep = 1;
const stepElems = steps.map((i) => document.getElementById("step-" + i));
const contentElems = steps.map((i) => document.getElementById("content-" + i));
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const submitBtn = document.getElementById("submitBtn");
const form = document.getElementById("devisForm");
const success = document.getElementById("devisSuccess");

function showStep(step) {
  steps.forEach((s, idx) => {
    stepElems[idx].classList.toggle("active", s === step);
    contentElems[idx].style.display = s === step ? "block" : "none";
  });
  prevBtn.style.display = step > 1 ? "inline-block" : "none";
  nextBtn.style.display = step < steps.length ? "inline-block" : "none";
  submitBtn.style.display = step === steps.length ? "inline-block" : "none";
}
nextBtn.onclick = () => {
  // Validation simple
  if (currentStep === 1) {
    if (!form.nom.value.trim() || !form.email.value.trim()) {
      form.nom.focus();
      return;
    }
  }
  if (currentStep === 2) {
    if (!serviceChoices.getValue(true).length) {
      document.getElementById("service").focus();
      return;
    }
  }
  if (currentStep < steps.length) {
    currentStep++;
    showStep(currentStep);
  }
};
prevBtn.onclick = () => {
  if (currentStep > 1) {
    currentStep--;
    showStep(currentStep);
  }
};
form.onsubmit = (e) => {
  e.preventDefault();
  form.style.display = "none";
  success.style.display = "block";
};
showStep(currentStep);

// Choices.js pour les selects
const serviceChoices = new Choices("#service", {
  removeItemButton: true,
  searchEnabled: true,
  placeholder: true,
  placeholderValue: "Sélectionnez un ou plusieurs services",
});
const delaiChoices = new Choices("#delai", {
  searchEnabled: true,
  placeholder: true,
  placeholderValue: "Sélectionnez un délai",
});
const budgetChoices = new Choices("#budget", {
  searchEnabled: true,
  placeholder: true,
  placeholderValue: "Sélectionnez un budget",
});

// Drag & Drop logic for logo (multi-images)
const logoDropzone = document.getElementById("logoDropzone");
const logoInput = document.getElementById("logo");
const logoFiles = document.getElementById("logoFiles");
let logoArray = [];
logoDropzone.addEventListener("click", () => logoInput.click());
logoDropzone.addEventListener("dragover", (e) => {
  e.preventDefault();
  logoDropzone.classList.add("dragover");
});
logoDropzone.addEventListener("dragleave", () =>
  logoDropzone.classList.remove("dragover")
);
logoDropzone.addEventListener("drop", (e) => {
  e.preventDefault();
  logoDropzone.classList.remove("dragover");
  if (e.dataTransfer.files.length) {
    addLogos(e.dataTransfer.files);
  }
});
logoInput.addEventListener("change", () => addLogos(logoInput.files));
function addLogos(fileList) {
  for (let file of fileList) {
    if (
      file.type.startsWith("image/") &&
      !logoArray.some((f) => f.name === file.name && f.size === file.size)
    ) {
      logoArray.push(file);
    }
  }
  updateLogoFiles();
}
function updateLogoFiles() {
  logoFiles.innerHTML = "";
  logoArray.forEach((file, idx) => {
    let reader = new FileReader();
    let item = document.createElement("div");
    item.className = "dz-file-item";
    reader.onload = function (e) {
      item.innerHTML = `<img src="${e.target.result}" alt="Aperçu"><span>${file.name}</span>
                    <button type="button" class="dz-remove" title="Supprimer"><i class="fa fa-times"></i></button>`;
      item.querySelector(".dz-remove").onclick = () => {
        logoArray.splice(idx, 1);
        updateLogoFiles();
      };
    };
    reader.readAsDataURL(file);
    logoFiles.appendChild(item);
  });
  // Synchronise logoInput avec logoArray
  let dt = new DataTransfer();
  logoArray.forEach((f) => dt.items.add(f));
  logoInput.files = dt.files;
}

// Drag & Drop logic for files
const filesDropzone = document.getElementById("filesDropzone");
const filesInput = document.getElementById("fichiers");
const filesList = document.getElementById("filesList");
let filesArray = [];
filesDropzone.addEventListener("click", () => filesInput.click());
filesDropzone.addEventListener("dragover", (e) => {
  e.preventDefault();
  filesDropzone.classList.add("dragover");
});
filesDropzone.addEventListener("dragleave", () =>
  filesDropzone.classList.remove("dragover")
);
filesDropzone.addEventListener("drop", (e) => {
  e.preventDefault();
  filesDropzone.classList.remove("dragover");
  if (e.dataTransfer.files.length) {
    addFiles(e.dataTransfer.files);
  }
});
filesInput.addEventListener("change", () => addFiles(filesInput.files));
function addFiles(fileList) {
  for (let file of fileList) {
    if (!filesArray.some((f) => f.name === file.name && f.size === file.size)) {
      filesArray.push(file);
    }
  }
  updateFilesList();
}
function getFileIcon(file) {
  const ext = file.name.split(".").pop().toLowerCase();
  if (file.type.startsWith("image/"))
    return `<img src="" class="dz-thumb" style="display:none;">`; // thumb handled below
  if (["pdf"].includes(ext))
    return `<i class="fa-solid fa-file-pdf" style="color:#e74c3c"></i>`;
  if (["doc", "docx", "odt"].includes(ext))
    return `<i class="fa-solid fa-file-word" style="color:#1746A2"></i>`;
  if (["xls", "xlsx", "ods", "csv"].includes(ext))
    return `<i class="fa-solid fa-file-excel" style="color:#27ae60"></i>`;
  if (["ppt", "pptx", "odp"].includes(ext))
    return `<i class="fa-solid fa-file-powerpoint" style="color:#e67e22"></i>`;
  if (["zip", "rar", "7z", "tar", "gz"].includes(ext))
    return `<i class="fa-solid fa-file-zipper" style="color:#8e44ad"></i>`;
  if (["txt", "md", "rtf"].includes(ext))
    return `<i class="fa-solid fa-file-lines" style="color:#555"></i>`;
  return `<i class="fa-solid fa-file" style="color:#888"></i>`;
}
function updateFilesList() {
  filesList.innerHTML = "";
  filesArray.forEach((file, idx) => {
    let isImage = file.type.startsWith("image/");
    let item = document.createElement("div");
    item.className = "dz-file-item";
    if (isImage) {
      let reader = new FileReader();
      reader.onload = function (e) {
        item.innerHTML = `<img src="${e.target.result}" alt="Aperçu"><span>${file.name}</span>
                        <button type="button" class="dz-remove" title="Supprimer"><i class="fa fa-times"></i></button>`;
        item.querySelector(".dz-remove").onclick = () => {
          filesArray.splice(idx, 1);
          updateFilesList();
        };
      };
      reader.readAsDataURL(file);
    } else {
      item.innerHTML = `${getFileIcon(file)} <span>${file.name}</span>
                    <button type="button" class="dz-remove" title="Supprimer"><i class="fa fa-times"></i></button>`;
      item.querySelector(".dz-remove").onclick = () => {
        filesArray.splice(idx, 1);
        updateFilesList();
      };
    }
    filesList.appendChild(item);
  });
  // Synchronise filesInput avec filesArray
  let dt = new DataTransfer();
  filesArray.forEach((f) => dt.items.add(f));
  filesInput.files = dt.files;
}

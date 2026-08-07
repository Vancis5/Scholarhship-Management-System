// ===========================
// IMPORT GRADES
// ===========================

const gradeFile = document.getElementById("gradeFile");
const gradeBtn = document.getElementById("gradeBtn");
const gradeFileName = document.getElementById("gradeFileName");
const gradeDeleteBtn = document.getElementById("gradeDeleteBtn");

if (gradeBtn && gradeFile && gradeFileName && gradeDeleteBtn) {

    gradeBtn.addEventListener("click", function () {
        gradeFile.click();
    });

    gradeFile.addEventListener("change", function () {

        if (this.files.length > 0) {
            gradeFileName.textContent = this.files[0].name;
            gradeDeleteBtn.style.display = "block";
        } else {
            gradeFileName.textContent = "No file selected";
            gradeDeleteBtn.style.display = "none";
        }

    });

    gradeDeleteBtn.addEventListener("click", function () {
        gradeFile.value = "";
        gradeFileName.textContent = "No file selected";
        gradeDeleteBtn.style.display = "none";
    });

    const gradeImportBtn = gradeBtn.parentElement ? gradeBtn.parentElement.querySelector(".import-btn") : null;
    if (gradeImportBtn) {
        gradeImportBtn.addEventListener("click", function () {
            if (!gradeFile.files || gradeFile.files.length === 0) {
                alert("Please select an academic file to import.");
                return;
            }
            alert("Academic records imported successfully!");
            gradeFile.value = "";
            gradeFileName.textContent = "No file selected";
            gradeDeleteBtn.style.display = "none";
        });
    }

}
// ===========================
// IMPORT ENROLLMENT
// ===========================

const enrollmentFile = document.getElementById("enrollmentFile");
const enrollmentBtn = document.getElementById("enrollmentBtn");
const enrollmentFileName = document.getElementById("enrollmentFileName");
const enrollmentDeleteBtn = document.getElementById("enrollmentDeleteBtn");

if (enrollmentBtn && enrollmentFile && enrollmentFileName && enrollmentDeleteBtn) {

    enrollmentBtn.addEventListener("click", function () {
        enrollmentFile.click();
    });

    enrollmentFile.addEventListener("change", function () {

        if (this.files.length > 0) {
            enrollmentFileName.textContent = this.files[0].name;
            enrollmentDeleteBtn.style.display = "block";
        } else {
            enrollmentFileName.textContent = "No file selected";
            enrollmentDeleteBtn.style.display = "none";
        }

    });

    enrollmentDeleteBtn.addEventListener("click", function () {
        enrollmentFile.value = "";
        enrollmentFileName.textContent = "No file selected";
        enrollmentDeleteBtn.style.display = "none";
    });

    const enrollmentImportBtn = enrollmentBtn.parentElement ? enrollmentBtn.parentElement.querySelector(".import-btn") : null;
    if (enrollmentImportBtn) {
        enrollmentImportBtn.addEventListener("click", function () {
            if (!enrollmentFile.files || enrollmentFile.files.length === 0) {
                alert("Please select an enrollment file to import.");
                return;
            }
            alert("Enrollment records imported successfully!");
            enrollmentFile.value = "";
            enrollmentFileName.textContent = "No file selected";
            enrollmentDeleteBtn.style.display = "none";
        });
    }

}
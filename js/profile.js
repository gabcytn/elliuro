const editBtn = document.querySelector("#edit-btn");
const logoutBtn = document.querySelector("#logout-btn");
const editDialog = document.querySelector("#edit-dialog");
const logoutDialog = document.querySelector("#logout-dialog");
const closeEditBtn = document.querySelector("#close-edit");
const noLogout = document.querySelector("#no-logout");
const editForm = document.querySelector("#edit-dialog form");

editBtn.addEventListener("click", () => {
    editDialog.showModal();
})

closeEditBtn.addEventListener("click", () => {
    editDialog.close();
})

logoutBtn.addEventListener("click", () => {
    logoutDialog.showModal();
})

noLogout.addEventListener("click", () => {
    logoutDialog.close();
})

// editForm.addEventListener("submit", e => {
//     const file = document.querySelector("#profile_img");

//     if (file.files.length === 0) {
//         e.preventDefault();
//         alert("")
//     }
// })
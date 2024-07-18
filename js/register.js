const pass = document.querySelector("#password");
const cpass = document.querySelector("#cpassword");

const regForm = document.querySelector(".form-container");

regForm.addEventListener("submit", e => {
    const p = pass.value;
    if (p.length < 8) {
        e.preventDefault();
        alert("Password must be atleast 8 characters!");
        return;
    }
    if (pass.value != cpass.value) {
        e.preventDefault();
        alert("Passwords do not match!");
    }
})
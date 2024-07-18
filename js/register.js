const pass = document.querySelector("#password");
const cpass = document.querySelector("#cpassword");

const regForm = document.querySelector(".form-container");

regForm.addEventListener("submit", e => {
    if (pass.value != cpass.value) {
        e.preventDefault();
        alert("Passwords do not match!");
    }
    console.log(pass.value);

    // alert("js");
})
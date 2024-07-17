const email = document.querySelector("#email");
const pw = document.querySelector("#password");

const loginBtn = document.querySelector("#login-btn");

loginBtn.addEventListener("click", e => {
    if (email.value == "" || pw.value == "") {
        window.alert("EMPTY FIELDS!")
        e.preventDefault()
    }
})

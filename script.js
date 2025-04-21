const container = document.querySelector('.container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
let usernameInput = document.getElementById('usernameInput')
let passwordInput = document.getElementById('passwordInput')

function signButton() {
    localStorage.setItem('username', usernameInput.value)
    console.log(usernameInput.value)
    console.log(passwordInput.value)

    if (usernameInput.value == 'digishop123' && passwordInput.value == 'digishop123') {
        localStorage.setItem('role', 'admin')
    } else {
        localStorage.setItem('role', 'tidak ditemukan')
    }

    if (localStorage.getItem('role') == "admin") {
        setTimeout(function () {
            window.location.href = "awal.html";
            alert('berhasil login, klik "OK" untuk melanjutkan')
        }, 3000);
    } else {
        alert('username atau password anda salah!')
        document.getElementById('usernameInput').value = '';
        document.getElementById('passwordInput').value = '';
    }

}

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
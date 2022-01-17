// logout
const SettingLogout = document.querySelector('.js-logout');
const modalLogout = document.querySelector('.modal-logout');
const JsLogout = document.querySelector('.logout');

function showLogout() {
    modalLogout.classList.add('open');
}

function hideLogout() {
    modalLogout.classList.remove('open');
}

SettingLogout.addEventListener('click', showLogout);

modalLogout.addEventListener('click', hideLogout);

JsLogout.addEventListener('click', function(event) {
    event.stopPropagation();
})
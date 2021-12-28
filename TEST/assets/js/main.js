var home = document.getElementById('home');
var phone = document.getElementById('phone');
var tablet = document.getElementById('tablet');
var phukien = document.getElementById('phukien');
var oldphone = document.getElementById('oldphone');
var contact = document.getElementById('contact');

var OnclickHome = document.querySelector('.content_home');
var OnclickPhone = document.querySelector('.content_phone');
var OnclickTablet = document.querySelector('.content_tablet');
var OnclickPhuKien = document.querySelector('.content_phukien');
var OnclickOldPhone = document.querySelector('.content_oldphone');
var OnclickContact = document.querySelector('.content_contact');


home.onclick = function() {
    OnclickHome.style.display = 'block';
    OnclickPhone.style.display = 'none';
    OnclickTablet.style.display = 'none';
    OnclickPhuKien.style.display = 'none';
    OnclickOldPhone.style.display = 'none';
    OnclickContact.style.display = 'none';
}

phone.onclick = function() {
    OnclickHome.style.display = 'none';
    OnclickPhone.style.display = 'block';
    OnclickTablet.style.display = 'none';
    OnclickPhuKien.style.display = 'none';
    OnclickOldPhone.style.display = 'none';
    OnclickContact.style.display = 'none';
}

tablet.onclick = function() {
    OnclickHome.style.display = 'none';
    OnclickPhone.style.display = 'none';
    OnclickTablet.style.display = 'block';
    OnclickPhuKien.style.display = 'none';
    OnclickOldPhone.style.display = 'none';
    OnclickContact.style.display = 'none';
}

phukien.onclick = function() {
    OnclickHome.style.display = 'none';
    OnclickPhone.style.display = 'none';
    OnclickTablet.style.display = 'none';
    OnclickPhuKien.style.display = 'block';
    OnclickOldPhone.style.display = 'none';
    OnclickContact.style.display = 'none';
}

oldphone.onclick = function() {
    OnclickHome.style.display = 'none';
    OnclickPhone.style.display = 'none';
    OnclickTablet.style.display = 'none';
    OnclickPhuKien.style.display = 'none';
    OnclickOldPhone.style.display = 'block';
    OnclickContact.style.display = 'none';
}

contact.onclick = function() {
    OnclickHome.style.display = 'none';
    OnclickPhone.style.display = 'none';
    OnclickTablet.style.display = 'none';
    OnclickPhuKien.style.display = 'none';
    OnclickOldPhone.style.display = 'none';
    OnclickContact.style.display = 'block';
}

// Modal Register
const imgLogins = document.querySelector('.js-imglogin');
const modalRegister = document.querySelector('.modal-register');
const registerMain = document.querySelector('.loginmain');

const DangNhap = document.querySelector('.js-dangnhap');
const DangKy = document.querySelector('.js-dangky');
const modalLogin = document.querySelector('.modal-login');
const loginMain = document.querySelector('.js-loginMain');

function showRegister() {
    modalRegister.classList.add('open');
    modalLogin.classList.remove('open');
}

function hideRegister() {
    modalRegister.classList.remove('open');
}

function convertRegister() {
    modalRegister.classList.add('open');
    modalLogin.classList.remove('open');
}

imgLogins.addEventListener('click', showRegister);

modalRegister.addEventListener('click', hideRegister);

registerMain.addEventListener('click', function(even) {
    even.stopPropagation();
})

DangKy.addEventListener('click', convertRegister);

// đăng nhập
function convertLogin() {
    modalLogin.classList.add('open');
    modalRegister.classList.remove('open');
}

function hideLogin() {
    modalLogin.classList.remove('open');
}

DangNhap.addEventListener('click', convertLogin);

modalLogin.addEventListener('click', hideLogin);

loginMain.addEventListener('click', function(even) {
    even.stopPropagation();
})
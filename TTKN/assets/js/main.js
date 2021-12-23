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
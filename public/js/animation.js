const ham = document.getElementById('js-hamburger');
const nav = document.getElementById('js-nav');
const topbtn = document.getElementById('top-btn');

ham.addEventListener('click', function() {
    ham.classList.toggle('active');
    nav.classList.toggle('active');
});

topbtn.addEventListener('click', function() {
    window.scroll({top: 0, behavior: 'smooth'});
});
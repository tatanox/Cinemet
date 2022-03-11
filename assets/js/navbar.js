document.querySelector('.nav-burger').addEventListener('click', function() {
    // check if menu is closed
    if (document.querySelector('.nav-burger').classList.contains('burger-closed')) {
        // open menu
        document.querySelector('.nav-burger').classList.remove('burger-closed');
        document.querySelector('.nav-burger').classList.add('burger-open');
        document.querySelector('.sign-up').style.display = 'flex';
        document.querySelector('.sign-in').style.display = 'flex';
        document.querySelector('.sign-up').style.top = '50px';
        document.querySelector('.sign-in').style.top = '50px';
        // mettre height de .nav à 100px
        document.querySelector('.nav').style.height = '100px';
        // mettre le margin top de banner à -100px
        document.querySelector('.banner').style.marginTop = '-100px';
    } else {
        // close menu
        document.querySelector('.nav-burger').classList.remove('burger-open');
        document.querySelector('.nav-burger').classList.add('burger-closed');
        document.querySelector('.sign-up').style.display = 'none';
        document.querySelector('.sign-in').style.display = 'none';
        document.querySelector('.sign-up').style.top = '0px';
        document.querySelector('.sign-in').style.top = '0px';
        // mettre height de .nav à 50px
        document.querySelector('.nav').style.height = '50px';
        // mettre le margin top de banner à -50px
        document.querySelector('.banner').style.marginTop = '-50px';
    }
});
// au resize manuel de la fenetre, si la width est d'un minimum de 769px, on remet display flex sur sign-up et sign-in et on remet top à 0px
window.addEventListener('resize', function() {
    if (window.innerWidth >= 769) {
        document.querySelector('.nav-burger').classList.remove('burger-open');
        document.querySelector('.nav-burger').classList.add('burger-closed');
        document.querySelector('.sign-up').style.display = 'flex';
        document.querySelector('.sign-in').style.display = 'flex';
        document.querySelector('.sign-up').style.top = '0px';
        document.querySelector('.sign-in').style.top = '0px';
    }
});
// si la width passe en dessous de 769px, on cache sign-up et sign-in et on remet top à 50px
window.addEventListener('resize', function() {
    if (window.innerWidth < 769) {
        document.querySelector('.nav-burger').classList.remove('burger-open');
        document.querySelector('.nav-burger').classList.add('burger-closed');
        document.querySelector('.sign-up').style.display = 'none';
        document.querySelector('.sign-in').style.display = 'none';
        document.querySelector('.sign-up').style.top = '50px';
        document.querySelector('.sign-in').style.top = '50px';
    }
});
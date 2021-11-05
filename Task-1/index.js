// Author - DEEPTIRANJAN SWAIN

const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');


openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
function close(){
    mainMenu.style.top = '-100%';
}

const changePic = (e)=>{
    document.getElementById("main_image").src = e;
}
function newsletter_signup() {
    alert("You have succesfully signed up!");
  }
function newsletter_signin() {
    alert("Create your account using Google form!");
    alert("Create your account using Google form!");
}
function submit() {
    alert("Your respond was succesfully received. ");
  }
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

const logo = document.querySelector('.logo');
const strLogo = logo.textContent;
const splitLogo = strLogo.split("");
logo.textContent = "";
console.log(splitLogo);

for(let i=0; i < splitLogo.length; i++){
    logo.innerHTML += "<span >" + splitLogo[i] + "</span>";
}
let char = 0;
let timer = setInterval(onTick, 50);

function onTick(){
    const span = logo.querySelectorAll('span')[char];
    span.classList.add('fade');
    char++
    if(char === splitLogo.length){
        complete();
        return;
    }
}
function complete(){
    clearInterval(timer);
    timer = null;
}

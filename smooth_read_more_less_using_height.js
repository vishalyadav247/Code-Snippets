
// // description button creation and show hide functionali]ty with description text
let area = document.querySelectorAll('.moreLessWrapper')[0]
let dynheight;
if(window.innerWidth > 700){
    dynheight = '180px';
}
else{
    dynheight = '206px';
}
let text = document.querySelectorAll('.moreLess')[0]
text.style.height = dynheight;
text.style.overflow = 'hidden'
let text_length = text.innerHTML;

if (text_length.length > 350) {
    var button = document.createElement("button");
    button.classList.add('description_btn');
    button.setAttribute('id', 'btn2');
    button.innerText = "Read More";
    button.style.display = 'block'
    button.style.fontSize = '15px'
    button.style.border = 'none'
    area.appendChild(button)
}

let btn2 = document.getElementById('btn2');
btn2.addEventListener('click', showHide)
let state = false;

function showHide() {
    if (!state) {
        show(dynheight)
        state = true;
        button.innerText = "Read Less";
    }
    else {
        hide(dynheight);
        button.innerText = "Read More";
        state = false;
    }
}

function show(dynheight) {
    text.style.height = 'auto';
    var endHeight = getComputedStyle(text).height;
    text.style.height = dynheight;
    text.offsetHeight;
    text.style.transition = 'height 0.5s ease-in-out';
    text.style.height = endHeight
}

function hide(dynheight) {
    var endHeight = getComputedStyle(text).height;
    text.offsetHeight;
    text.style.transition = 'height 0.5s ease-in-out';
    text.style.height = dynheight;
} 

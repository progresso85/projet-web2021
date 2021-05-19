const items = document.querySelectorAll('slider img');
const nbSlide = items.length;
const next = document.querySelector('.right');
const previous = document.querySelector('.left');
let count = 0;
console.log(nbSlide);

function nextSlide(){
    items[count].classList.remove('active');
    if(count < nbSlide - 1){
        count++;
    } else {
        count = 0;
    }
    items[count].classList.add('active')
    console.log(count);
}
next.addEventListener('click', nextSlide)

function previousSlide(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    } else {
        count = nbSlide - 1;
    }

    items[count].classList.add('active')
    // console.log(count);
    
}
previous.addEventListener('click', previousSlide)

function keyPress(e) {
    console.log(e);
    
    if(e.keyCode === 37){
        previousSlide();
    } else if(e.keyCode === 39){
        nextSlide();
    }
}
document.addEventListener('keydown', keyPress)
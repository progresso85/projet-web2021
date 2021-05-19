const items = document.querySelectorAll('subscriptionSlider img');
const nbSlide = items.length;
const nextBis = document.querySelector('.subscriptionRight');
const previous = document.querySelector('.subscriptionLeft');
let count = 0;

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
nextBis.addEventListener('click', nextSlide)

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

function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        previousSlide();
    } else if(e.keyCode === 39){
        nextSlide();
    }
}
document.addEventListener('keydown', keyPress)
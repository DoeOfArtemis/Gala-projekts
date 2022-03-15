let modal = document.getElementById('myModal'), //find in html file by id
    slides = document.getElementsByClassName('slides');


img.onclick = function openModal() {
    modal.style.display = "block"; //make gallery view visible
}

function closeModal() {
    modal.style.display = "none"; //make gallery view invisible
}

var slideIndex = 1;
showSlides(slideIndex); 

//when clicking icon, can view previous/next slide
function changeSlides(n){
    showSlides(slideIndex += n);
}

function showSlides(n){
    //continuous photo view - after last one, first one again
    if (n > slides.length){
        slideIndex = 1;
    } else if (n < 1) {
        slideIndex = slides.length;
    }

    for (let i = 0; i < slides.length; i++){
        slides[i].style.display = "none;"
    }

    slides[slideIndex - 1].style.display = "block";
}

//close window with exit button
document.onkeyup(function(event){
    if (event.keyCode == 27) {
        closeModal();
    }
})
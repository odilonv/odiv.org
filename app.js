let section = document.querySelectorAll("section");
let menu = document.querySelectorAll(".links-circle");

const btnCircle = document.querySelector('.btn-circle');
const circleMenu = document.querySelector('.circle-menu');
const contact = document.querySelector('.contact-circle');
const contactc = document.querySelector('.contact-corner');
let i = 0;

btnCircle.addEventListener('click', () => {
    i++;
    if(i & 1){
        contact.style.opacity = 0;
        contactc.style.top = '-30px';
    }
    else {
        contact.style.opacity = 1;
        contactc.style.top = '65px';
        contactc.style.right = '150px';
    }
    btnCircle.classList.toggle('menu-anim');
    circleMenu.classList.toggle('circle-anim');

})


var text = document.getElementById('text');
var parallaxInstance = new Parallax(text);
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);



window.onscroll = () => {
    section.forEach((i) => {
        let top = window.scrollY;
        let offset = i.offsetTop - 150;
        let height = i.offsetHeight;
        let id = i.getAttribute("id");

        if (top >= offset && top < offset + height) {
            menu.forEach((link) => {
                link.classList.remove("active");
                document
                    .querySelector("header nav a[href*=" + id + "]")
                    .classList.add("active");
            });
        }
    });
};

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);
// To check the scroll position on page load
reveal();


window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    const element = document.querySelector(".reseaux");
    const element2 = document.querySelector(".arcdecercleL");
    if (document.body.scrollTop > 655 || document.documentElement.scrollTop > 655)
    {
        element.style.position= "absolute" ;
        element.style.bottom= "-550px";
        element2.style.position= "absolute" ;
        element2.style.bottom= "-375px";
    }
    else
    {
        element.style.position= "fixed";
        element.style.bottom= "105px";
        element2.style.position= "fixed";
        element2.style.bottom= "280px";

    }
}
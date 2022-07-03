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
    const element3 = document.querySelector(".rectangleright");
    const element4 = document.querySelector(".rectanglehorizontal");
    const element5 = document.querySelector(".arcdecercleR");
    const element6 = document.querySelector(".arcdecercleR2");
    const element7 = document.querySelector(".rectangleleft");

    if (document.body.scrollTop > 655 || document.documentElement.scrollTop > 655)
    {
        if(document.body.scrollTop < 1050 && document.documentElement.scrollTop < 1050){
            element.style.position= "absolute" ;
            element.style.bottom= "-550px";
            element2.style.position= "absolute" ;
            element2.style.bottom= "-375px";
            element3.style.position="fixed";
            element3.style.bottom="0px";
            element4.style.right="-1000px";
            element5.style.position="fixed";
            element5.style.bottom="100px";
            element4.style.opacity="0";
            element6.style.opacity="0";
            element7.style.background="white";
            element7.style.width="1px";
            element7.style.height="100px";


        }
        else {
            element3.style.position="absolute";
            element3.style.bottom="-1050px";
            element4.style.right="55px";
            element5.style.position="absolute"
            element5.style.bottom="-950px";
            element4.style.opacity="1";
            element6.style.opacity="1";
            element7.style.opacity="0.5";
            element7.style.background ="linear-gradient(-90deg,#590000 35%, #C7353D)";
            element7.style.width="100%";
            element7.style.height="10px";
        }
    }
    else
    {
        element.style.position= "fixed";
        element.style.bottom= "105px";
        element2.style.position= "fixed";
        element2.style.bottom= "280px";
        element3.style.position="fixed";
        element3.style.bottom="0px";
        element4.style.right="-1000px";
        element5.style.position="fixed";
        element5.style.bottom="100px";
        element4.style.opacity="0";
        element6.style.opacity="0";
        element7.style.background="white";
        element7.style.width="1px";
        element7.style.height="100px";



    }
}

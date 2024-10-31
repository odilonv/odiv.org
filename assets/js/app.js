const sections = document.querySelectorAll("section");
const menuLinks = document.querySelectorAll(".links-circle");
const btnCircle = document.querySelector('.btn-circle');
const circleMenu = document.querySelector('.circle-menu');
const contact = document.querySelector('.contact-circle');
let contactOpen = false;

btnCircle.addEventListener('click', () => {
    contactOpen = !contactOpen;
    contact.style.right = contactOpen ? '20px' : '100px';
    contact.style.opacity = contactOpen ? 0 : 1;
    btnCircle.classList.toggle('menu-anim');
    circleMenu.classList.toggle('circle-anim');
});

const debounce = (func, wait) => {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
};

const handleScroll = () => {
    const scrollPosition = window.scrollY;
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 10;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute("id");

        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            menuLinks.forEach(link => {
                link.classList.remove("active");
                const activeLink = document.querySelector(`header nav a[href*="${sectionId}"]`);
                if (activeLink) {
                    activeLink.classList.add("active");
                }
            });
        }
    });
};

window.addEventListener('scroll', debounce(handleScroll, 100));

function reveal() {
    const reveals = document.querySelectorAll(".reveal");
    const windowHeight = window.innerHeight;
    const elementVisible = 150;

    reveals.forEach(reveal => {
        const elementTop = reveal.getBoundingClientRect().top;

        if (elementTop < windowHeight - elementVisible) {
            reveal.classList.add("active");
        } else {
            reveal.classList.remove("active");
        }
    });
}

window.addEventListener("scroll", debounce(reveal, 100));
reveal();

const scene = document.getElementById('scene');

if (scene) {
    const text = document.getElementById('text');
    const parallaxInstance = new Parallax(text);
    const parallaxInstancebis = new Parallax(scene);
}
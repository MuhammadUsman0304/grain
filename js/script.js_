//  Menu Toggler
const hamburger = document.querySelector(".hamburger");
const navlinks = document.querySelector(".navlinks");
const links = document.querySelectorAll(".navlinks li");

hamburger.addEventListener('click', () => {
    navlinks.classList.toggle('open');
});

//  Menu Dropdown 

const subMenu = document.querySelector(".subMenu");
const submenuCategory = document.querySelector(".submenuCategory");
subMenu.addEventListener('click', () => {
    submenuCategory.classList.toggle('subMenuActive');
});

// Stiky Navbar

const nav = document.querySelector(".nav");

function stikynav(e) {
    if (Math.round(window.scrollY) >= 156) {
        nav.classList.add('stikynav');
    } else {
        nav.classList.remove('stikynav');
    }
}
window.addEventListener('scroll', stikynav);


// Slider 

const slides = document.querySelectorAll('.slide');
const btns = document.querySelectorAll('.btn');
let currentSlide = 1;

// java script for image slider manual navigation

var manualNav = function(manual) {


    slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
            btn.classList.remove('active');
        });
    });
    slides[manual].classList.add('active');
    btns[manual].classList.add('active');

};

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
    });
});
// autoplay sliding 
var repeat = function(activeClass) {
    let active = document.getElementsByClassName('active');
    let i = 1;
    var repeater = () => {
        setTimeout(function() {

            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            });
            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;
            if (slides.length == i) {
                i = 0;
            }
            if (i >= slides.length) {
                return;
            }
            repeater();
        }, 4000);
    }
    repeater();
}
repeat();


// Products

const item = document.querySelectorAll('.singleItem');
const probtns = document.querySelectorAll('#filter-button li');
let currentItem = 1;
console.log(item);
console.log(probtns);

// java script for product  manual navigation

var manualItem = function(manual) {


    item.forEach((items) => {
        items.classList.remove('current');

        probtns.forEach((probtn) => {
            probtn.classList.remove('current');
        });
    });

    item[manual].classList.add('current');
    probtns[manual].classList.add('current');

};

probtns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualItem(i);
        currentItem = i;
    });
});



//  Google translator
function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en' }, 'language');
}

// Products page Scripts


const productstop = document.querySelectorAll('.productstop');
const proside = document.querySelectorAll('.pro-side');
const productpage = document.querySelector('.productpage');
console.log(productpage)
''
let currPro = 1;



const manualcat = function(manual) {


    productstop.forEach((pro) => {
        pro.classList.remove('productstopActive');

        proside.forEach((btn) => {
            btn.classList.remove('productstopActive');
        });
    });

    productstop[manual].classList.add('productstopActive');
    proside[manual].classList.add('productstopActive');
    console.log(manual);
    if (manual == 0) {
        productpage.style.backgroundImage = "url('image/beans.jpg')";
    } else if (manual == 1) {
        productpage.style.backgroundImage = "url('image/grains.jpg')";
    } else if (manual == 2) {
        productpage.style.backgroundImage = "url('image/lentils.jpg')";
    } else if (manual == 3) {
        productpage.style.backgroundImage = "url('image/oilseed.jpg')";
    } else if (manual == 4) {
        productpage.style.backgroundImage = "url('image/peas.jpg')";
    } else if (manual == 5) {
        productpage.style.backgroundImage = "url('image/corn.jpg')";
    }


};

proside.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualcat(i);
        currPro = i;
    });
});

// Modals details Showing

const SinItem = document.querySelectorAll('.modalDialog');
const sinprodet = document.querySelectorAll('.gallary-title');
let singItem = 1;



const proShow = function(manual) {


    SinItem.forEach((pro) => {
        pro.classList.remove('modalActive');

        sinprodet.forEach((btn) => {
            btn.classList.remove('sinprodetactive');
        });
    });

    SinItem[manual].classList.add('modalActive');
    sinprodet[manual].classList.add('sinprodetactive');

};

sinprodet.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        proShow(i);
        singItem = i;
    });
});
// Modal close

const closemodal = document.querySelectorAll('.close');
let closeNum = 1;
const productclose = function(manual) {
    SinItem[manual].classList.remove('modalActive');

}
closemodal.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        productclose(i);
        closeNum = i;
    });
});
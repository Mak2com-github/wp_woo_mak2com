function animateLeaves() {
    const shapes = document.querySelectorAll('.svgLeaves #CalqueShapes .group');

    shapes.forEach(function (shape) {
        shape.style.transform = "translateY(-100%)"
        shape.style.opacity = "1"
    })

    var timeline = anime.timeline({
        easing: 'easeInOutSine',
        loop: false,
    })
    timeline.add({
        targets: shapes[0],
        duration: 500,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    });
    timeline.add({
        targets: shapes[1],
        duration: 700,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    }, "-=600");
    timeline.add({
        targets: shapes[2],
        duration: 1500,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    }, "-=500");
    timeline.add({
        targets: shapes[3],
        duration: 800,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    }, "-=1000");
    timeline.add({
        targets: shapes[4],
        duration: 1100,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    }, "-=700");
    timeline.add({
        targets: shapes[5],
        duration: 1600,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    }, "-=900");
    timeline.add({
        targets: shapes[6],
        duration: 1800,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    }, "-=1400");
    timeline.add({
        targets: shapes[7],
        duration: 2000,
        translateY: ['-100%', '0'],
        translateX: ['-15%', '15%', '-10%', '10%', '-15%', '15%', '-10%', '10%', '0'],
    }, "-=1400");
}

function animeBaseline() {
    var letters = document.querySelectorAll(".svgLogoWhite #CalqueWriting path")
    var masks = document.querySelectorAll(".svgLogoWhite #CalqueMask path")

    var timeline = anime.timeline({
        easing: 'easeInOutSine',
        loop: false,
    })
    timeline.add({
        targets: masks[0],
        duration: 1000,
        strokeDashoffset: [anime.setDashoffset, 0],
        strokeDasharray: [anime.setDashoffset, 500],
    })
    timeline.add({
        targets: masks[1],
        duration: 750,
        strokeDashoffset: [anime.setDashoffset, 0],
        strokeDasharray: [anime.setDashoffset, 500],
    }, "-=550")
    timeline.add({
        targets: masks[2],
        duration: 1000,
        strokeDashoffset: [anime.setDashoffset, 0],
        strokeDasharray: [anime.setDashoffset, 500],
    }, "-=550")
    timeline.add({
        targets: masks[3],
        duration: 750,
        strokeDashoffset: [anime.setDashoffset, 0],
        strokeDasharray: [anime.setDashoffset, 500],
    }, "-=550")
    timeline.add({
        targets: masks[4],
        duration: 750,
        strokeDashoffset: [anime.setDashoffset, 0],
        strokeDasharray: [anime.setDashoffset, 500],
    }, "-=550")
}

function replaceFormText() {
    var formText = document.querySelector(".nf-form-cont .nf-before-form-content .nf-form-fields-required")
    formText.innerHTML = "Tous les champs du formulaire sont obligatoires"
}

function headerMenuSystem() {
    const header = document.querySelector('#header');
    const menuBtn = document.querySelector('#mobileMenuBtn');
    const innerMenuContainer = document.querySelector('.inner-menu-container')
    const openIcon = document.querySelector('.menuBtnOpen');
    const closeIcon = document.querySelector('.menuBtnClose');
    const navPrimaryLinks = document.querySelectorAll('#primary-menu-list .menu-item > a,p');

    menuBtn.addEventListener('click', () => {
        deployMenu()
    })
    navPrimaryLinks.forEach(function (link) {
        link.addEventListener('click', () => {
            deploySubMenu(link)
        })
    })
    header.addEventListener('mouseenter', () => {
        if (header.classList.contains('scrolled')) {
            header.classList.remove('scrolled')
        }
    })
    document.addEventListener("scroll", function() {
        const scrollPosition = window.scrollY;
        if (scrollPosition >= 50) {
            scrollBackgroundOpacity(header, true)
        } else {
            scrollBackgroundOpacity(header, false)
        }
    })

    function deployMenu() {
        menuBtn.setAttribute('aria-expanded', 'true')
        menuBtn.classList.toggle('open')
        innerMenuContainer.classList.toggle('open')
    }

    function deploySubMenu(link) {
        const subMenu = link.nextElementSibling;
        if (subMenu) {
            subMenu.classList.toggle('open')
        }
    }

    function scrollBackgroundOpacity(header, status) {
        if (status === true) {
            header.classList.add('scrolled')
        } else {
            header.classList.remove('scrolled')
        }
    }

    function addBackSubMenuBtn() {
        const subMenus = document.querySelectorAll('.sub-menu');
        subMenus.forEach(function(subMenu) {
            const button = document.createElement("button")
            button.innerHTML = "< Retour"
            button.setAttribute('class', 'back-sub-menu-btn absolute -top-4 left-0 font-title uppercase text-light-gold text-sm font-regular')
            subMenu.appendChild(button)
            button.addEventListener('click', () => {
                subMenu.classList.toggle('open')
            })
        })
    }
    function tradSearchField() {
        const searchField = document.querySelector('#site-navigation .is-search-form label .is-search-input');
        searchField.setAttribute('placeholder', 'Que cherchez-vous ?')
    }

    tradSearchField()
    addBackSubMenuBtn()
}

function deploySearchField() {
    const searchField = document.querySelector('#site-navigation .is-search-form');
    const searchFieldLabel = document.querySelector('#site-navigation .is-search-form label');
    searchField.addEventListener('mouseenter', function () {
        searchFieldLabel.style.width = '50%'
    })
    searchField.addEventListener('mouseleave', function () {
        searchFieldLabel.style.width = '0'
    })
}

document.addEventListener("DOMContentLoaded", () => {
    let body = document.querySelector("body");
    headerMenuSystem()
    deploySearchField()
    if (body.classList.contains('home')) {
        animateLeaves()
        setTimeout(animeBaseline, 2000)
        jQuery(document).on( 'nfFormReady', function() {
            replaceFormText()
        });
    }
})
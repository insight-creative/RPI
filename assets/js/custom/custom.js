// vars
const menuButton = document.querySelector(".menuButtonWrap");
const mainMenu = document.querySelector(".main-menu");
const closeMenuButton = document.querySelector("#closeMenu");
const hamburger = document.querySelector(".hamburger");
const searchButton = document.querySelector("#searchWrap");
const searchWrapper = document.querySelector("#searchFormWrap");
const nav = document.querySelector(".site-header");
// event listeners
menuButton.addEventListener("click", toggleMobileMenu);
closeMenuButton.addEventListener("click", closeMobileMenu);
searchButton.addEventListener("click", toggleSearch);
// functions 
let scrollState = 0;

var scrollTop = function() {
    return window.scrollY;
  };
  
  var scrollDetect = function(collapse, expand) {
    var currentScroll = scrollTop();
    if (currentScroll > scrollState) {
      collapse();
    } else {
      expand();
    }
    scrollState = scrollTop();
  };
  
  function collapseNav() {
    nav.classList.remove('expand');
    nav.classList.add('collapse');
  }
  
  function expandNav() {
    nav.classList.remove('collapse');
    nav.classList.add('expand');
  }
  
  window.addEventListener("scroll", function() {
    scrollDetect(collapseNav, expandNav);
  });

function toggleMobileMenu() {
    if(mainMenu.classList.contains("open")) {
        this.setAttribute("aria-expanded", "false");
        this.setAttribute("aria-label", "open mobile menu");
        mainMenu.classList.remove("open");
        hamburger.classList.remove("is-active");
    } else {
        mainMenu.classList.add("open");
        hamburger.classList.add("is-active");
        this.setAttribute("aria-expanded", "true");
        this.setAttribute("aria-label", "close mobile menu");
    }
}
function closeMobileMenu() {
    if(mainMenu.classList.contains("open")) {
        mainMenu.classList.remove("open");
        hamburger.classList.remove("is-active");
        menuButton.setAttribute("aria-expanded", "false");
        menuButton.setAttribute("aria-label", "open mobile menu");
        console.log("close button clicked and menu closed");
    }
}
// Toggle Search
function toggleSearch() {
    searchWrapper.classList.toggle("searchOpen");
}

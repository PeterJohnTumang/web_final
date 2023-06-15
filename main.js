const menuIcon = document.getElementById("menu-icon"); 
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener('click', function () {
  if (searchBox.style.top == '72px') {
    searchBox.style.top = '24px';//dom manipulation
    searchBox.style.pointerEvents = 'none';//dom manipulation
  } else {
    searchBox.style.top = '72px';
    searchBox.style.pointerEvents = 'auto';
  }
});

menuIcon.addEventListener('click', function () {
  if (slideoutMenu.style.opacity == "1") {
    slideoutMenu.style.opacity = '0';//dom manipulation
    slideoutMenu.style.pointerEvents = 'none';//dom manipulation
  } else {
    slideoutMenu.style.opacity = '1';
    slideoutMenu.style.pointerEvents = 'auto';
  }
})

//Commented lines directly modify the CSS properties of the selected elements to achieve the desired visual effects or behavior changes.
//The following the the application of OOP essentials.

//Encapsulation
class MenuSearch {
  constructor() {
    this.menuIcon = document.getElementById("menu-icon");
    this.slideoutMenu = document.getElementById("slideout-menu");
    this.searchIcon = document.getElementById("search-icon");
    this.searchBox = document.getElementById("searchbox");

    this.searchIcon.addEventListener('click', this.toggleSearchBox.bind(this));
    this.menuIcon.addEventListener('click', this.toggleSlideoutMenu.bind(this));
  }
//Abstraction
  toggleSearchBox() {
    if (this.searchBox.style.top == '72px') {
      this.searchBox.style.top = '24px';
      this.searchBox.style.pointerEvents = 'none';
    } else {
      this.searchBox.style.top = '72px';
      this.searchBox.style.pointerEvents = 'auto';
    }
  }
//Abstraction
  toggleSlideoutMenu() {
    if (this.slideoutMenu.style.opacity == "1") {
      this.slideoutMenu.style.opacity = '0';
      this.slideoutMenu.style.pointerEvents = 'none';
    } else {
      this.slideoutMenu.style.opacity = '1';
      this.slideoutMenu.style.pointerEvents = 'auto';
    }
  }
}

const menuSearch = new MenuSearch();
var sidebar = document.getElementById('sidebar');
var menuBtn = document.getElementById('menu-btn');
var navMenu = document.getElementById('menu');
var aboutLink = document.getElementById('about-link');
var portfolioLink = document.getElementById('portfolio-link');
var closeIcon = document.getElementById('close');

menuBtn.addEventListener('click', menuBtnClicked);
menuBtn.addEventListener('mouseover', changeSidebarBorder);
menuBtn.addEventListener('mouseout', originalSidebarBorder);

aboutLink.addEventListener('click', menuBtnClicked);
portfolioLink.addEventListener('click', menuBtnClicked);
closeIcon.addEventListener('click', menuBtnClicked);

let counter = 0;

function menuBtnClicked(e) {
  if (counter % 2 == 0) {
    openSidebarMenu();
  } else {
    closeSidebarMenu();
  }
  counter++;
}

function openSidebarMenu() {
  sidebar.style.transform = 'translateX(80vw)';
  sidebar.style.width = '20vw';
  sidebar.style.backgroundColor = 'rgba(180, 180, 180, 0.6)';
  navMenu.style.transform = "translateX(80vw)";
  menuBtn.style.boxShadow = '0 0 0 #eee';
}

function closeSidebarMenu() {
  navMenu.style.transform = 'translateX(-20vw)';
  sidebar.style.transform = 'translateX(0vw)';
  sidebar.style.width = '50px';
  sidebar.style.backgroundColor = 'inherit';
  menuBtn.style.boxShadow = '0 5px 5px #eee';
}

function changeSidebarBorder(e) {
  sidebar.style.borderLeft = '6px solid #ddd';
}

function originalSidebarBorder(e) {
  sidebar.style.borderLeft = '6px solid #55f7d4';
}

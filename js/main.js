const sidebar = document.getElementById('sidebar');
const menuBtn = document.getElementById('menu-btn');
const navMenu = document.getElementById('menu');
const aboutLink = document.getElementById('about-link');
const portfolioLink = document.getElementById('portfolio-link');
const closeIcon = document.getElementById('close-icon');

menuBtn.addEventListener('click', isMenuOpen);
menuBtn.addEventListener('mouseover', setMenuColorToHoverState);
menuBtn.addEventListener('mouseout', setMenuColorToOriginalState);
aboutLink.addEventListener('click', isMenuOpen);
portfolioLink.addEventListener('click', isMenuOpen);
closeIcon.addEventListener('click', isMenuOpen);

let menuOpen = false;

function isMenuOpen(e) {
  if (!menuOpen) {
    openMenu();
  } else {
    closeMenu();
  }
  menuOpen = !menuOpen;
}

function openMenu() {
  sidebar.style.transform = 'translateX(80vw)';
  sidebar.style.width = '20vw';
  sidebar.style.backgroundColor = 'rgba(180, 180, 180, 0.6)';
  navMenu.style.transform = "translateX(80vw)";
}

function closeMenu() {
  navMenu.style.transform = 'translateX(-20vw)';
  sidebar.style.transform = 'translateX(0vw)';
  sidebar.style.width = '50px';
  sidebar.style.backgroundColor = 'inherit';
}

function setMenuColorToHoverState(e) {
  sidebar.style.borderLeft = '6px solid #ddd';
}

function setMenuColorToOriginalState(e) {
  sidebar.style.borderLeft = '6px solid #55f7d4';
}

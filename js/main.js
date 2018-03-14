var sidebar = document.getElementById('sidebar');
var menuBtn = document.getElementById('menu-btn');


menuBtn.addEventListener('click', menuBtnClicked);
menuBtn.addEventListener('mouseover', changeSidebarBorder);
menuBtn.addEventListener('mouseout', originalSidebarBorder);




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
  sidebar.style.transform = 'translateX(80vh)';
  sidebar.style.width = '20vh';
  sidebar.style.backgroundColor = 'rgba(211, 211, 211, 0.3)';
}

function closeSidebarMenu() {
  sidebar.style.transform = 'translateX(0px)';
  sidebar.style.width = '50px';
  sidebar.style.backgroundColor = 'inherit';
}

function changeSidebarBorder(e) {
  sidebar.style.borderLeft = '6px solid #ddd';
}

function originalSidebarBorder(e) {
  sidebar.style.borderLeft = '6px solid #a4fbe7';
}

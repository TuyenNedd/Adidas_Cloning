const hamburger = document.querySelector(
    ".header .nav-bar .nav-list .hamburger"
  );
  const mobile_menu = document.querySelector(".header .nav-bar .nav-list ul");
  const menu_item = document.querySelectorAll(
    ".header .nav-bar .nav-list ul li a"
  );
  const header = document.querySelector(".header.container");
  
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    mobile_menu.classList.toggle("active");
  });
  
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      header.style.transform = "translateY(0%)";
      header.style.transition = ".25s ease .1s";
    } else {
      header.style.transform = "translateY(-100%)";
    }
    prevScrollpos = currentScrollPos;
  };
  
  menu_item.forEach((item) => {
    item.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      mobile_menu.classList.toggle("active");
    });
  });
  
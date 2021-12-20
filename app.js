let menuBtn = document.querySelector(".menu-btn");
let mobileMenu = document.querySelector(".mobile-nav");

menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("open");
});

window.addEventListener("resize", () => {
  if (window.innerWidth > 768) {
    mobileMenu.classList.remove("open");
  }
});

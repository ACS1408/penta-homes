const navToggler = document.querySelector(".main-header .navbar-toggler");
navToggler.addEventListener("click", () => {
  document.documentElement.classList.toggle("menu-open");
});

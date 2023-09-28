const navToggler = document.querySelector(".main-header .navbar-toggler");
navToggler.addEventListener("click", () => {
  document.documentElement.classList.toggle("menu-open");
});

const formInputs = document.querySelectorAll(".form-group .form-control");
formInputs?.forEach((input) => {
  input.addEventListener("focus", () => {
    input.closest(".form-group").classList.add("focused");
  });
  input.addEventListener("blur", (e) => {
    const val = e.target.value;
    val === "" && input.closest(".form-group").classList.remove("focused");
  });
});

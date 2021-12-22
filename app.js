import validateLogin from "./js/validateLogin.js";
import validateSignup from "./js/validateSignup.js";

let menuBtn = document.querySelector(".menu-btn");
let mobileMenu = document.querySelector(".mobile-nav");

let prevBtn = document.querySelector(".prev");
let nextBtn = document.querySelector(".next");

const form = document.querySelector("form");

menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("open");
});

window.addEventListener("resize", () => {
  if (window.innerWidth > 768) {
    mobileMenu.classList.remove("open");
  }
});

// Slider
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

nextBtn.addEventListener("click", () => plusSlides(1));
prevBtn.addEventListener("click", () => plusSlides(-1));

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}

//validation
if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    let error, errorMessages;

    if (form.id === "login") {
      const { error: loginError, errorMessages: loginErrorMessages } =
        validateLogin();
      error = loginError;
      errorMessages = loginErrorMessages;
    }

    if (form.id === "signup") {
      const { error: signupError, errorMessages: signupErrorMessages } =
        validateSignup();
      error = signupError;
      errorMessages = signupErrorMessages;
    }

    if (error) {
      const previousErrorsContainer =
        document.querySelector("#error-container");

      const errorsContainer =
        previousErrorsContainer || document.createElement("div");
      errorsContainer.id = "error-container";
      errorsContainer.className =
        "full-width p-1 my-1 border-error bg-error text-error";

      const errorParagraphs = errorMessages.map((errorMessage) => {
        const errorElement = document.createElement("p");
        errorElement.innerText = errorMessage;
        return errorElement;
      });

      errorsContainer.replaceChildren(...errorParagraphs);

      if (!previousErrorsContainer) {
        form.appendChild(errorsContainer);
      }

      return;
    }

    form.removeChild(document.querySelector("#error-container"));
  });
}

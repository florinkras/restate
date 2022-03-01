import validateLogin from "./js/validateLogin.js";
import validateSignup from "./js/validateSignup.js";
import validateCreateProperty from "./js/validateCreateProperty.js";
import validateContactSeller from "./js/validateContactSeller.js";

let menuBtn = document.querySelector(".menu-btn");
let mobileMenu = document.querySelector(".mobile-nav");

let year = new Date().getFullYear();
let footerCopyright = document.querySelector(".copyright-year");
footerCopyright.innerHTML = `All rights reserved &copy; restate ${year}`;

const form = document.querySelectorAll("form");

menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("open");
});

window.addEventListener("resize", () => {
  if (window.innerWidth > 768) {
    mobileMenu.classList.remove("open");
  }
});

//validation
if (form) {
  form.forEach((item) => {
    item.addEventListener("submit", (e) => {
      const errorContainer = document.querySelector("#error-container");

      if (errorContainer) {
        document.querySelector("#error-container").remove();
      }

      let error, errorMessages;

      if (item.id === "login") {
        const { error: loginError, errorMessages: loginErrorMessages } =
          validateLogin();
        error = loginError;
        errorMessages = loginErrorMessages;
      }

      if (item.id === "signup" || item.id === "createAdmin") {
        const { error: signupError, errorMessages: signupErrorMessages } =
          validateSignup();
        error = signupError;
        errorMessages = signupErrorMessages;
      }

      if (item.id === "property") {
        const {
          error: createPropertyError,
          errorMessages: createPropertyMessages,
        } = validateCreateProperty();
        error = createPropertyError;
        errorMessages = createPropertyMessages;
      }

      if (item.id === "contactSeller") {
        const {
          error: contactSellerError,
          errorMessages: contactSellerMessages,
        } = validateContactSeller();
        error = contactSellerError;
        errorMessages = contactSellerMessages;
      }

      if (error) {
        e.preventDefault();

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
          item.appendChild(errorsContainer);
        }

        return;
      }

      item.submit();

      item.removeChild(document.querySelector("#error-container"));
    });
  });
}

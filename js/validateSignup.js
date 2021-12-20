const EMAIL_REGEX = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

const validateSignup = () => {
  let errorMessages = [];
  const firstName = document.getElementById("firstName");
  const lastName = document.getElementById("lastName");
  const email = document.getElementById("email");
  const username = document.getElementById("username");
  const password = document.getElementById("password");

  if (!firstName.value) {
    errorMessages = [...errorMessages, "First Name is required"];
    firstName.classList.add("border-error");
  } else {
    firstName.classList.remove("border-error");
  }

  if (!lastName.value) {
    errorMessages = [...errorMessages, "Last Name is required"];
    lastName.classList.add("border-error");
  } else {
    lastName.classList.remove("border-error");
  }

  if (!email.value) {
    errorMessages = [...errorMessages, "Email is required"];
    email.classList.add("border-error");
  } else if (!email.value.match(EMAIL_REGEX)) {
    errorMessages = [...errorMessages, "Please enter a valid email address"];
    email.classList.add("border-error");
  } else {
    email.classList.remove("border-error");
  }

  if (!username.value) {
    errorMessages = [...errorMessages, "Username is required"];
    username.classList.add("border-error");
  } else if (username.value && username.value.trim().length < 5) {
    errorMessages = [
      ...errorMessages,
      "Username must have at least 5 characters",
    ];
    username.classList.add("border-error");
  } else {
    username.classList.remove("border-error");
  }

  if (!password.value) {
    errorMessages = [...errorMessages, "Password is required"];
    password.classList.add("border-error");
  } else if (password.value && password.value.trim().length < 8) {
    errorMessages = [
      ...errorMessages,
      "Password must have at least 8 characters",
    ];
    password.classList.add("border-error");
  } else {
    password.classList.remove("border-error");
  }

  if (!errorMessages.length) {
    return {
      error: false,
    };
  }

  return {
    error: true,
    errorMessages,
  };
};

export default validateSignup;

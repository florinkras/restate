const validateLogin = () => {
  let errorMessages = [];
  const username = document.getElementById("username");
  const password = document.getElementById("password");

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

export default validateLogin;

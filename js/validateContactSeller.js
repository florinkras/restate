const validateContactSeller = () => {
  let errorMessages = [];

  const firstName = document.getElementById("firstName");
  const lastName = document.getElementById("lastName");
  const email = document.getElementById("email");
  const country = document.getElementById("country");
  const message = document.getElementById("message");

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
  } else {
    email.classList.remove("border-error");
  }

  if (!country.value) {
    errorMessages = [...errorMessages, "country is required"];
    country.classList.add("border-error");
  } else {
    country.classList.remove("border-error");
  }

  if (!message.value) {
    errorMessages = [...errorMessages, "message is required"];
    message.classList.add("border-error");
  } else {
    message.classList.remove("border-error");
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

export default validateContactSeller;

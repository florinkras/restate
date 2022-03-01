const validateCreateProperty = () => {
  let errorMessages = [];

  const title = document.getElementById("title");
  const location = document.getElementById("location");
  const description = document.getElementById("description");
  const price = document.getElementById("price");
  const bedroomsCount = document.getElementById("bedroomsCount");
  const bathroomsCount = document.getElementById("bathroomsCount");
  const image = document.getElementById("image");

  if (!title.value) {
    errorMessages = [...errorMessages, "Title is required"];
    title.classList.add("border-error");
  } else {
    title.classList.remove("border-error");
  }

  if (!location.value) {
    errorMessages = [...errorMessages, "Location is required"];
    location.classList.add("border-error");
  } else {
    location.classList.remove("border-error");
  }

  if (!description.value) {
    errorMessages = [...errorMessages, "Description is required"];
    description.classList.add("border-error");
  } else {
    description.classList.remove("border-error");
  }

  if (!price.value) {
    errorMessages = [...errorMessages, "Price is required"];
    price.classList.add("border-error");
  } else {
    price.classList.remove("border-error");
  }

  if (!bedroomsCount.value) {
    errorMessages = [...errorMessages, "Bedrooms Count is required"];
    bedroomsCount.classList.add("border-error");
  } else {
    bedroomsCount.classList.remove("border-error");
  }

  if (!bathroomsCount.value) {
    errorMessages = [...errorMessages, "Bathrooms Count is required"];
    bathroomsCount.classList.add("border-error");
  } else {
    bathroomsCount.classList.remove("border-error");
  }

  if (!image.value) {
    errorMessages = [...errorMessages, "Image is required"];
    image.classList.add("border-error");
  } else {
    image.classList.remove("border-error");
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

export default validateCreateProperty;

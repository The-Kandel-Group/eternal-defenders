// Service Contact form validation and submission
const validateServiceState = {
  fname: false,
  lname: false,
  email: false,
  phone: false,
  message: false,
};

const namePattern = /^[A-Za-z]+$/;

/**
 * Displays an error message for a given input element and updates the validation state.
 *
 * @param {HTMLElement} inputId - The input element where the error message will be displayed.
 * @param {string} message - The error message to display.
 * @param {string} stateName - The name of the state to update in the validation state object.
 */
function showError(inputId, message, stateName) {
  inputId.style.display = "block";
  inputId.textContent = message;
  validateServiceState[stateName] = false;
}

function hideError(inputId, stateName) {
  inputId.style.display = "none";
  validateServiceState[stateName] = true;
}

// Function to validate first name
function validateFirstName(event) {
  const fnameInput = event.target;
  const fnameError = document.getElementById("fname-error");

  if (fnameInput.value === "") {
    showError(fnameError, "First name is required.", "fname");
  } else if (!namePattern.test(fnameInput.value)) {
    showError(fnameError, "First name must contain only alphabets.", "fname");
  } else if (fnameInput.value.length < 4 || fnameInput.value.length > 20) {
    showError(
      fnameError,
      "First name must be between 4 and 20 characters.",
      "fname"
    );
  } else {
    hideError(fnameError, "fname");
  }
}

// Function to validate last name
function validateLastName(event) {
  const lnameInput = event.target;
  const lnameError = document.getElementById("lname-error");

  if (lnameInput.value === "") {
    showError(lnameError, "Last name is required.", "lname");
  } else if (!namePattern.test(lnameInput.value)) {
    showError(lnameError, "Last name must contain only alphabets.", "lname");
  } else if (lnameInput.value.length < 4 || lnameInput.value.length > 20) {
    showError(
      lnameError,
      "Last name must be between 4 and 20 characters.",
      "lname"
    );
  } else {
    hideError(lnameError, "lname");
  }
}

// Function to validate email
function validateEmail(event) {
  const emailInput = event.target;
  const emailError = document.getElementById("email-error");
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailInput.value === "") {
    showError(emailError, "Email is required.", "email");
  } else if (
    emailInput.value.length < 8 ||
    !emailPattern.test(emailInput.value)
  ) {
    showError(
      emailError,
      "Email is invalid. Must be at least 8 characters and in a valid format.",
      "email"
    );
  } else {
    hideError(emailError, "email");
  }
}

// Function to validate phone
function validatePhone(event) {
  const phoneInput = event.target;
  const phoneError = document.getElementById("phone-error");
  const phoneRegex = /^[+?\-0-9]+$/; // Assumes a 8,15-digit phone number with an optional + symbol

  if (phoneInput.value === "") {
    showError(phoneError, "Phone number is required.", "phone");
  } else if (!phoneRegex.test(phoneInput.value)) {
    showError(phoneError, "Phone number must be valid.", "phone");
  } else if (phoneInput.value.length < 8 || phoneInput.value.length > 15) {
    showError(
      phoneError,
      "Phone number must be between 8 and 15 digits and may include an optional + symbol.",
      "phone"
    );
  } else {
    hideError(phoneError, "phone");
  }
}

// Function to validate message message
function validateMessage(event) {
  const messageInput = event.target;
  const messageError = document.getElementById("message-error");

  if (messageInput.value.length < 5 || messageInput.value.length > 500) {
    showError(
      messageError,
      "Message must be between 5 and 500 characters.",
      "message"
    );
  } else {
    hideError(messageError, "message");
  }
}

// Add event listeners for validation
document.addEventListener("DOMContentLoaded", function () {
  const serviceform = document.getElementById("serviceform");

  const fnameInput = document.querySelector('input[name="fname"]');
  const lnameInput = document.querySelector('input[name="lname"]');
  const emailInput = document.querySelector('input[name="email"]'); // Fix reference to remail
  const phoneInput = document.querySelector('input[name="phone"]');
  const messageInput = document.getElementById("message");

  // Trigger validation when input changes
  fnameInput.addEventListener("input", validateFirstName);
  lnameInput.addEventListener("input", validateLastName);
  emailInput.addEventListener("input", validateEmail);
  phoneInput.addEventListener("input", validatePhone);
  messageInput.addEventListener("input", validateMessage);

  // Form submission
  serviceform.addEventListener("submit", function (e) {
    e.preventDefault();

    // Perform final validation
    validateFirstName({ target: fnameInput });
    validateLastName({ target: lnameInput });
    validateEmail({ target: emailInput });
    validatePhone({ target: phoneInput });
    validateMessage({ target: messageInput });

    // Final validation before submission
    if (Object.values(validateServiceState).every((state) => state === true)) {
      const formData = {
        firstName: fnameInput.value,
        lastName: lnameInput.value,
        email: emailInput.value,
        phone: phoneInput.value,
        message: messageInput.value,
      };

      console.log("Form is valid. Form data:", formData);

      // Reset the form
      serviceform.reset();

      // Reset validation state
      for (let key in validateServiceState) {
        validateServiceState[key] = false;
      }

      // Disable submit button after reset
      console.log("Form has been reset.");
      return;
    } else {
      return;
    }
  });
});

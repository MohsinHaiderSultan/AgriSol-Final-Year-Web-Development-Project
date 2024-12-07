// hamburger button
function toggleMenu() {
    var menu = document.getElementById("mobileMenu");
    if (menu.classList.contains("hidden")) {
      menu.classList.remove("hidden");
      menu.classList.add("block");
    } else {
      menu.classList.remove("block");
      menu.classList.add("hidden");
    }
  }

// go to top button
var scrollToTopBtn = document.getElementById("scrollToTopBtn");
window.onscroll = function() {scrollFunction()};


function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
scrollToTopBtn.style.display = "block";
} else {
scrollToTopBtn.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}


// profile
const dropdownButton = document.getElementById('dropdownAvatarNameButton');
const dropdownMenu = document.getElementById('dropdownAvatarName');

dropdownButton.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});
document.addEventListener('click', (event) => {
  if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.add('hidden');
  }
});



document.addEventListener("DOMContentLoaded", function() {
  const welcomeMessage = document.getElementById('welcomeMessage');
  const content = document.querySelector('.content');

  if (welcomeMessage) {
      welcomeMessage.style.display = 'block';

      setTimeout(function() {
          welcomeMessage.style.display = 'none';
          content.style.display = 'block';
      }, 2000); // 2000 milliseconds = 2 seconds
  } else {
      content.style.display = 'block';
  }
});



// validations
const signUpForm = document.querySelector('.sign-up-container form');
const signInForm = document.querySelector('.sign-in-container form');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm_password');
const passwordStrengthIndicator = document.getElementById('password-strength');

// Email validation
function validateEmail(email) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

// Password validation
function validatePassword(password) {
  const strongPassword = new RegExp('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}$');
  return strongPassword.test(password);
}

// Confirm password validation
function validateConfirmPassword(password, confirmPassword) {
  return password === confirmPassword;
}

// Password strength checking
function checkPasswordStrength(password) {
  const strength = {
    weak: 'Weak',
    medium: 'Medium',
    strong: 'Strong'
  };

  if (password.length < 8) {
    passwordStrengthIndicator.textContent = strength.weak;
    passwordStrengthIndicator.classList.add('text-red-500');
  } else if (validatePassword(password)) {
    passwordStrengthIndicator.textContent = strength.strong;
    passwordStrengthIndicator.classList.add('text-green-500');
  } else {
    passwordStrengthIndicator.textContent = strength.medium;
    passwordStrengthIndicator.classList.add('text-yellow-500');
  }
}

// Form submission handling
signUpForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = emailInput.value.trim();
  const password = passwordInput.value.trim();
  const confirmPassword = confirmPasswordInput.value.trim();

  if (!validateEmail(email)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (!validatePassword(password)) {
    alert('Please enter a strong password.');
    return;
  }

  if (!validateConfirmPassword(password, confirmPassword)) {
    alert('Passwords do not match.');
    return;
  }

  // Submit the form
  signUpForm.submit();
});

signInForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = emailInput.value.trim();
  const password = passwordInput.value.trim();

  if (!validateEmail(email)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (!validatePassword(password)) {
    alert('Please enter a valid password.');
    return;
  }

  // Submit the form
  signInForm.submit();
});

// Password input event listener
passwordInput.addEventListener('input', () => {
  checkPasswordStrength(passwordInput.value.trim());
});
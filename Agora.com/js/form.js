// const form = document.getElementById('form');
// const nameInput = document.getElementById('name');
// const emailInput = document.getElementById('email');
// const phoneInput = document.getElementById('phone');
// const messageInput = document.getElementById('message');

// // Show error function
// function showError(input, message) {
//     const formControl = input.parentElement;
//     formControl.className = 'form-control error';
//     const small = formControl.querySelector('small');
//     small.innerText = message;
//     small.style.color = '#e74c3c'; // Set error message color
// }

// // Show success function
// function showSuccess(input) {
//     const formControl = input.parentElement;
//     formControl.className = 'form-control success';
//     input.style.borderColor = '#23cc71'; // Set input border color
// }

// // Check email validity
// function isValidEmail(email) {
//     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

// // Event Listener for form submission
// form.addEventListener('submit', function(e) {
//     e.preventDefault();

//     if(nameInput.value.trim() === '') {
//         showError(nameInput, 'Full name is required');
//     } else {
//         showSuccess(nameInput);
//     }

//     if(emailInput.value.trim() === '') {
//         showError(emailInput, 'Email is required');
//     } else if (!isValidEmail(emailInput.value)) {
//         showError(emailInput, 'Email is not valid');
//     } else {
//         showSuccess(emailInput);
//     }

//     if(phoneInput.value.trim() === '') {
//         showError(phoneInput, 'Phone number is required');
//     } else {
//         showSuccess(phoneInput);
//     }

//     if(messageInput.value.trim() === '') {
//         showError(messageInput, 'Message is required');
//     } else {
//         showSuccess(messageInput);
//     }
// });

// // Event listener for inputs to reset border color on click
// [nameInput, emailInput, phoneInput, messageInput].forEach(input => {
//     input.addEventListener('click', function() {
//         input.style.borderColor = ''; // Reset border color
//     });
// });

// document.getElementById('form').addEventListener('submit', function(event) {
//     // Prevent default form submission
//     event.preventDefault();

//     // Validate form inputs
//     var name = document.getElementById('name').value.trim();
//     var email = document.getElementById('email').value.trim();
//     var phone = document.getElementById('phone').value.trim();
//     var message = document.getElementById('message').value.trim();
//     var errors = false;

//     if (name === '') {
//         document.getElementById('name-error').style.display = 'block';
//         errors = true;
//     } else {
//         document.getElementById('name-error').style.display = 'none';
//     }

//     if (email === '') {
//         document.getElementById('email-error').style.display = 'block';
//         errors = true;
//     } else {
//         document.getElementById('email-error').style.display = 'none';
//     }

//     if (phone === '') {
//         document.getElementById('phone-error').style.display = 'block';
//         errors = true;
//     } else {
//         document.getElementById('phone-error').style.display = 'none';
//     }

//     if (message === '') {
//         document.getElementById('message-error').style.display = 'block';
//         errors = true;
//     } else {
//         document.getElementById('message-error').style.display = 'none';
//     }

//     // If no errors, submit the form
//     if (!errors) {
//         document.getElementById('success-message').style.display = 'block';
//         // You can submit the form here if needed
//         // document.getElementById('form').submit();
//     }
// });
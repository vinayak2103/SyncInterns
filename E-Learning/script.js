// script.js
document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    // Perform sign up logic
    // ...
  });
  
  document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var file = document.getElementById('fileInput').files[0];
    // Perform upload logic
    // ...
  });
  
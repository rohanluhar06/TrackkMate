
function showForm(formId) {
  const loginForm = document.getElementById('login-form');
  const registerForm = document.getElementById('register-form');

  loginForm.style.display = 'none';
  registerForm.style.display = 'none';

  document.getElementById(formId).style.display = 'block';
}
const nextButton = document.getElementById('next-button');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');
const passwordRequirements = document.getElementById('password-requirements');
const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');

nextButton.addEventListener('click', () => {
  const groupName = document.getElementById('group-name').value;
  const password = passwordInput.value;
  const confirmPassword = confirmPasswordInput.value;

  if (!groupName || !password || !confirmPassword) {
    alert('Please fill in all fields.');
    return;
  }

  if (password !== confirmPassword) {
    alert('Passwords do not match.');
    return;
  }

  alert('Step 1 completed. Moving to Step 2.');
  step1.classList.remove('active');
  step1.classList.add('inactive');
  step2.classList.remove('inactive');
  step2.classList.add('active');
});

passwordInput.addEventListener('input', () => {
  const value = passwordInput.value;
  const requirements = [
    value.length >= 8,
    /[A-Z]/.test(value),
    /[a-z]/.test(value),
    /[0-9]/.test(value),
    /[!@#$%^&*(),.?":{}|<>]/.test(value),
  ];

  passwordRequirements.style.color = requirements.every(r => r) ? 'green' : 'red';
});




  
  let form = document.querySelector('form[action="submit.php"]');
  let errorDiv = document.getElementById('errorMsg');

 
  form.addEventListener('submit', function (e) {
    e.preventDefault(); 
    errorDiv.innerHTML = ''; 
    errorDiv.style.display = 'none'; 
    let errors = [];

    
    let fname = document.getElementById('fname1').value.trim();
    let lname = document.getElementById('lname').value.trim();
    let email = document.getElementById('email1').value.trim();
    let phone = document.getElementById('phone1').value.trim();
    if (!fname || !lname || !email || !phone) {
      errors.push("All fields (First Name, Last Name, Email, Phone) are required.");
    }

    
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email && !emailPattern.test(email)) {
      errors.push("Please enter a valid email address.");
    }

    
    let pass = document.getElementById('pass1').value;
    let confirm = document.getElementById('confirm1').value;
    if (pass === '' || confirm === '') {
      errors.push("Both password fields are required.");
    } else if (pass !== confirm) {
      errors.push("Passwords do not match.");
    }

    
    let propertyChecks = ['house1', 'apartment1', 'commercial1', 'land1'];
    let oneChecked = propertyChecks.some(id => document.getElementById(id)?.checked);
    if (!oneChecked) {
      errors.push("Please select at least one property type.");
    }

    
    let agree = document.getElementById('terms1'); 
    if (!agree || !agree.checked) {
      errors.push("You must agree to the terms and conditions.");
    }

    
    if (errors.length > 0) {
      errorDiv.innerHTML = errors.map(err => `<p>${err}</p>`).join('');
      errorDiv.style.display = 'block';
    } else {
      form.submit(); 
    }
  });


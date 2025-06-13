

window.onload = function () {
    const form = document.querySelector("form[action='submit.php']");
    const errorMsg = document.getElementById("errorMsg");
  
    form.addEventListener("submit", function (e) {
      let errors = [];
  
      const fname = document.getElementById("fname1").value.trim();
      const lname = document.getElementById("lname1").value.trim();
      const email = document.getElementById("email1").value.trim();
      const phone = document.getElementById("phone1").value.trim();
      const pass = document.getElementById("pass1").value;
      const confirm = document.getElementById("confirm1").value;
  
      
      if (fname === "" || lname === "") {
        errors.push("First and last name are required.");
      }
  
     
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        errors.push("Please enter a valid email address.");
      }
  
     
      if (!/^\d{10,15}$/.test(phone)) {
        errors.push("Phone number must be 10 to 15 digits.");
      }
  
      if (pass === "" || confirm === "" || pass !== confirm) {
        errors.push("Passwords must match and cannot be empty.");
      }
  
      
      const propertyTypes = ["house1", "apartment1", "commercial1", "land1"];
      const isAnyChecked = propertyTypes.some(id => document.getElementById(id)?.checked);
      if (!isAnyChecked) {
        errors.push("Please select at least one preferred property type.");
      }
  
     
      if (errors.length > 0) {
        e.preventDefault();
        errorMsg.innerHTML = errors.map(err => `<div>⚠️ ${err}</div>`).join("");
      } else {
        errorMsg.innerHTML = "";
      }
    });
  
    const watchFields  = ["fname1", "lname1", "email1", "phone1", "pass1", "confirm1"];
    watchFields.forEach(id => {
      const input = document.getElementById(id);
      if (input) {
        input.addEventListener("input", () => {
          input.style.border = input.value.trim() === "" ? "2px solid red" : "";
        });
      }
    });
  };
  
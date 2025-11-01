function validatePassword() {
    var password = document.getElementById("password").value;
    if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
      window.location.href = window.location.href; // redirect to the same page
      return false;
    }
    if (!password.match(/[A-Z]/)) {
      alert("Password must contain at least one uppercase letter.");
      window.location.href = window.location.href; // redirect to the same page
      return false;
    }
    if (!password.match(/[a-z]/)) {
      alert("Password must contain at least one lowercase letter.");
      window.location.href = window.location.href; // redirect to the same page
      return false;
    }
    if (!password.match(/[0-9]/)) {
      alert("Password must contain at least one digit.");
      window.location.href = window.location.href; // redirect to the same page
      return false;
    }
    alert("Login Sucessfully");
    return true;
  }
  
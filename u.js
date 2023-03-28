function validateForm() {
    let x = document.getElementById("fname").value;
    if (x == "") {
      alert("Name must be filled out");
      document.getElementById("fname").focus();
      return false;
    }
    let y = document.getElementById("cl").value;
    if (y == "") {
      alert("Class must be filled out");
      document.getElementById("cl").focus();
      return false;
    }
    let z = document.getElementById("roll").value;
    if (z == "") {
      alert("Roll Number must be filled out");
      document.getElementById("roll").focus();
      return false;
    }
    let a = document.getElementById("mob").value;
    if (a == "") {
      alert("Mobile Number must be filled out");
      document.getElementById("mob").focus();
      return false;
    }
    let b = document.getElementById("em").value;
    if (b == "") {
      alert("Email Id must be filled out");
      document.getElementById("em").focus();
      return false;
    }
    let c = document.getElementById("add").value;
    if (c == "") {
      alert("Address must be filled out");
      document.getElementById("add").focus();
      return false;
    }
   
  }
  
  
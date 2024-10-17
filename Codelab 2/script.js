function addNumbers() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);

  if (!isNaN(num1) && !isNaN(num2)) {
    var result = num1 + num2;
    document.getElementById("result").textContent = result;
  } else {
    document.getElementById("result").textContent = "Input valid numbers";
  }
}

function resetForm() {
  document.getElementById("num1").value = "";
  document.getElementById("num2").value = "";
  document.getElementById("result").textContent = "0";
}

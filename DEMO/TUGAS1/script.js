let display = document.getElementById("display");
let currentInput = "";

function appendNumber(number) {
  currentInput += number;
  display.value = currentInput;
}

function appendOperator(operator) {
  currentInput += operator;
  display.value = currentInput;
}

function calculate() {
  try {
    currentInput = eval(currentInput);
    display.value = currentInput;
  } catch (e) {
    display.value = "Error";
    currentInput = "";
  }
}

function clearDisplay() {
  currentInput = "";
  display.value = "";
}

let input1 = '';
let input2 = '';
let operator = '';
let isSecond = false;

function press(num) {
  if (!isSecond) {
    input1 += num;
    document.getElementById('display').innerHTML = input1;
  } else {
    input2 += num;
    document.getElementById('display').innerHTML = input2;
  }
}

function setOp(op) {
  if (input1 === '') return;
  operator = op;
  isSecond = true;
  document.getElementById('display').innerHTML = '';
}

function clearDisplay() {
  input1 = '';
  input2 = '';
  operator = '';
  isSecond = false;
  document.getElementById('display').innerHTML = '0';
}

function calculate() {
  const num1 = parseFloat(input1);
  const num2 = parseFloat(input2);
  let result;

  if (isNaN(num1) || isNaN(num2)) {
    result = "Err";
  } else {
    switch (operator) {
      case '+': result = num1 + num2; break;
      case '-': result = num1 - num2; break;
      case '*': result = num1 * num2; break;
      case '/': result = num2 !== 0 ? num1 / num2 : "Err"; break;
      case 'mod': result = num2 !== 0 ? num1 % num2 : "Err"; break;
      case '^': result = Math.pow(num1, num2); break;
      default: result = "Err";
    }
  }

  document.getElementById('display').innerHTML = result;
  input1 = result.toString();
  input2 = '';
  operator = '';
  isSecond = false;
}

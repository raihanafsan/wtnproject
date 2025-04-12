const display = document.getElementById("display");
const expressionDisplay = document.getElementById("expression");

function appendToDisplay(input) {
    expressionDisplay.innerHTML += input;
    display.innerHTML = expressionDisplay.innerHTML;
}

function clearDisplay() {
    expressionDisplay.innerHTML = "";
    display.innerHTML = "";
}

function calculate() {
    try {
        const result = eval(expressionDisplay.innerHTML);
        display.innerHTML = result;
    } catch (error) {
        display.innerHTML = "Input Error";
    }
}
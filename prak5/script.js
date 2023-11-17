// by Giovanni Lucy - 121140060
// Praktikum Pemrograman Web RC - Tugas 5

const inputBox = document.getElementById('inputBox');
const clearButton = document.getElementById('clear');
const delButton = document.getElementById('del');
const percentageButton = document.getElementById('%');
const operatorButtons = document.querySelectorAll('.tombol#operator');
const numberButtons = document.querySelectorAll('.tombol#number');
const plusMinusButton = document.getElementById('plusMinus');
const decimalButton = document.getElementById('decimal');
const equalButton = document.getElementById('equal');

function display(value) {
  if (value === '=') {
    try {
      const result = eval(inputBox.value);
      inputBox.value = result;
    } catch (error) {
      inputBox.value = 'Error';
    }
  } else if (value === 'clear') {
    inputBox.value = '';
  } else if (value === 'del') {
    inputBox.value = inputBox.value.slice(0, -1);
  } else if (value === 'plusMinus') {
    if (inputBox.value.charAt(0) === '-') {
      inputBox.value = inputBox.value.slice(1);
    } else {
      inputBox.value = '-' + inputBox.value;
    }
  } else {
    inputBox.value += value;
  }
}

clearButton.addEventListener('click', () => display('clear'));
delButton.addEventListener('click', () => display('del'));
percentageButton.addEventListener('click', () => display('%'));
plusMinusButton.addEventListener('click', () => display('plusMinus'));
decimalButton.addEventListener('click', () => display('.'));
equalButton.addEventListener('click', () => display('='));

numberButtons.forEach(button => {
  button.addEventListener('click', () => display(button.textContent));
});

operatorButtons.forEach(button => {
  button.addEventListener('click', () => display(button.textContent));
});

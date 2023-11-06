// by KHAIRANI BILQIS - 121140091
// Praktikum Pemrograman Web RB - Tugas 5

// Mengambil elemen-elemen yang diperlukan dari DOM
const inputBox = document.getElementById('inputBox');
const clearButton = document.getElementById('clear');
const delButton = document.getElementById('del');
const percentageButton = document.getElementById('%');
const operatorButtons = document.querySelectorAll('.tombol#operator');
const numberButtons = document.querySelectorAll('.tombol#number');
const plusMinusButton = document.getElementById('plusMinus');
const decimalButton = document.getElementById('decimal');
const equalButton = document.getElementById('equal');

// Fungsi untuk menampilkan teks di inputBox
function display(value) {
  if (value === '=') {
    try {
      // Evaluasi ekspresi matematika
      const result = eval(inputBox.value);
      inputBox.value = result;
    } catch (error) {
      inputBox.value = 'Error';
    }
  } else if (value === 'clear') {
    // Menghapus inputBox
    inputBox.value = '';
  } else if (value === 'del') {
    // Menghapus karakter terakhir
    inputBox.value = inputBox.value.slice(0, -1);
  } else if (value === 'plusMinus') {
    // Toggle tanda plus/minus
    if (inputBox.value.charAt(0) === '-') {
      inputBox.value = inputBox.value.slice(1);
    } else {
      inputBox.value = '-' + inputBox.value;
    }
  } else {
    // Menambahkan karakter ke inputBox
    inputBox.value += value;
  }
}

// Menambahkan event listener ke tombol-tombol
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
// Giovanni Lucy - 121140060
// Praktikum Pemrograman Web RB - Prak 4

const input = prompt("Input angka:");
const angka = Number(input);

if (isNaN(angka)) {
  console.log("Invalid input.");
} else {
  let Ganjil = 0;
  let genap = 0;

  for (let i = 1; i <= angka; i++) {
    if (i % 2 === 0) {
      genap++;
    } else {
      Ganjil++;
    }
  }

  console.log(`Angka : ${angka}`);
  console.log(`Jumlah bilanhan ganjil: ${Ganjil}`);
  console.log(`Jumlah bilangan genap: ${genap}`);
}

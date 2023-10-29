// by KHAIRANI BILQIS - 121140091
// Praktikum Pemrograman Web RB - Tugas 4

console.log("Menghitung Bilangan Ganjil dan Genap")

// Memasukkan nilai 
let inputNumber = 90;
console.log(`Bilangan bulat positif: ${inputNumber}`);
    
if (inputNumber <= 0) {
    // Memastikan input adalah bilangan bulat positif
    console.log("Masukkan bilangan bulat positif yang valid.");
} else {
    // Inisialisasi jumlah bilangan ganjil dan genap
    let jumlahGanjil = 0;
    let jumlahGenap = 0;

    // Melakukan perulangan dari 1 hingga bilangan yang dimasukkan
    for (let i = 1; i <= inputNumber; i++) {
        if (i % 2 === 0) {
            jumlahGenap++; // Bilangan Genap
        } else {
            jumlahGanjil++; // Bilangan Ganjil
        }
    }

    // Menampilkan hasil perhitungan di dalam console
    console.log("Hasil:");
    console.log(`Jumlah bilangan ganjil: ${jumlahGanjil}`);
    console.log(`Jumlah bilangan genap: ${jumlahGenap}`);
}



// // = assignment operator
// let a = 10;

// // == comparison operator tanpa melihat tipe data
// if(10 == '10'){ // jika a sama dengan 10
//     console.log("a sama dengan 10");
// }

// // === strict comparison / equality operator melihat tipe data
// if(a === '10'){
//     console.log("if : a sama dengan 10");
// } else if(a === 10){
//     consoe.log("else if : a sama dengan 10");
// }


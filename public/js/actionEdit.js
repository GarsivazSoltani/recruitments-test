import * as generate from "./fillElements.js";
import * as fillTable from "./fillTable.js";

console.log('لیست شغل‌ها');
// console.log(works); // جدول مشاغل
// console.log(cities); // جدول استان‌ها
console.log(condition); // جدول استان‌ها

const city = document.getElementById('city');

generate.generateField(1, works);
generate.generateCity(1, city);
// fillTable.generateTableRow(condition);

const careerField = document.getElementById('careerField');
careerField.addEventListener('change', function(e){
    generate.generateField(e.target.value, works);
});


// اتصال استان و شهر
const state = document.getElementById('state');
state.addEventListener('change', function(e){
    let id = Number(e.target.value);
    generate.generateCity(id, city);
});
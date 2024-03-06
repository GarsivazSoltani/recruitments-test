import * as generate from "./fillElements.js";
import * as fillTable from "./fillTable.js";

console.log('لیست شغل‌ها');
// console.log(works); // جدول مشاغل
// console.log(cities); // جدول استان‌ها
// console.log(condition); // جدول مشاغل
// console.log(recruitmentID); // شناسه آزمون

const city = document.getElementById('city');

generate.generateField(1, works, null);
generate.generateCity(1, city);
fillTable.generateTableRow(condition);

const careerField = document.getElementById('careerField');
careerField.addEventListener('change', function(e){
    generate.generateField(e.target.value, works, null);
});

// اتصال استان و شهر
const state = document.getElementById('state');
state.addEventListener('change', function(e){
    let id = Number(e.target.value);
    generate.generateCity(id, city);
});


// مشخص کردن ظرفیت براساس شهر یا استان
const SwitchCapacity = document.getElementById('SwitchCapacity');
capacity2.setAttribute("class", 'd-none');
SwitchCapacity.addEventListener('click', function(e){
    if(e.target.checked){
        capacity1.setAttribute("class", 'col-md-4');
        capacity2.setAttribute("class", 'd-none');
    }else{
        capacity1.setAttribute("class", 'col-md-4');
        capacity2.setAttribute("class", 'col-md-4');
    }
});

// مشخص کردن ظرفیت به تفکیک زن یا مرد
const SwitchSex = document.getElementById('SwitchSex');
SwitchSex.addEventListener('change', function (e) {
    clearCapacity();
    if(e.target.checked){
        sexAll.setAttribute("class", 'col-md-4');
        sexWoman.setAttribute("class", 'd-none');
        sexMan.setAttribute("class", 'd-none');
    }else{
        sexAll.setAttribute("class", 'd-none');
        sexWoman.setAttribute("class", 'col-md-4');
        sexMan.setAttribute("class", 'col-md-4');
    }
});

function clearCapacity() {
    capacityAll.value = '';
    capacityWoman.value = '';
    capacityMan.value = '';
};






const cityCheck = document.getElementById('cityCheck');
console.log(cityCheck.value);
const btnJob = document.getElementById('addJob');
btnJob.addEventListener("submit", function (e) {
    // e.preventDefault();
    if (SwitchCapacity.checked) {
        cityCheck.value = true;
    }else{
        cityCheck.value = false;
    }
});
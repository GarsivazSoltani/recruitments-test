import * as generate from "../fillElements.js";
import * as fillTable from "../fillTable.js";

console.log('لیست شغل‌ها');
// console.log(works); // جدول مشاغل
// console.log(cities); // جدول استان‌ها
// console.log(condition); // جدول استان‌ها

const city = document.getElementById('city');
generate.generateField(condition.work_id, works);
// fillTable.generateTableRow(condition);

const careerField = document.getElementById('careerField');
careerField.addEventListener('change', function(e){
    generate.generateField(e.target.value, works);
});

// اتصال استان و شهر
const state = document.getElementById('state');
generate.generateCity(state.value, city);
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
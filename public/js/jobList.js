const btnJob = document.getElementById('addJob');
const addJobItem = document.getElementById('jobItems');
const addTableRow = document.getElementById('rowTableJob');
const careerFieldData = document.getElementById('careerField');
const cityData = document.getElementById('city');
const selectSex = document.getElementById('sex');
const capacityAll = document.getElementById('capacity');
const capacityWoman = document.getElementById('capacityWoman');
const capacityMan = document.getElementById('capacityMan');
const val1 = document.getElementById('val1');
const val2 = document.getElementById('val2');
const val3 = document.getElementById('val3');

const state = document.getElementById('state');
const zarfiyat = document.getElementById('zarfiyat');
const zarfiyat1 = document.getElementById('zarfiyat1');
const zarfiyat2 = document.getElementById('zarfiyat2');

const title1 = document.getElementById('title1');
const title2 = document.getElementById('title2');
const title3 = document.getElementById('title3');

let user = localStorage.getItem('user');
user = JSON.parse(user);

title1.innerHTML = `آزمون استخدامی <span style="color: steelblue">${user.name}</span>`;
title2.innerHTML = `تعداد مورد نیاز <span style="color: steelblue">${user.experience} نفر</span>`;
title3.innerHTML = `شرایط آزمون <span style="color: steelblue">${user.conditions}</span>`;


btnJob.addEventListener("submit", function (e) {
    e.preventDefault();
    if (capacityAll.value > 0 || capacityWoman.value > 0 || capacityMan.value > 0){
        generateRow(e);
    }
    // e.stopPropagation()
});


let counter = 0;
function generateRow(e){
    counter++;

    let newTr = document.createElement('tr');
    let newTh = document.createElement('th');
    newTh.setAttribute("scope", "row");
    newTh.innerHTML = counter;
    let newTd1 = document.createElement('td');
    newTd1.innerHTML = careerFieldData.value;
    let newTd2 = document.createElement('td');
    newTd2.innerHTML = cityData.value;
    let newTd3 = document.createElement('td');
    newTd3.innerHTML = state.value;
    

    let newTd4 = document.createElement('td');
    let newTd5 = document.createElement('td');
    let newTd6 = document.createElement('td');
    if(capacityAll.value){
        newTd4.innerHTML = capacityAll.value;
    }else{
        newTd5.innerHTML = capacityWoman.value;
        newTd6.innerHTML = capacityMan.value;
        newTd4.innerHTML = Number(capacityWoman.value) + Number(capacityMan.value);
    }
    
    newTr.append(newTh)
    newTr.append(newTd1);
    newTr.append(newTd2);
    newTr.append(newTd3);
    newTr.append(newTd4);
    newTr.append(newTd5);
    newTr.append(newTd6);
    addTableRow.append(newTr);
    
    clearCapacity();
}

function clearCapacity() {
    capacityAll.value = '';
    capacityWoman.value = '';
    capacityMan.value = '';
};


const SwitchSex = document.getElementById('SwitchSex');
SwitchSex.addEventListener('change', function (e) {
    clearCapacity();
    if(e.target.checked){
        val1.setAttribute("class", 'col-md-4');
        val2.setAttribute("class", 'd-none');
        val3.setAttribute("class", 'd-none');
    }else{
        val1.setAttribute("class", 'd-none');
        val2.setAttribute("class", 'col-md-4');
        val3.setAttribute("class", 'col-md-4');
    }
});


const SwitchZarfiyat = document.getElementById('SwitchZarfiyat');
zarfiyat2.setAttribute("class", 'd-none');
SwitchZarfiyat.addEventListener('click', function (e) {
    if(e.target.checked){
        zarfiyat1.setAttribute("class", 'col-md-4');
        zarfiyat2.setAttribute("class", 'd-none');
        state.value = '';
    }else{
        zarfiyat1.setAttribute("class", 'col-md-4');
        zarfiyat2.setAttribute("class", 'col-md-4');;
    }
});
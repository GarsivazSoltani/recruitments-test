const btnJob = document.getElementById('addJob');
const addJobItem = document.getElementById('jobItems');
const addTableRow = document.getElementById('rowTableJob');
const careerFieldData = document.getElementById('careerField');
const cityData = document.getElementById('city');
const selectsex = document.getElementById('sex');
const capacityAll = document.getElementById('capacity');
const capacityWoman = document.getElementById('capacityWoman');
const capacityMan = document.getElementById('capacityMan');
const val1 = document.getElementById('val1');
const val2 = document.getElementById('val2');
const val3 = document.getElementById('val3');

selectsex.addEventListener('change', function (e) {
    // console.log(e.target.value);
    clearCapacity();
    if(e.target.value == 'بدون تفکیک'){
        val1.setAttribute("class", 'col-md-4');
        val2.setAttribute("class", 'd-none');
        val3.setAttribute("class", 'd-none');
    }else{
        val1.setAttribute("class", 'd-none');
        val2.setAttribute("class", 'col-md-4');
        val3.setAttribute("class", 'col-md-4');
    }
});

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
    let newTd4 = document.createElement('td');
    let newTd5 = document.createElement('td');
    if(capacityAll.value){
        newTd3.innerHTML = capacityAll.value;
    }else{
        newTd4.innerHTML = capacityWoman.value;
        newTd5.innerHTML = capacityMan.value;
        newTd3.innerHTML = Number(capacityWoman.value) + Number(capacityMan.value);
    }
    
    newTr.append(newTh)
    newTr.append(newTd1);
    newTr.append(newTd2);
    newTr.append(newTd3);
    newTr.append(newTd4);
    newTr.append(newTd5);
    addTableRow.append(newTr);
    
    clearCapacity();
}

function clearCapacity() {
    capacityAll.value = '';
    capacityWoman.value = '';
    capacityMan.value = '';
};

const fetchData = fetch('http://localhost:8002/register-test');
fetchData.then((response) => {
    // دستورات مربوط به استفاده از پاسخ دریافت شده
    // console.log(response);
    console.log(response);
})
.catch((error) => {
    // دستورات مدیریت خطا
    console.log('خطا');
});



// inputElem.addEventListener("keydown", function (event) {
//     let newTodoValue = event.target.value.trim();
  
//     if (event.keyCode === 13) {
//       if (newTodoValue) {
//         inputElem.value = "";
//         addNewTodo(newTodoValue);
//       }
//     }
//   });
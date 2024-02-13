const btnJob = document.getElementById('addJob');
const addJobItem = document.getElementById('jobItems');
const addTableRow = document.getElementById('rowTableJob');
const careerFieldData = document.getElementById('careerField');
const cityData = document.getElementById('city');
const capacityData = document.getElementById('capacity');

btnJob.addEventListener("submit", function (e) {
    e.preventDefault();
    generateRow(e);
    e.stopPropagation()
});


let counter = 1;
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
    newTd3.innerHTML = capacityData.value;
    
    newTr.append(newTh)
    newTr.append(newTd1);
    newTr.append(newTd2);
    newTr.append(newTd3);
    addTableRow.append(newTr);


    // console.log(addTableRow);
}


const fetchData = fetch('http://localhost:8002/register-test');
fetchData.then((response) => {
    // دستورات مربوط به استفاده از پاسخ دریافت شده
    // console.log(response);
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
const btnRegister = document.getElementById('btnRegister');
const testName = document.getElementById('testName');
const experience = document.getElementById('experience');
const testConditions = document.getElementById('testConditions');

window.addEventListener('change', function (e) {
    console.log(testName.value);
    let person = {
        name: testName.value,
        experience: experience.value,
        conditions: testConditions.value
    };
    person = JSON.stringify(person);
    localStorage.setItem('user', person);
});




// btnRegister.addEventListener("click", function (e) {
//     console.log('گرسی تست');
//     // e.preventDefault();
// });
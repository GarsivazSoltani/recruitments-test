console.log(data);

const careerField = document.getElementById('careerField');
careerField.addEventListener('change', function(e){
    console.log('id:', e.target.value, '|', careerField.selectedIndex+1);
    // console.log('name:', careerField[careerField.selectedIndex].innerHTML);
    // generateField(e.target.value);
    generateField();
});


const field = document.getElementById('field');
const grade = document.getElementById('grade');
const title = document.getElementById('title');
const task = document.getElementById('task');
const type = document.getElementById('type');
const skill = document.getElementById('skill');
const cours = document.getElementById('cours');

function generateField(){
    data.forEach(element => {
        // console.log(id, '|', element.id, '|', element.title);
        if (careerField.selectedIndex+1 == element.id) {            
            field.innerHTML = '';
            // opt.value = element.certificate;
            certificateData = JSON.parse(element.certificate);
            // console.log(certificateData);
            certificateData.forEach(item => {
                let option = document.createElement('option');
                option.text = item;
                field.append(option);
            });

            // educations data change
            grade.innerHTML = '';
            educationsData = JSON.parse(element.educations);
            educationsData.forEach(item => {
                let option = document.createElement('option');
                option.text = item;
                grade.append(option);
            });

            // type data change
            type.innerHTML = element.type;

            // title data change
            title.innerHTML = element.definition;

            // task data change
            task.innerHTML = '';
            taskData = JSON.parse(element.task);
            taskData.forEach(item => {
                let li = document.createElement('li');
                li.innerHTML = item;
                task.append(li);
            });

            // skill data change
            skill.innerHTML = '';
            skillData = JSON.parse(element.skill);
            skillData.forEach(item => {
                let li = document.createElement('li');
                li.innerHTML = item;
                skill.append(li);
            });

            // cours data change
            cours.innerHTML = '';
            coursData = JSON.parse(element.cours);
            coursData.forEach(item => {
                let li = document.createElement('li');
                li.innerHTML = item;
                cours.append(li);
            });
            
        }
    });
}
generateField();




// const state = document.getElementById('state');
// const zarfiyat = document.getElementById('zarfiyat');
// const zarfiyat1 = document.getElementById('zarfiyat1');
// const zarfiyat2 = document.getElementById('zarfiyat2');

// const title1 = document.getElementById('title1');
// const title2 = document.getElementById('title2');
// const title3 = document.getElementById('title3');

// انتخاب شهر و استان
const SwitchCapacity = document.getElementById('SwitchCapacity');
capacity2.setAttribute("class", 'd-none');
SwitchCapacity.addEventListener('click', function (e) {
    if(e.target.checked){
        capacity1.setAttribute("class", 'col-md-4');
        capacity2.setAttribute("class", 'd-none');
    }else{
        capacity1.setAttribute("class", 'col-md-4');
        capacity2.setAttribute("class", 'col-md-4');
    }
});


// انتخاب زن و مرد
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


// محاسبات ظرفیت
const btnJob = document.getElementById('addJob');
btnJob.addEventListener("submit", function (e) {
    // e.preventDefault();
    if(capacityAll.value){
        capacityAll.innerHTML = capacityAll.value;
    }else{
        capacityAll.innerHTML = Number(capacityWoman.value) + Number(capacityMan.value);
    }
    if (capacityAll.value > 0 || capacityWoman.value > 0 || capacityMan.value > 0){
        // generateRow(e);
        console.log('ارسال اطلاعات');
        // e.stopPropagation()
    }
});
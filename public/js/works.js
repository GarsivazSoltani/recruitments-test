console.log('لیست شغل‌ها');
console.log(data);

const careerField = document.getElementById('careerField');
careerField.addEventListener('change', function(e){
    // console.log('id:', e.target.value);
    generateField(e.target.value);
});
// console.log(careerField.value, '|', careerField[careerField.selectedIndex].innerHTML);


const field = document.getElementById('field');
const grade = document.getElementById('grade');
const title = document.getElementById('title');
const task = document.getElementById('task');
const type = document.getElementById('type');

function generateField(id){
    data.forEach(element => {
        // console.log(id, '|', element.id, '|', element.title);
        if (id == element.id) {            
            field.innerHTML = '';
            // opt.value = element.certificate;
            certificateData = JSON.parse(element.certificate);
            // console.log(certificateData);
            certificateData.forEach(item => {
                // console.log(item);
                let option = document.createElement('option');
                option.text = item;
                field.append(option);
            });

            // educations data change
            grade.innerHTML = '';
            educationsData = JSON.parse(element.educations);
            educationsData.forEach(item => {
                // console.log(educations);
                let option = document.createElement('option');
                option.text = item;
                grade.append(option);
            });

            // title data change
            title.innerHTML = element.definition;

            // task data change
            // task.innerHTML = element.task;
            task.innerHTML = '';
            taskData = JSON.parse(element.task);
            taskData.forEach(item => {
                // console.log(educations);
                let li = document.createElement('li');
                li.innerHTML = item;
                task.append(li);
            });

            // type data change
            type.innerHTML = element.type;
            
        }
    });
}
generateField(1);

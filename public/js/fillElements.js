console.log('فایل پر کردن آیتم‌ها');
// console.log(works); // جدول مشاغل
// console.log(cities); // جدول استان‌ها
// console.log(condition); // جدول استان‌ها


const field = document.getElementById('field');
const grade = document.getElementById('grade');
const type = document.getElementById('type');
const task = document.getElementById('task');
const skill = document.getElementById('skill');
const cours = document.getElementById('cours');
const capacityAll = document.getElementById('capacityAll');

export function generateField(id, datas){
    datas.forEach(data => {
        if (id == data.id) {
            fillComboBox(data.certificate, field, condition.field_of_study); // پرکردن آیتم مدرک تحصیلی
            fillComboBox(data.educations, grade, condition.grade); // پرکردن آیتم رشته تحصیلی و گرایش
            type.innerHTML = data.type; // پر کردن آیتم نوع شغل
            title.innerHTML = data.definition; // پر کردن آیتم تعریف شغل
            fillComboBox(data.task, task, false); // پرکردن آیتم وظایف و مسئولیت‌ها
            fillComboBox(data.skill, skill, false); // پرکردن آیتم مهارت‌ها
            fillComboBox(data.cours, cours, false); // پرکردن آیتم دوره‌های آموزشی
            if(condition.capacity){
                capacityAll.value = condition.capacity[0]; // پرکردن آیتم ظرفیت کل
            }
        }
    });
}

// سازنده المانهای کومبو باکس
function fillComboBox(arrayList, element, fill){
    element.innerHTML = '';
    let items = JSON.parse(arrayList);
    items.forEach(item => {
        let option = document.createElement('option');
        option.text = item;
        if (fill && fill == item) {
            console.log('grade:', fill, '|', item);
            option.selected = true;
        }
        element.append(option);
    });
}

// سازنده شهرستان‌ها
export function generateCity(id, element){
    element.innerHTML = '';
    cities.forEach(item => {
        if (item.province_id == id) {
            let option = document.createElement('option');
            option.value = item.id;
            option.text = item.name;
            if (condition.city == item.name) {
                // console.log(condition.city);
                option.selected = true;
            }
            element.append(option);
        }
    });
}

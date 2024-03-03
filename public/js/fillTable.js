console.log('ساختن جدول');

const addTableRow = document.getElementById('rowTableJob');
export function generateTableRow(data){
    console.log(data);
    data.forEach((item, index) => {
        let makeRow = document.createElement('tr'); // ساختن یک سطر

        generateTableColumn(makeRow, index+1, true); // ساختن ستون ردیف
        generateTableColumn(makeRow, item.job_title, false); // ساختن ستون عنوان
        generateTableColumn(makeRow, item.state, false); // ساختن ستون استان
        generateTableColumn(makeRow, item.city, false); // ساختن ستون شهر
        generateTableColumn(makeRow, item.capacity[0], false); // ساختن ستون ظرفیت

        let column = document.createElement('th'); // ساختن ستون ظرفیت
        makeRow.append(column); // اضافه کردن ستون به سطر
        generateButton(column, item.id, 'ویرایش', 'btn-warning'); // ساختن دکمه ویرایش
        generateButton(column, item.id, 'حذف', 'btn-danger'); // ساختن دکمه حذف

        addTableRow.append(makeRow); // اضافه کردن سطر به جدول
    });
}

function generateTableColumn(row, data, scope)
{
    let column = document.createElement('th'); // ساختن ستون
    column.innerHTML = data; // مقداردهی به ستون
    if (scope) {
        column.setAttribute("scope", "row"); // خصوصیات ستون ردیف
    }
    row.append(column) // اضافه کردن ستون به سطر
}

function generateButton(column, id, name, color){
    let btn = document.createElement('a'); // ساختن دکمه
    btn.classList.add('btn', 'm-1', color);
    btn.innerHTML = name;
    btn.href = `../condition/${id}/edit`;
    column.append(btn); // اضافه کردن دکمه به ستون
}
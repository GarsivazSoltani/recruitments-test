console.log('ساختن جدول');

const addTableRow = document.getElementById('rowTableJob');
export function generateTableRow(data){
    // console.log('table:', data);
    data.forEach((item, index) => {
        let makeRow = document.createElement('tr'); // ساختن یک سطر

        generateTableColumn(makeRow, index+1, true); // ساختن ستون ردیف
        generateTableColumn(makeRow, item.job_title, false); // ساختن ستون عنوان
        generateTableColumn(makeRow, item.state, false); // ساختن ستون استان
        generateTableColumn(makeRow, item.city, false); // ساختن ستون شهر
        generateTableColumn(makeRow, item.capacity[0], false); // ساختن ستون ظرفیت

        let column = document.createElement('th'); // ساختن ستون ظرفیت
        makeRow.append(column); // اضافه کردن ستون به سطر
        let div = document.createElement('div'); // ساختن ستون ظرفیت
        div.classList.add('d-flex', 'align-items-center');
        column.append(div); // اضافه کردن ستون به سطر
        generateButton(div, item.id, 'ویرایش', 'btn-warning', 'edit'); // ساختن دکمه ویرایش
        generateDeleteButton(div, item.id, 'حذف', 'btn-danger', 'delete'); // ساختن دکمه حذف

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

function generateButton(column, id, title, color, btnAction){
    let btn = document.createElement('a'); // ساختن دکمه
    btn.classList.add('btn', 'btn-sm', 'm-1', color);
    btn.innerHTML = title;
    // if (btnAction == 'edit') {
    //     btn.href = `../condition/${id}/edit`;
    // }
    if (btnAction == 'edit') {
        btn.href = `../condition/${id}/edit`;
    }else{
        btn.href = `../condition/${id}`;
    }
    column.append(btn); // اضافه کردن دکمه به ستون
}

function generateDeleteButton(column, id, name, color, btnAction){
    let myform = document.createElement("form");
    myform.action = `../condition/${id}`;
    myform.method = "POST";
    myform.classList.add('mt-3');

    let method = document.createElement("input");
    method.type = 'hidden';
    method.name = '_method';
    method.value = 'delete';
    myform.appendChild(method);

    let csrf = document.createElement("input");
    csrf.type = 'hidden';
    csrf.name = '_csrf';
    csrf.value = '<your_csrf_token>';
    myform.appendChild(csrf);

    let btn = document.createElement("button");
    btn.value = "delete";
    btn.innerHTML = "حذف";
    // btn.name = "name";
    btn.classList.add('btn', 'btn-danger', 'btn-sm', 'm-1');
    
    myform.appendChild(btn);
    myform.submit();


    column.append(myform); // اضافه کردن دکمه به ستون
}




console.log('لیست شغل‌ها');
console.log(data);

const careerField = document.getElementById('careerField');
careerField.addEventListener('change', function(e){
    // console.log('id:', e.target.value);
    generateField(e.target.value);
});


const field = document.getElementById('field');
function generateField(id){
    data.forEach(element => {
        // console.log(id, '|', element.id, '|', element.title);
        if (id == element.id) {            
            field.innerHTML = '';
            // opt.value = element.certificate;
            dd = JSON.parse(element.certificate);
            dd.forEach(elem => {
                // console.log(elem);
                let opt = document.createElement('option');
                opt.text = elem;
                field.append(opt);
            });
        }
    });
}

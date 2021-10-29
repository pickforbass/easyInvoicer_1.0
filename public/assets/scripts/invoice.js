const addTask = document.getElementById('add-task');
const prototype = document.getElementById('invoice_designations').getAttribute('data-prototype');
const chars = '__name__';
let count = 1;

addTask.addEventListener('click', function () {
    let newPrototype = prototype;

    while(newPrototype.indexOf(chars) != -1) {
        newPrototype = newPrototype.replace(chars, count);
    }
        
    count++;
    console.log(newPrototype);
})

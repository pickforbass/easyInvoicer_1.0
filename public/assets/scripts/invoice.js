const addTask = document.getElementById('add-task');
const prototype = document.getElementById('invoice-designations-container').getAttribute('data-prototype');
const chars = '__name__';
let count = prototype.dataset('data-index');


console.log(prototype)

addTask.addEventListener('click', function () {
    let newPrototype = prototype;

    while(newPrototype.indexOf(chars) != -1) {
        newPrototype = newPrototype.replace(chars, count);
    }
        
    count++;
    
    //TODO : insert newPrototype on table 
})

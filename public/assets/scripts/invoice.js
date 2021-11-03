const addTask = document.getElementById('add-task');
const prototypeContainer = document.getElementById('invoice-designations-container');
const chars = '__name__';
let prototype = prototypeContainer.dataset.prototype;
let index = prototypeContainer.dataset.index;


// Generate new designation

function newDesignationForm () {
    let line = prototype;

    while(line.indexOf(chars) != -1) {
        line = line.replace(chars, index);
    }
        
    prototypeContainer.innerHTML += line;
    index++;
    console.log(index);
    //TODO : insert newPrototype on table 
}

newDesignationForm();

addTask.onclick = newDesignationForm;



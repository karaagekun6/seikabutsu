
let counter, btnAdd;
let n;

function addCount(){
    n++;
    counter.innerHTML = n;
}

window.addEventListener("load", ()=>{
    counter = document.getElementById("counter");
    btnAdd = document.getElementById("btnAdd");
    
    btnAdd.addEventListener("click", addCount);
})
function count(){
    let bottles = document.getElementById('num').value;
    let box = document.getElementById('answer');
    if(!checkInput(bottles)){
        if(box.classList.contains("answer")){
            box.classList.remove("answer");
        }
        alert("Не корректный ввод");
    } else{
        if(!box.classList.contains("answer")){
            box.classList.add("answer");
        }
        let counter = new C_Counter(bottles);
        counter.counter();
    }
}

function checkInput(str){
    let reg = /^[1-9]{1,1}[0-9]{1,2}$/;
    return reg.test(str);
}

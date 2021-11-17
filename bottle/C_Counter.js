class C_Counter{

    constructor(num){
        this.bottles = num;
    }

    counter() {
        $.ajax({
            url: 'counter.php',
            type: 'POST',
            data: "bottles="+this.bottles,
            error: function(text, error){
                console.log(text + "  " + error);
            },
            success: (answer) => {
                let arr = JSON.parse(answer);
                let answer_html = ``;

                if(Object.keys(arr).includes('big')){
                    answer_html += `<p>Большие коробки: ${arr["big"]}</p>`;
                }
                if(Object.keys(arr).includes('med')){
                    answer_html += `<p>Средние коробки: ${arr["med"]}</p>`;
                }
                if(Object.keys(arr).includes('small')){
                    answer_html += `<p>Маленькие коробки: ${arr["small"]}</p>`;
                }
                this.fillBox(answer_html);
            }
        });
    }

    fillBox(str){
        let box = document.getElementById('answer');
        box.innerHTML = "";
        setTimeout(function(){
            box.insertAdjacentHTML('beforeend', str);
        }, 1000);
    }
}
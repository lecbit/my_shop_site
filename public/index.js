let array = [];
if (localStorage.length>0){
    array = JSON.parse(localStorage.getItem("status"));
}

for (let i = 0; i < document.getElementsByClassName('batton').length; i++) {
    // console.log(localStorage.getItem("status"),document.getElementsByClassName('batton')[i].getAttribute('data-hren'));
    if (array.indexOf(parseInt(document.getElementsByClassName('batton')[i].getAttribute('data-hren'))) != -1)/*localStorage.getItem("status") == document.getElementsByClassName('batton')[i].getAttribute('data-hren')*/ {
        //console.log(array.indexOf(document.getElementsByClassName('batton')[i].getAttribute('data-hren')));
        
        document.getElementsByClassName('batton')[i].innerHTML = `<button type="button" onclick="change(${document.getElementsByClassName('batton')[i].getAttribute('data-hren')}, ${i})" class="btn btn-lg btn-block btn-outline-primary">Убрать из корзины</button>`;
    }
    else {
        document.getElementsByClassName('batton')[i].innerHTML = `<button type="button" onclick="change(${document.getElementsByClassName('batton')[i].getAttribute('data-hren')}, ${i})" class="btn btn-lg btn-block btn-primary">Купить</button>`;
    }
}

function change(content, num) {
    if (array.indexOf(content) != -1){
        let temp = array.indexOf(content);
        array.splice(temp, 1);
        document.getElementsByClassName('batton')[num].innerHTML = `<button type="button" onclick="change(${content},${num})" idd="" class="btn btn-lg btn-block btn-primary">Купить</button>`;
        localStorage.removeItem('status');
        localStorage.setItem('status',JSON.stringify(array));
    }
    else {
        array.push(content);
        document.getElementsByClassName('batton')[num].innerHTML = `<button type="button" onclick="change(${content},${num})" idd="" class="btn btn-lg btn-block btn-outline-primary">Убрать из корзины</button>`;
        localStorage.removeItem('status');
        localStorage.setItem('status',JSON.stringify(array));
    }
}

window.addEventListener('storage', function (e){
    let array2 = JSON.parse(localStorage.getItem("status"));
    for(let i=0;i<array.length;i++){
        console.log(array);
        console.log(array2);
        if(array[i]!=array2[i]){
            console.log('yes');
            document.getElementById(`${array[i]}`).innerHTML = `<button type="button" onclick="change(${i},${i})" idd="" class="btn btn-lg btn-block btn-primary">Купить</button>`;
            break;
        }
    }
    array = JSON.parse(localStorage.getItem("status"));
});


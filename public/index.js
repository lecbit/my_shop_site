//let array = localStorage.getItem("status").split(',');
let array = [];
if (localStorage.length>0){
    array = JSON.parse(localStorage.getItem("status"));
}

//array = JSON.parse(localStorage.getItem("status"));


/*localStorage.setItem(array, JSON.stringify(array));
array = JSON.parse(localStorage.getItem("array"));*/


for (let i = 0; i < document.getElementsByClassName('batton').length; i++) {
    // console.log(localStorage.getItem("status"),document.getElementsByClassName('batton')[i].getAttribute('data-hren'));
    if (array.indexOf(parseInt(document.getElementsByClassName('batton')[i].getAttribute('data-hren'))) != -1)/*localStorage.getItem("status") == document.getElementsByClassName('batton')[i].getAttribute('data-hren')*/ {
        console.log(array.indexOf(document.getElementsByClassName('batton')[i].getAttribute('data-hren')));
        
        document.getElementsByClassName('batton')[i].innerHTML = `<button type="button" onclick="change(${document.getElementsByClassName('batton')[i].getAttribute('data-hren')}, ${i})" class="btn btn-lg btn-block btn-outline-primary">Убрать из корзины</button>`;
    }
    else {
        document.getElementsByClassName('batton')[i].innerHTML = `<button type="button" onclick="change(${document.getElementsByClassName('batton')[i].getAttribute('data-hren')}, ${i})" class="btn btn-lg btn-block btn-primary">Купить</button>`;
        
    }
}


function change(content, num) {
    if (array.indexOf(content) != -1)/*localStorage.getItem("status") == content)*/ {
        let temp = array.indexOf(content);
        array.splice(temp, 1);
        document.getElementsByClassName('batton')[num].innerHTML = `<button type="button" onclick="change(${content},${num})" idd="" class="btn btn-lg btn-block btn-primary">Купить</button>`;
        localStorage.removeItem('status');
        //localStorage.setItem('status', array);
        localStorage.setItem('status',JSON.stringify(array));
    }
    else {
        array.push(content);
        console.log(array);
        document.getElementsByClassName('batton')[num].innerHTML = `<button type="button" onclick="change(${content},${num})" idd="" class="btn btn-lg btn-block btn-outline-primary">Убрать из корзины</button>`;
        localStorage.removeItem('status');
        //localStorage.setItem('status', array);
        localStorage.setItem('status',JSON.stringify(array));
    }
}
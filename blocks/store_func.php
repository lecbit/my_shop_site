<div id="show_content"></div>

<script>
function checkout(id){
	array = JSON.parse(localStorage.getItem("status"));
	let temp = array.indexOf(id);
    array.splice(temp, 1);
	localStorage.removeItem('status');
    localStorage.setItem('status',JSON.stringify(array));
}
</script>

<script>
let id_product = JSON.parse(localStorage.getItem("status"));
//console.log(id_product);
let data_body = "id_product=" + id_product;  
fetch("http://mysite.local/ajax/info.php", { 
	method: "POST",
    body: data_body,   
	headers:{"content-type": "application/x-www-form-urlencoded"} 
	})
   
.then( (response) => {
        if (response.status !== 200) {           
			return Promise.reject();
        }   
return response.text()
})
.then(i => document.getElementById('show_content').innerHTML = i)
.catch(() => console.log('ошибка')); 
</script>

<script>
window.addEventListener('storage', function (e){

if(localStorage.getItem('status')){
    let temp = localStorage.getItem('status');
    console.log(temp.length);
    let id_product = JSON.parse(localStorage.getItem("status"));
let data_body = "id_product=" + id_product;

fetch("http://mysite.local/ajax/info.php", {
	method: "POST",
    body: data_body,
	headers:{"content-type": "application/x-www-form-urlencoded"}
	})
   
.then( (response) => {
        if (response.status !== 200) {
			return Promise.reject();
        }
return response.text()
})

.then(i => document.getElementById('show_content').innerHTML = i)
.then(console.log(data_body))

.catch(() => console.log('ошибка'));
}

});
</script>
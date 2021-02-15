<div id="show_content"></div>

<script>
function delete_i(id){
	array = JSON.parse(localStorage.getItem("status"));
	let temp = array.indexOf(id);
    array.splice(temp, 1);
	localStorage.removeItem('status');
    localStorage.setItem('status',JSON.stringify(array));

    document.getElementById(id).remove();
    if(localStorage.getItem('status').length<3){
        document.getElementById('page').remove();
    }
}
</script>

<script>
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
.catch(() => console.log('ошибка')); 
</script>

<script>
window.addEventListener('storage', function (e){
    
if(localStorage.getItem('status')){
    console.log(localStorage.getItem('status').length);
    let temp = localStorage.getItem('status');
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

.catch(() => console.log('ошибка'));
}

});
</script>
<div id="show_content"></div>

<script>
function checkout(){
	localStorage.setItem('status','[3]');
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
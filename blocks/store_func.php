<div id="show_content"></div>
<div id="show_content2"></div>

<script>
let id_product = 321;
let data_body = "id_product=" + id_product;  
fetch("http://mysite.local/json/info.php", { 
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
.then(i => document.getElementById('show_content2').innerHTML = i)
.catch(() => console.log('ошибка')); 
</script>
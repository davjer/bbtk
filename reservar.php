<?session_start();
if(!isset($_SESSION['usu_id'])) header('Location: index.php');	

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


 <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
	
<h1>Libros disponibles</h1>
<div id="app" class="container">
<table border="1" class="table table-striped">
<thead>
	<th></th>
	<th>Id</th>
	<th>Nombre</th>
	<th>Review</th>
	<th>Autor</th>
	<th>editorial</th>
</thead>
	<tr v-for="data in all_data ">
        <td><button v-on:click="seleccionar(data.lib_id)">Add</td>
		<td>{{data.lib_id}}</td>
		<td>{{data.lib_nombre}}</td>
		<td>{{data.lib_review}}</td>
		<td>{{data.lib_autor}}</td>
	    <td>{{data.lib_editorial}}</td>
	</tr>
</ul>
<a href="dashboard.php">REGRESAR</a>
</div>


<script>
var app = new Vue({
  el: '#app',
  data: {
     
	  all_data:[]
      
  },
  created:function(){
	  console.log("Iniciando...");
	  this.get_contacts();
	
  },

  methods:{
	  get_contacts: function(){
                fetch("core/libs.php")
				.then(response=>response.json())
				.then(json=>{this.all_data=json.libros1})
    },
	addl: function(index){
		alert("g");
	}
    
  }
});    





function seleccionar(i){
	
    $.post("core/addlib.php",{lib_id:i},function(data){
		location.reload();
   			 },'html');
	
}
///////

</script>

	
</body>
</html>
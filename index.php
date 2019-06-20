<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP| MySQL | Vue.js | Axios</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>    
<script>
var app = new Vue({
  el: '#vueapp',
  data: {
     
      email: '',
      password: '',
      
  },
  mounted: function () {
    console.log('Hello from Vue!')
   // this.getContacts()
  },

  methods: {
	  login: function(){
    }
    
  }
})    


function login(){
	
	email = $("#email").val();
	
	password = $("#password").val();
	
	
		 $.post("./core/log.php",{email:email,password:password},function(data){
	 
	 	var respuesta= $('<div />').html(data);
	    $("#cont").html(respuesta.find('#con'));

	 },'html');
	
	
}
</script>

<style>
	body {text-align:center}

	div#contenedor {text-align:left;}
	div#contenedor {

	width:1200px;

	position:absolute;

	left:50%;

	margin-left:-600px;

	}	
	
</style>	


</head>
<body>
	
	<div id="contenedor">
	<form action="core/log.php">
		
		<table>
	    <tr><td>  <label>Email</label></td>
	     <td> <input type="email" id="email" name="email" v-model="email">
	      </td></tr>
		  <tr>
	      <td><label>Password</label></td>
	      <td><input type="password" id="password" name="password" v-model="password">
		  </td></tr>
		  <tr><td><button type="submit">Login</button></td><td><a href="nuevo.php">Nuevo ususario</a></td></tr>
		 
		</table>     
		
</div>
	
</body>
</html>
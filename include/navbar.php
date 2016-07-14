<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>   
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                    
      </button>
      <a class="navbar-brand" href="http://lecheando.com/index.php"><img src="../img/lecheando.png" style="max-width:100px; margin-top: -15px; max-height: 80px;" /></a>
    </div>
    
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://lecheando.com/index.php"> <span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="http://lecheando.com/tags.php"> <span class="glyphicon glyphicon-tags"></span> Categorias</a></li>
        <li><a href="http://lecheando.com/chat.php"> <span class="glyphicon glyphicon-comment"></span> Chat</a></li>
        <li><a href="http://lecheando.com/escorts/index.php"> <span class="glyphicon glyphicon-heart"></span> Escorts</a></li>
        <li><a href="http://lecheando.com/latienda/index.php"> <span class="glyphicon glyphicon-gift"></span> Tienda</a></li>
        <li><a href="#"> <span class="glyphicon glyphicon-eye-open"></span> Servicios</a></li>
        <li><a href="#"> <span class="glyphicon glyphicon-facetime-video"></span> Sitios</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">

         
         <?php 
         if ($logged == false) {
			 include "include/navbar_login.php";
		 }
		 else {
			 			 include "include/navbar_out.php";

			 }
		 ?>
		 
		  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-vertical"></span></span></a>
          <ul class="dropdown-menu">
           <li class="dropdown-header"></li>
            <li><a href="how.php">Ayuda</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="reporte.php">Reportar un problema</a></li>
        
          </ul>
        </li>
        
           	</ul>

         
    </div>
  </div>
</nav>

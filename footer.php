<?php 
echo '<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>Información</h4>
				<p>Universidad de San Carlos de Guatemala</p>
				<p>Facultad de Ingeniería</p>
				<p>Escuela de ciencias y sistemas</p>
				<p>Arquitectura de computadores y ensambladores 2</p>
				<div class="f_icons">
						<ul>
							<li><a class="icon2" href="#"></a></li>
							<li><a class="icon1" href="#"></a></li>
							<li><a class="icon3" href="#"></a></li>
							<li><a class="icon5" href="#"></a></li>
						</ul>	
				</div>
			</div>
			<div class="span1_of_4">
				<h4>Integrantes</h4>
				<span>Rita Mariela Guarán Baeza</span>
				<p>201114613</p>
				<span>Mario Leonel Rodas López</span>
				<p>201114264</p>
				<span>Ckevyn Omar Ovalle Sequén </span>
				<p>201113945</p>
				<span>Marvin Rafael Urias Coc</span>
				<p>201114517</p>
				<span>Cristian Alejandro Mucun Guzmán</span>
				<p>201114494</p>
			</div>
			<div class="span1_of_4">
				<h4>Últimos comentarios</h4>';
				 
				$comentarios=mysql_query("select C.*, L.nombre lugar from COMENTARIO C inner join LUGAR L ON(C.LUGAR_id_lugar = L.id_lugar) ORDER BY id_comentario DESC LIMIT 3",$conexion) or die("Problemas en el select:".mysql_error());
	  
	  					while ($comentario = mysql_fetch_array($comentarios)) {
							
							echo '<span class="bg"><strong>'.$comentario['usuario'].'</strong> comentó sobre <a href="mapa.php?id='.$comentario['LUGAR_id_lugar'].'">'.$comentario['lugar'].'</a>: '.$comentario['texto'].'</span>';
						}
				
			echo '</div>
			<div class="span1_of_4">
				<h4>Photostream</h4>
				<ul class="f_nav">
					<li><a href="#"><img src="images/f_pic1.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic2.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic3.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic4.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic5.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic6.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic7.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic8.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic9.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic10.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic11.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/f_pic12.jpg" alt=""> </a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="footer_top">
			<div class="f_nav1">
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="categoria.php">Categorias</a></li>
					<li><a href="top.php">TOP 5</a></li>
					<li><a href="mapa.php">Mapa</a></li>
					<li><a href="ofertas.php">Ofertas</a></li>
					<li><a href="contact.php">Contacto</a></li>
				</ul>
			</div>
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
';

?>
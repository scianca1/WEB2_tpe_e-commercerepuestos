{include file='templates/header.tpl'}
<div class= "productos producto ">
    <div>
        <h2>{$producto->producto}</h2>
         {* <img src="imagenes/cremallera_prueba.jpg"class="card-img-top" alt="cremayera"> *}
        <div class= "material"><label>MATERIAL:</label><h3>{$producto->material}</h3></div>
        <div class= "precio"><label>PRECIO:</label><h3>{$producto->precio}</h3></div>
        <a href= ""  class="btn btn-primary btn-comprar">COMPRAR</a>
    </div>
</div>
{include file='templates/footer.tpl'}
{include file='templates/header.tpl'}
<h1 class= categoria>Todos nuestros PRODUCTOS</h1>
{foreach from=$productos item=$producto}
 <div class= "card " >
  <img src="imagenes/cremallera_prueba.jpg"class="card-img-top" alt="cremayera">
  <div class="card-body">
  
     <h2 class="card-title">{$producto->producto}</h2>
     <p class="card-text">${$producto->precio}</p>
     <a href= "verunproducto/{$producto->ID}"  class="btn btn-primary">ver Producto</a>
  </div>
 </div>
 
 {/foreach}
 {include file='templates/footer.tpl'}
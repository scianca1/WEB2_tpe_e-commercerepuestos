
<h1 class="categoria">{$categoria->categoria}</h1>
{foreach from=$productos item=$producto}
   <div class="card ">
      <div class="content-img-produc"><img src="{BASE_URL}{$producto->img}" class="card-img-top"
            alt="cremayera"></div>
      <div class="card-body">

         <h2 class="card-title">{$producto->producto}</h2>
         <p class="card-text">${$producto->precio}</p>
         <a href="{BASE_URL}verunproducto/{$producto->ID}" class="btn btn-primary">ver Producto</a>
      </div>
   </div>
{/foreach}
{include file='templates/footer.tpl'}
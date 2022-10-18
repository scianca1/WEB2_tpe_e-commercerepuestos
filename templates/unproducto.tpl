
<div class="productos producto ">
    <div>
        {if isset($smarty.session.nombre)}
            <a href="{BASE_URL}iraeditar/{$producto->ID}" type="button" class="btn btn-warning">Editar este producto</a>
            <a href="{BASE_URL}borrar/{$producto->ID}" type="button" class="btn btn-outline-danger">Borrar este producto</a>
        {/if}
        <div class="content-img-produc"><img src="{BASE_URL}{$producto->img}" class="card-img-top"
                alt="cremayera"></div>
        <h2>{$producto->producto}</h2>

        <div class="material"><label>MATERIAL:</label>
            <h3>{$producto->material}</h3>
        </div>
        <div class="precio"><label>PRECIO:</label>
            <h3>${$producto->precio}</h3>
        </div>
        {* proximamente//<a href= ""  class="btn btn-primary btn-comprar">COMPRAR</a> *}
    </div>

</div>
{include file='templates/footer.tpl'}
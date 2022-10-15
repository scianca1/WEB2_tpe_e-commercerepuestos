{include file='templates/header.tpl'}
<div class= "productos producto ">
    <div>
       <form action= "{BASE_URL}editar/{$producto->ID}" method="POST">
        <div class="content-img-produc"><img src="{BASE_URL}imagenes/cremallera_prueba.jpg"class="card-img-top" alt="cremayera"></div>
        <div class= " formnew"><label class="dato">Titulo:</label><input value="{$producto->producto}" type="text" class= "titulo" name="titulo" required></div>
        <div class= " formnew"><label class="dato">MATERIAL:</label><input value="{$producto->material}"type="text" class= "material" name="material" required></div>
        <div class= "formnew"><label class="dato">PRECIO: $</label><input value="{$producto->precio}"type="number"class= "precio" name="precio" required></div>
        <div class= "formnew "><label class="dato">Categoria:</label>
           
          <div class="selecform">  
            <select  name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected>{$categoriadelpr->categoria}</option>
                {foreach from=$categorias item=$categoria}
                <option value="{$categoria->id}">{$categoria->categoria}</option>
               {/foreach}
            </select>
           </div> 
        </div>
        <button type="submit"  class="btn btn-primary btn-comprar btn-guardar">Guardar</button>
        </form>
    </div>
</div>
{include file='templates/footer.tpl'}
 
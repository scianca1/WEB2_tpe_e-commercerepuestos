<div class="productos producto ">
  <div>
    <form action="{BASE_URL}editar/{$producto->ID}" method="POST" enctype="multipart/form-data">

      <div class=" formnew"><label class="dato">cambiar una imagen</label>
        <input class="titulo" type="file" name="imagen">
      </div>
      <div class=" formnew"><label class="dato">Titulo:</label><input value="{$producto->producto}" type="text"
          class="titulo" name="titulo" required></div>
      <div class=" formnew"><label class="dato">MATERIAL:</label><input value="{$producto->material}" type="text"
          class="material" name="material" required></div>
      <div class="formnew"><label class="dato">PRECIO: $</label><input value="{$producto->precio}" type="number"
          class="precio" name="precio" required></div>
      <div class="formnew "><label class="dato">Categoria:</label>

        <div class="selecform">
          <select name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
            <option selected value="{$categoriadelpr->id}">Por defecto: {$categoriadelpr->categoria}</option>
            {foreach from=$categorias item=$categoria}
              <option value="{$categoria->id}">{$categoria->categoria}</option>
            {/foreach}
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-comprar btn-guardar">Guardar</button>
    </form>
  </div>
</div>
{include file='templates/footer.tpl'}
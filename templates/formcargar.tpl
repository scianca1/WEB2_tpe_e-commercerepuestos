<div class="productos producto ">
  <div>
    <form action="{BASE_URL}cargarproducto" method="POST" enctype="multipart/form-data">
      <div class=" formnew">
        <label class="dato">Agrege una imagen</label>
        <input class="titulo" type="file" name="imagen">
      </div>
      <div class=" formnew"><label class="dato">Titulo:</label><input type="text" class="titulo" name="titulo" required>
      </div>
      <div class=" formnew"><label class="dato">MATERIAL:</label><input type="text" class="material" name="material"
          required></div>
      <div class="formnew"><label class="dato">PRECIO: $</label><input type="number" class="precio" name="precio"
          required></div>
      <div class="formnew "><label class="dato">Categoria:</label>

        <div class="selecform">
          <select name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
            <option selected>seleccione una categoria</option>
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
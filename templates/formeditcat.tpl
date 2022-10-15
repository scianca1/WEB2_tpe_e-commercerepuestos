{include file='templates/header.tpl'}
<h1 class= "categoria">Editar Categoria</h1>
<form action="{BASE_URL}editarcat/{$categoria->id}" method="POST">
<div class="productos tableadmincat">
<table class="table table-dark table-hover">
  <thead>
  <tr>
  <td colspan="2">Tu Categoria numero</td>
  </tr>
   <tr>
      <th scope="col">#</th>
      <th scope="col" class="tdadmincat">Nombre</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">{$i}</th>
      <td class="tdadmincat"><input value="{$categoria->categoria}" name="nombre"></td>
   </tr>
</tbody>
</table>
</div>
<button type="submit"  class="btn btn-primary btn-comprar btn-guardar">Guardar los Cambios</button>
</form>

{include file='templates/footer.tpl'}

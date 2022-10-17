
<h1 class="categoria">Administrar Categorias</h1>

<div class="productos tableadmincat">
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <td colspan="2">Todas tus Categorias</td>
      </tr>

      <tr>
        <th scope="col">#</th>
        <th scope="col" class="tdadmincat">Nombre</th>
        <th scope="col" class="tdadmincat">Editar categoria</th>
        <th scope="col" class="tdadmincat">Borrar categoria</th>
      </tr>
    </thead>
    <tbody>

      {foreach from=$categorias item=$categoria}
        <tr>
          <th scope="row">{$i}</th>
          <td class="tdadmincat">{$categoria->categoria}</td>
          <td class="tdadmincat"><a href="{BASE_URL}goeditarcat/{$categoria->id}/{$i}" type="button"
              class="btn btn-warning">Editar </a></td>
          <td class="tdadmincat"><a href="{BASE_URL}goborrarcat/{$categoria->id}" type="button"
              class="btn btn-outline-danger">Eliminar </a></td>
        </tr>
        <p class="hidden">{$i++}</p>
      {{/foreach}}
    </tbody>
  </table>
</div>
<div class="formaddcat ">
  <h2>Crear una nueva categoria</h2>
  <form action="{BASE_URL}addcategoria" method="POST">
    <div class=" formnew"><label class="dato">nombre de la categoria:</label><input type="text" class="titulo"
        name="nombre" required></div>
    <button type="submit" class="btn btn-primary btn-comprar btn-guardar">añadir</button>
  </form>
</div>
{include file='templates/footer.tpl'}
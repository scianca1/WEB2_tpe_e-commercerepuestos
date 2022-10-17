

<div class=" categoria insertado cuidado">
    <h1> Tu categoria {$categoria->categoria} contiene {$numerodeproductos} productos, estos se eliminaran cuando
        elimines la categoria. ¿estas seguro que quieres eliminar esta categoria? </h1>

</div>
<div>
    <a href="{BASE_URL}borrarcat/{$categoria->id}" type="button" class="btn btn-primary btn-comprar cuidadoborrar">SI,
        eliminar </a>
</div>

{include file='templates/footer.tpl'}
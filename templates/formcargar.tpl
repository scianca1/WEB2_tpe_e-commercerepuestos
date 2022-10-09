{include file='templates/header.tpl'}
<div class= "productos producto ">
    <div>
       <form action= "{BASE_URL}cargarproducto" method="GET">
        <div class="content-img-produc"><img src="{BASE_URL}imagenes/cremallera_prueba.jpg"class="card-img-top" alt="cremayera"></div>
        <div class= " formnew"><label class="dato">Titulo:</label><input  type="text" class= "titulo" name="titulo" required></div>
        <div class= " formnew"><label class="dato">MATERIAL:</label><input type="text" class= "material" name="material" required></div>
        <div class= "formnew"><label class="dato">PRECIO: $</label><input type="number"class= "precio" name="precio" required></div>
        <div class= "formnew "><label class="dato">Categoria:</label>
           
          <div class="selecform">  
            <select  name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected>seleccione una categoria</option>
                <option value="Cremalleras">Cremalleras</option>
                <option value="Bombas">Bombas</option>
                <option value="Retenes">Retenes</option>
                <option value="Bujes">Bujes</option>
                <option value="Extremos">Extremos</option>
            </select>
           </div> 
        </div>
        <button type="submit"  class="btn btn-primary btn-comprar btn-guardar">Guardar</button>
        </form>
    </div>
</div>
{include file='templates/footer.tpl'}
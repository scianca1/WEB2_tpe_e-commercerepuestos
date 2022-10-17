

<div class="productos producto formuser ">
    <div>
        <h1>INICIO DE SECCION</h1>
    </div>
    <div>
        <form class="row g-3" action="{BASE_URL}login" method="POST">
            <div class="col-auto">

                <input name="email" type="email" class="form-control" id="inputPassword2"
                    placeholder="correo electronico" required>
            </div>
            <div class="col-auto">

                <input name="password" type="password" class="form-control" id="inputPassword2" placeholder="contraseña"
                    required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">iniciar</button>
            </div>
        </form>
    </div>
    {if !empty($error)}
        <div>
            <p class="error">{$error}</p>
        </div>
    {/if}
</div>

{include file='templates/footer.tpl'}
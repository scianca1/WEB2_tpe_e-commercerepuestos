{include file='templates/header.tpl'}
<div class= "producto">
    <div>
        <h2>{$producto->producto}</h2>
        <div class= "material"><label>MATERIAL:</label><h3>{$producto->material}</h3></div>
        <div class= "precio"><label>PRECIO:</label><h3>{$producto->precio}</h3></div>
    </div>
</div>
{include file='templates/footer.tpl'}
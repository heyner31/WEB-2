@include('layout/headerCo')
@include('layout/menu')
<div class="cotizar">
    <div class="contenido">
        <img src="assets/logoMakkan@2x.png" class="makkanLogo">
        <br><br>
        <h1 class="tituloCot">COTIZADOR</h1>
        <br>
        <span class="textoCot">
            Da click en el mapa y selecciona el lote a cotizar.
            <br>
            *Precios sujetos a cambios sin previo aviso.
        </span>
        <br><br>
        <div class="Botones">

            <div class="imgBoton">
                <img src="{{env("APP_URL")}}assets/btnPremium@2x.png" style=" height: 30px;">
            </div>

            <div class="imgBoton" style=" height: 30px;">
                <img src="{{env("APP_URL")}}assets/btnPlus@2x.png" style=" height: 30px;">
            </div >

            <div class="imgBoton" style=" height: 30px;">
                <img src="{{env("APP_URL")}}assets/btnEstandar@2x.png" style=" height: 30px;">
            </div>
        </div>
        <br>
        <div class="cont_circulo">
            <div class="img_cir" style="background-image: url({{env("APP_URL")}}assets/bola_blanca.png);"><span class="textoCot">DISPONIBLE</span></div>
            <div class="img_cir" style="background-image: url({{env("APP_URL")}}assets/bola_amarilla.png);"><span class="textoCot">APARTADO</span></div>
            <div class="img_cir" style="background-image: url({{env("APP_URL")}}assets/bola_azul.png);"><span class="textoCot">VENDIDO</span></div>
        </div>

    </div>
</div>

<div id="centro" class="centro">
    <img class="img_map" src="assets/map.jpg">
</div>
@include('layout/footer')
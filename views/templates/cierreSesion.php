<a href="log/logout" class="options-msg">Cerrar Sesion</a>
<h1>Bienvenido <?php echo $nombre ?? ''?> </h1>
<?php if($_SESSION['admin']):?>
    <div class="barra-servicios">
          <a class="btnBlue" href="/public/admin">Ver Citas</a>
        <a class="btnBlue" href="/public/admin/verServicios">Ver Servicios</a>
        <a class="btnBlue" href="/public/admin/crearServicios">Nuevo Servicios</a>
       
    </div>

<?php endif;?>
    

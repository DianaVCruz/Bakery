<?php include("./TEMPLATE/cabecera.php") ?>

<section class="mt-5 mb-5">
    <div class="contCarrito">
        <div class="carrito text-center p-2">
            <i class="bi bi-cart-fill" style="font-size: 1.75em;"></i>
            <p class="d-inline fs-4">$</p>
            <p class="d-inline fs-4" id="txtCarrito">0.00</p>
        </div>
    </div>
    <div class="" id="tabla">
        <!--En esta seccion se añaden los productos, ver la clase Tienda.js-->
    </div>
</section>

<script type="text/javascript" src="JS/Tienda.js"></script>
<?php include("./TEMPLATE/pie.php") ?>
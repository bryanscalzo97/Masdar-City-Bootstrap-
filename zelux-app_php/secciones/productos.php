<?php

require __DIR__ . '/../data/productos.php';

?>

<section class="container">

    <div class="row mb-2">
    <div class=" col-12">
    <h2 id="prod" class="col-12">Productos:</h2>
    </div>
        <?php
        foreach($productos as $i => $producto): ?>
       
            <article class=" col-md-6">
                <div class="padingprod">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-4 nop">
                            <img class="img1" style="width: auto; height: auto;" src="./imgs/<?= $producto['img'];?>" alt="<?= $producto['alt'];?>">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                             <h2 class="mb-0 titulo1"><?= $producto['producto'];?></h2>
                             <p class="card-text mb-auto"><?= $producto['intro'];?></p>
                             <div class="row">
                             <div class="col-6">
                             <del><?= $producto['precio-inicial'];?></del><p><?= $producto['precio-descuento'];?></p>
                        </div>
                        <div class="col-6">
                          <a class="botoncomprar" href="index.php?s=productos-leer&id=<?= $i;?>">Ver más</a>
                        </div>
                    
                </div>
           
            </article>
        </a>
        <?php
        endforeach; ?>
    </div>
</section>
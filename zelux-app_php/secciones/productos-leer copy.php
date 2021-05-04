<?php

require __DIR__ . '/../data/productos.php';

// Obtenemos los productos
$id = $_GET['id'];
$producto = $productos[$id];
?>
 <article id="prodleer">
              
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-4 nop">
                            <img class="img1" style="width: auto; height: auto;" src="./imgs/<?= $producto['img'];?>" alt="<?= $producto['alt'];?>">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                             <h2 class="mb-0 titulo1"><?= $producto['producto'];?></h2>
                             <p class="card-text mb-auto"><?= $producto['intro'];?></p>
                             <p class="card-text mb-auto"><?= $producto['texto'];?></p>

                             <div class="row">
                             <div class="col-6">
                             <del><?= $producto['precio-inicial'];?></del><p><?= $producto['precio-descuento'];?></p>
                        </div>
                        <div class="col-6">
                          <a class="botoncomprar" href="index.php?s=productos-leer&id=<?= $i;?>">Ver más</a>
                        </div>
                    
                </div>
           
 </article>

 <div class="container">
        <div class="row mb-2">
            <h2 id="prod" class="col-12">Estos productos podrian interesarte:</h2>
            <!--colgante1-->
            
            <div class="col-md-6">
              <div class="padingprod">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-md-4 nop">
                      <img class="img1" style="width: auto; height: auto;" src="./imgs/img2.png" alt="">
                
                     </div>
                  <div class="col p-4 d-flex flex-column position-static">
                    <h2 class="mb-0 titulo1">Lámpara de techo Cloé</h2>
                    <p class="card-text mb-auto">Lámpara de techo retro con pantalla de metal y detalles en madera Cloé.</p>
                    <div class="row">
                      <div class="col-6">
                          <del>$500</del><p>$480</p>
                        </div>
                        <div class="col-6">
                          <a class="botoncomprar" href="index.php?s=productos-leer&id=1">Ver más</a>
                        </div>
                    </div>
                    
  
                  </div>
                  
                </div>
              </div>
              
            </div>
            <!--colgante2-->
            <div class="col-md-6">
              <div class="padingprod">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-4 nop">
                      <img class="img1" style="width: auto; height: auto;" src="./imgs/img4.png" alt="">
                
                     </div>
                  <div class="col p-4 d-flex flex-column position-static">
                    <h2 class="mb-0 titulo1">Lámpara Cruz</h2>
                    <p class="card-text mb-auto">Clásica, moderna y de luz tenue para ambiertar interiores.</p>
                    <div class="row">
                      <div class="col-6">
                          <del>$500</del><p>$480</p>
                        </div>
                        <div class="col-6">
                          <a class="botoncomprar" href="index.php?s=productos-leer&id=3">Ver más</a>
                        </div>
                    </div>
                    
  
                  </div>
                  
                </div>

              </div>
                
              </div>





          </div>
       
    </div>
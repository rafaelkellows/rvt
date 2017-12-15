<!DOCTYPE html>
<html lang="pt-br">
<?php
  $page = "Simulador 3D";
  include_once "inc/contents/head.php";
?>
  <body>
    <div id="CS" style="position: fixed; top: 0; left:0; z-index: 999"> 000 </div>
    <main class="simulador3d">
      <?php
        $navg = "simulador3d";
        $sub = "";
        include_once "inc/contents/header.php";
      ?>

      <section class="carrossel">
        <div class="carr_container">
          <dl>  
            <dt><div><h2>Simulador<br>3D</h2></div></dt>
            <dd><img src="images/banners/simulador3d.jpg" title="" /></dd>
          </dl> 
        </div>
        <aside>
          <p>selecione aqui o tipo de ambiente</p>
          <nav>
            <a href="javascript:void(0);"><span>1</span></a>
            <a href="javascript:void(0);"><span>2</span></a>
            <a href="javascript:void(0);"><span>3</span></a>
          </nav>
        </aside>
      </section>

      <section>
        <h3>Escolha o Piso</h3>
        <div class="carrGaleria">
          <div class="cntr" cg-ctrl="section figure">
            <section class="productList">
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-001-ixia.jpg" title="001 - Ixia" /></a>
                <figcaption>
                  <em>001</em>
                  <strong>Ixia</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-106-freesia-pearl.jpg" title="106 - Freesia Pearl" /></a>
                <figcaption>
                  <em>106</em>
                  <strong>Freesia Pearl</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-002-silver-grey.jpg" title="002 - Silver Grey" /></a>
                <figcaption>
                  <em>002</em>
                  <strong>Silver Grey</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-210-almond.jpg" title="210 - Almond" /></a>
                <figcaption>
                  <em>210</em>
                  <strong>Almond</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-212-carthamus-champagne.jpg" title="212 - Carthamus" /></a>
                <figcaption>
                  <em>212</em>
                  <strong>Carthamus</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-107-desert-gold.jpg" title="107 - Desert Gold" /></a>
                <figcaption>
                  <em>107</em>
                  <strong>Desert Gold</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-419-pearl.jpg" title="419 - Pearl" /></a>
                <figcaption>
                  <em>419</em>
                  <strong>Pearl</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-107-desert-gold.jpg" title="107 - Desert Gold" /></a>
                <figcaption>
                  <em>107</em>
                  <strong>Desert Gold</strong>
                </figcaption>
              </figure>
              <figure>
                <a href="javascript:void(0);"><img src="images/products/mantas/k811-419-pearl.jpg" title="419 - Pearl" /></a>
                <figcaption>
                  <em>419</em>
                  <strong>Pearl</strong>
                </figcaption>
              </figure>
            </section>
          </div>
          <nav class="ctrl">
            <a href="javascript:void(0);" title="Previous"><span>Previous</span></a>
            <a href="javascript:void(0);" title="Next"><span>Next</span></a>
          </nav>
        </div>
      </section>

      <ul class="navg">
        <li><a href="nossosprodutos.php" title="Nossos Produtos"><span>Nossos Produtos</span></a></li>
        <li><a href="nossosprojetos.php" title="Nossos Projetos"><span>Nossos Projetos</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<?php
  $page = "Nossos Projetos";
  include_once "inc/contents/head.php";
?>
  <body>
    <div id="CS" style="position: fixed; top: 0; left:0; z-index: 999"> 000 </div>
    <main class="nossosprojetos">
      <?php
        $navg = "nossosprojetos";
        $sub = "";
        include_once "inc/contents/header.php";
      ?>

      <section class="carrossel">
        <div class="carr_container">
          <dl>  
            <dt><div><h2>Nossos Projetos</h2></div></dt>
            <dd><img src="images/banners/nossosprojetos.jpg" title="" /></dd>
          </dl> 
        </div>
      </section>

      <section class="projects">

        <article class="cont-01 carrGallery">
          <figure>
            <span><img  src="images/benefits/home-benefit-01.jpg" url-src="images/projects/casacorG.jpg" title="Casa Cor" border="0" alt="" /></span>
          </figure>
          <h3>Casa Cor</h3>
          <p>Atendem às normas técnicas brasileiras e européias</p>
        </article>

        <article class="cont-04 vrt carrGallery">
          <p><span>Podem ser instalados sobre outras superfícies</span></p>
          <figure>
            <span><img src="images/projects/saraiva.jpg" url-src="images/projects/saraivaG.jpg" border="0" title="Saraiva" alt="" /></span>
          </figure>
          <h3>Saraiva</h3>
        </article>

        <article class="cont-07 vrt carrGallery">
          <figure>
            <span><img src="images/projects/google.jpg" url-src="images/projects/googleG.jpg" border="0" title="Google" alt="" /></span>
          </figure>
          <h3>Google</h3>
          <p><span>Possibilidade de <br>&nbsp;&nbsp;paginações diversas</span></p>
        </article>

        <article class="cont-01 vrt carrGallery">
          <figure>
            <span><img src="images/projects/creche.jpg" url-src="images/projects/crecheG.jpg" title="Creche" border="0" alt="" /></span>
          </figure>
          <h3>Creche</h3>
          <p>O Medintech Plus, com a tecnologia exclusiva Armstrong TS, fica com aspecto de novo por toda a sua vida útil.</p>
        </article>

        <article class="cont-02 carrGallery">
          <figure>
            <span><img src="images/projects/havaianas.jpg" title="Havaianas" border="0" alt="" /></span>
          </figure>
          <h3>Havaianas</h3>
          <p>Conforto <font>Térmico</font></p>
          <p>Conforto <font>Acústico</font></p>
        </article>

        <article class="cont-01 carrGallery">
          <figure>
            <span><img  src="images/benefits/home-benefit-01.jpg" url-src="images/projects/casacorG.jpg" title="Casa Cor" border="0" alt="" /></span>
          </figure>
          <h3>Casa Cor</h3>
        </article>

        <article class="cont-04 vrt carrGallery">
          <figure>
            <span><img src="images/projects/saraiva.jpg" border="0" title="Saraiva" alt="" /></span>
          </figure>
          <h3>Saraiva</h3>
        </article>

        <article class="cont-03 carrGallery">
          <figure>
            <span><img src="images/projects/creche.jpg" border="0" title="Creche" alt="" /></span>
          </figure>
          <h3>Creche</h3>
          <p class="round"><span>Fáceis de Instalar</span></p>
        </article>

        <article class="cont-07 vrt carrGallery">
          <figure>
            <span><img src="images/projects/google.jpg" border="0" title="Google" alt="" /></span>
          </figure>
          <h3>Google</h3>
        </article>

        <article class="cont-02 carrGallery">
          <figure>
            <span><img src="images/projects/havaianas.jpg" border="0" title="Havaianas" alt="" /></span>
          </figure>
          <h3>Havaianas</h3>
        </article>

      </section>


      <ul class="navg">
        <li><a href="simulador3d.php" title="Simulador 3D"><span>Simulador 3D</span></a></li>
        <li><a href="ondeencontrar.php" title="Onde encontrar"><span>Onde encontrar</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
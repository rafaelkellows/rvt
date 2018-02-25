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

      <section class="projects carrGallery">

        <article class="cont-01">
          <figure>
            <span><img src="images/projects/2018/thumb/centro_cirurgico_2.jpg" url-src="images/projects/2018/G/centro_cirurgico_2.jpg" title="Centro Cirúrgico" border="0" alt="" /></span>
          </figure>
          <h3>Centro Cirúrgico</h3>
          <p>Atendem às normas técnicas brasileiras e européias</p>
        </article>

        <article class="cont-04 vrt">
          <p><span>Podem ser instalados sobre outras superfícies</span></p>
          <figure>
            <span><img src="images/projects/2018/thumb/clinica_edmundo_1.jpg" border="0" title="Clínica Edmundo" alt="" /></span>
          </figure>
          <h3>Clínica Edmundo</h3>
        </article>

        <article class="cont-07 vrt">
          <figure>
            <span><img src="images/projects/2018/thumb/coloridos.jpg" border="0" title="Coloridos" alt="" /></span>
          </figure>
          <h3>Coloridos</h3>
          <p><span>Possibilidade de <br>&nbsp;&nbsp;paginações diversas</span></p>
        </article>

        <article class="cont-01 vrt">
          <figure>
            <span><img src="images/projects/2018/thumb/favorite.jpg" title="Favorite" border="0" alt="" /></span>
          </figure>
          <h3>Favorite</h3>
          <p>A Revitech Pisos Vinílicos busca sempre o melhor e não descansa até alcançar a excelência.</p>
        </article>

        <article class="cont-02">
          <figure>
            <span><img src="images/projects/2018/thumb/majestic_2.jpg" title="Majestic" border="0" alt="" /></span>
          </figure>
          <h3>Majestic</h3>
          <p>Conforto <font>Térmico</font></p>
          <p>Conforto <font>Acústico</font></p>
        </article>

        <article class="cont-01">
          <figure>
            <span><img src="images/projects/2018/thumb/projeto_20180216-1856.jpg" url-src="images/projects/casacorG.jpg" title="" border="0" alt="" /></span>
          </figure>
          <h3>&nbsp;</h3>
        </article>

        <article class="cont-04 vrt">
          <figure>
            <span><img src="images/projects/2018/thumb/projeto_20180216-1857.jpg" border="0" title="" alt="" /></span>
          </figure>
          <h3>&nbsp;</h3>
        </article>

        <article class="cont-03">
          <figure>
            <span><img src="images/projects/2018/thumb/sao_luiz.jpg" border="0" title="São Luiz" alt="" /></span>
          </figure>
          <h3>São Luiz</h3>
          <p class="round"><span>Fáceis de Instalar</span></p>
        </article>

        <article class="cont-07 vrt">
          <figure>
            <span><img src="images/projects/2018/thumb/sao_luiz_possibilities.jpg" border="0" title="São Luiz - Possibilities" alt="" /></span>
          </figure>
          <h3>São Luiz - Possibilities</h3>
        </article>

        <!--article class="cont-02">
          <figure>
            <span><img src="images/projects/havaianas.jpg" border="0" title="Havaianas" alt="" /></span>
          </figure>
          <h3>Havaianas</h3>
        </article-->
          <div class="msgInfo down to-right">
            <p>role para baixo para ver todo o conteúdo</p>
          </div>
      </section>


      <ul class="navg">
        <li><a href="nossosprodutos.php" title="Nossos Produtos"><span>Nossos Produtos</span></a></li>
        <li><a href="esclarecaduvidas.php" title="Esclareça suas dúvidas"><span>Esclareça suas dúvidas</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
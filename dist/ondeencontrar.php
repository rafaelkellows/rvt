<!DOCTYPE html>
<html lang="pt-br">
<?php
  $page = "Onde Encontrar";
  include_once "inc/contents/head.php";
?>
  <body>
    <div id="CS" style="position: fixed; top: 0; left:0; z-index: 999"> 000 </div>
    <main class="ondeencontrar">
      <?php
        $navg = "ondeencontrar";
        $sub = "";
        include_once "inc/contents/header.php";
      ?>

      <section class="carrossel">
        <div class="carr_container">
          <dl>  
            <dt><div><h2>Onde<br>Encontrar</h2></div></dt>
            <dd><img src="images/banners/ondeencontrar.jpg" title="" /></dd>
          </dl> 
        </div>
      </section>

      <nav class="navg">
        <ul>
          <li><a class="active" href="javascript:void(0);" title="Nossas Revendas">Nossas Revendas</a></li>
        </ul>
      </nav>

      <section id="map">
        <aside>
          <h3 id="region-name">Selecione a cidade no mapa</h3>
          <div><!----></div>
        </aside>
        <script src="js/map/raphael-min.js"></script>
        <script src="js/map/map.js"></script>
      </section>

      <ul class="navg">
        <li><a href="esclarecaduvidas.php" title="Esclareça suas dúvidas"><span>Esclareça suas dúvidas</span></a></li>
        <li><a href="./" title="Home"><span>Home</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
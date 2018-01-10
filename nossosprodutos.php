<!DOCTYPE html>
<html lang="pt-br">
<?php
  $page = "Nossos Produtos";
  include_once "inc/contents/head.php";
?>
  <body>
    <div id="CS" style="position: fixed; top: 0; left:0; z-index: 999"> 000 </div>
    <main class="nossosprodutos">
      <?php
        $navg = "nossosprodutos";
        $sub = "";
        include_once "inc/contents/header.php";
      ?>

      <section class="carrossel">
        <div class="carr_container">
          <dl>  
            <dt><div><h2>Nossos Produtos</h2></div></dt>
            <dd><img src="images/banners/mantas.jpg" title="" /></dd>
          </dl> 
        </div>
      </section>

      <nav class="navg">
        <h2>Mantas</h2>
        <ul>
          <li><a href="mantas-medintech-plus.php">Medintech Plus</a></li>
          <li><a href="mantas-medintone-pur.php">Medintone Pur</a></li>
          <li><a href="mantas-solid-pur.php">Solid Pur</a></li>
          <li><a href="mantas-possibilities.php">Possibilities</a></li>
          <li><a href="mantas-pastell-l2.php">PASTELL L2</a></li>
          <li><a href="mantas-majestic.php">Majestic</a></li>
        </ul>
      </nav>

      <figure>
        <img src="images/banners/placas.jpg" title="" />
      </figure>

      <nav class="navg">
        <h2>Placas</h2>
        <ul>
          <li><a href="placas-midtile.php">Midtile</a></li>
          <li><a href="placas-reguas-ecoidea.php">Ecoidea</a></li>
          <li><a href="placas-reguas-heavy.php">Heavy</a></li>
        </ul>
      </nav>

      <figure>
        <img src="images/banners/reguas.jpg" title="" />
      </figure>

      <nav class="navg">
        <h2>Réguas</h2>
        <ul>
          <li><a href="reguas-premium.php">Premium</a></li>
          <li><a href="reguas-ecoidea.php">Ecoidea</a></li>
          <li><a href="reguas-heavy.php">Heavy</a></li>
          <li><a href="reguas-residence.php">Residence</a></li>
        </ul>
      </nav>


      <!--figure>
        <img src="images/banners/acessorios.jpg" title="" />
      </figure>

      <nav class="navg">
        <h2>Acessórios</h2>
        <ul>
          <li><a href="javascript:void(0);">Medintech Plus</a></li>
          <li><a href="javascript:void(0);">Medintone Pur</a></li>
          <li><a href="javascript:void(0);">Solid Pur</a></li>
          <li><a href="javascript:void(0);">Possibilities</a></li>
          <li><a href="javascript:void(0);">PASTELL L2</a></li>
        </ul>
      </nav-->

      <ul class="navg">
        <li><a href="arevitech.php" title="A Revitech"><span>A Revitech</span></a></li>
        <li><a href="nossosprojetos.php" title="Nossos Projetos"><span>Nossos Projetos</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
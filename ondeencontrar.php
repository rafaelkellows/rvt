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
          <select name="uf" id="uf">
            <option value="">Selecione</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG">MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
          </select>
          <h3 id="region-name">Selecione a cidade no mapa</h3>
          <div><!----></div>
        </aside>
        <script src="js/map/raphael-min.js"></script>
        <script src="js/map/map.js"></script>
      </section>

      <ul class="navg">
        <li><a href="download/REVITECH_MANUAL_DE_LIMPEZA.pdf" target="_blank" title="Faça Download do nosso Manual de Limpeza"><span>Manual de Limpeza</span></a></li>
        <li><a href="recrutamento.php" title="Trabalhe Conosco"><span>Trabalhe Conosco</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
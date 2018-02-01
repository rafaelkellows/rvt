<!DOCTYPE html>
<html lang="pt-br">
<?php
  $page = "A Revitech";
  include_once "inc/contents/head.php";
?>
  <body>
    <div id="CS" style="position: fixed; top: 0; left:0; z-index: 999"> 000 </div>
    <main class="arevitech">
      <?php
        $navg = "arevitech";
        $sub = "";
        include_once "inc/contents/header.php";
      ?>

      <section class="carrossel">
        <div class="carr_container">
          <dl>  
            <dt><div><h2>O que é ser Revitech?</h2></div></dt>
            <dd><img src="images/banners/arevitech.jpg" title="" /></dd>
          </dl> 
        </div>
      </section>

      <!--div class="phraseTag _brown">
        <p>Ser Revitech é estar em constante revolução e não se acomodar. É querer sempre mais!</p>
      </div>

      <section class="time">
        <h3>Nosso Time</h3>
        <div class="carrGaleria">
          <div class="cntr">
            <figure>
              <img src="images/time/carson-smith.jpg" title="Carson Smith" />
              <figcaption>
                <p>Carson Smith</p>
                <em>Diretor de Vendas</em>
              </figcaption>
            </figure>
            <figure>
              <img src="images/time/sabrina-velasquez.jpg" title="Sabrina Velasquez" />
              <figcaption>
                <p>Sabrina Velasquez</p>
                <em>Gerente de Vendas</em>
              </figcaption>
            </figure>
            <figure>
              <img src="images/time/evan-grant.jpg" title="Evan Grant" />
              <figcaption>
                <p>Evan Grant</p>
                <em>Assistente de Vendas</em>
              </figcaption>
            </figure>
          </div>
          <nav class="ctrl none">
            <a href="javascript:void(0);" title="Previous"><span>Previous</span></a>
            <a href="javascript:void(0);" title="Next"><span>Next</span></a>
          </nav>
        </div>
      </section-->
      
      <div class="phraseTag _darkgray">
        <p>A Revitech não tem medo de traçar um caminho em que a qualidade vem sempre em 1º lugar.</p>
      </div>

      <section class="pilares">
        <h3 class="circleTitle">
          <p>Pilares</p>
          <figure>
            <img src="images/logoFullAlta.png" border="0" alt="Revitech Pisos Vinílicos" />
          </figure>
        </h3>
        <aside>
          <p><strong>Excelência</strong> em todos os nossos produtos e serviços</p>
          <p><strong>Honestidade</strong> sem ela, não há relação que perdure</p>
          <p><strong>Determinação</strong> em sempre buscar as melhores soluções</p>
        </aside>
      </section>

      <div class="phraseTag _darkbrown">
        <p>Afinal, a Revolução está no DNA da Revitech e convidamos você para fazer parte desta história!</p>
      </div>

      <section class="objetivo">
        <figure>
          <img src="images/banners/objetivo.jpg" border="0" alt="Nosso Objetivo" />
        </figure>
        <aside>
          <h3>Nosso Objetivo</h3>
          <p>Acreditamos em melhoria contínua e queremos crescer sempre no segmento de construção, oferecendo os melhores pisos vinílicos aos nossos clientes e o suporte necessário para que ele tenha sucesso em sua obra e seja reconhecido pelo seu trabalho.</p>
        </aside>
      </section>

      <ul class="navg">
        <li><a href="./" title="Home"><span>Home</span></a></li>
        <li><a href="nossosprodutos.php" title="Nossos Produtos"><span>Nossos Produtos</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
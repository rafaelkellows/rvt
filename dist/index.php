<!DOCTYPE html>
<html lang="pt-br">
<?php
  $page = "Home";
  include_once "inc/contents/head.php";
?>
  <body>
    <div id="CS" style="position: fixed; top: 0; left:0; z-index: 999"> 000 </div>

    <main class="home">
      <?php
        $navg = "";
        $sub = "";
        include_once "inc/contents/header.php";
      ?>
      <div class="phraseTag _darkbrown">
        <p>A Revitech quer revolucionar o segmento de pisos com excelência, eficiência, tecnologia e técnica.</p>
          <div class="msgInfo down to-right">
            <p>role para baixo para ver todo o conteúdo</p>
          </div>
      </div>

      <section class="carrossel">
        <div class="carr_container">
          <dl>  
            <dt><div><h2>TECNOLOGIA</h2><p>Qualidade em primeiro lugar</p></div></dt>
            <dd><img src="images/banners/home-tecnologia.jpg" title="Tecnologia" /></dd>
          </dl>
          <dl>  
            <dt class="to-right"><div><h2>DESIGN</h2><p>Produtos que atingem todas as expectativas</p></div></dt>
            <dd><img src="images/banners/home-design.jpg" title="Design" /></dd>
          </dl>
          <dl>  
            <dt><div><h2>ELEGÂNCIA</h2><p>Requinte e sofisticação para que uma obra<br> seja prima</p></div></dt>
            <dd><img src="images/banners/home-elegancia.jpg" title="Elegância" /></dd>
          </dl>
          <dl>  
            <dt class="to-center"><div><h2>Excelência</h2><p>Estar em constante evolução e não<br> se acomodar</p></div></dt>
            <dd><img src="images/banners/home-excelencia.jpg" title="Excelência" /></dd>
          </dl>
          <dl>  
            <dt><div><h2>Eficiência</h2><p>Oferecer soluções e querer sempre mais</p></div></dt>
            <dd><img src="images/banners/home-eficiencia.jpg" title="Eficiência" /></dd>
          </dl>
        </div>
      </section>

      <div class="phraseTag">
        <p>O básico é pouco para a Revitech. Buscamos o melhor e não descansamos até alcançá-lo.</p>
      </div>

      <section class="projects">
        
        <aside>
          <h3>Nossos Projetos</h3>
          <p>A alta qualidade de nosso trabalho reflete nos mais diversos segmentos que a Revitech está presente - na saúde, varejo, hotelaria, educacional, corporativo, esportivo, entretenimento e residencial. Conheça.</p>
        </aside>

        <div class="carrGaleria">
          <div class="msgInfo down">
            <p>clique nas fotos para ampliá-las</p>
          </div>
          <div class="cntr" cg-ctrl="ul li">
            <ul>
              <li><a href="javascript:void(0);"><img src="images/projects/home/project01.jpg" url-src="images/projects/home/G/project01.jpg" title="" alt="" /></a></li>
              <li><a href="javascript:void(0);"><img src="images/projects/home/project02.jpg" url-src="images/projects/home/G/project02.jpg" title="" alt="" /></a></li>
              <li><a href="javascript:void(0);"><img src="images/projects/home/project03.jpg" url-src="images/projects/home/G/project03.jpg" title="" alt="" /></a></li>
            </ul>
          </div>
          <nav class="ctrl">
            <a href="javascript:void(0);" title="Previous"><span>Previous</span></a>
            <a href="javascript:void(0);" title="Next"><span>Next</span></a>
          </nav>
        </div>
      </section>

      <div class="phraseTag _lightgray">
        <p>Mais inovação, mais excelência e digna de referência. Isso é ser Revitech Pisos Vinílicos.</p>
      </div>

      <section class="ourProducts">
        <h3>Nossos Produtos</h3>
        <dl>
          <dt>
            <figure>
              <img class="over" src="images/products/home-mantas-over.jpg" alt="Mantas" />
              <img class="under" src="images/products/home-mantas.jpg" alt="Mantas" />
            </figure>
            <h4><a href="mantas-medintech-plus.php">Mantas</a></h4>
          </dt>
          <dd><p><a href="mantas-medintech-plus.php">Em rolos de 2 metros de largura, com número mínimo de juntas.</a></p></dd>
        </dl>
        <dl>
          <dt>
            <figure>
              <img class="over" src="images/products/home-placas-over.jpg" alt="Placas" />
              <img class="under" src="images/products/home-placas.jpg" alt="Placas" />
            </figure>
            <h4><a href="placas-midtile.php">Placas</a></h4>
          </dt>
          <dd><p><a href="placas-midtile.php">Podem ser coladas ou fixadas. São econômicas e de fácil manutenção.</a></p></dd>
        </dl>
        <dl>
          <dt>
            <figure>
              <img class="over" src="images/products/home-reguas-over.jpg" alt="Réguas" />
              <img class="under" src="images/products/home-reguas.jpg" alt="Réguas" />
            </figure>
            <h4><a href="reguas-premium.php">Réguas</a></h4>
          </dt>
          <dd><p><a href="reguas-premium.php">Flexíveis, resistentes a choques e utilizam Sistema Loose Lay ou Ecolay.</a></p></dd>
        </dl>
        <!--dl>
          <dt>
            <figure>
              <img class="over" src="images/products/home-acessorios-over.jpg" alt="Acessórios" />
              <img class="under" src="images/products/home-acessorios.jpg" alt="Acessórios" />
            </figure>
            <h4>Acessórios</h4>
          </dt>
          <dd><p>Sua obra ainda mais completa, com os melhores produtos do mercado.</p></dd>
        </dl-->
      </section>

      <div class="phraseTag _darkgray">
        <p>A Revitech Pisos quer ser a empresa mais visionária do segmento de revestimentos.</p>
      </div>

      <section class="benefits">
        
        <h3 class="circleTitle">
          <p>Benefícios</p>
          <figure>
            <img src="images/logoFullAlta.png" border="0" alt="Revitech Pisos Vinílicos" />
          </figure>
        </h3>

        <article class="cont-01">
          <figure>
            <span><img src="images/benefits/home-benefit-01.jpg" border="0" alt="" /></span>
          </figure>
          <p>Atendem às normas técnicas brasileiras e européias</p>
        </article>

        <article class="cont-02">
          <figure>
            <span><img src="images/benefits/home-benefit-02.jpg" border="0" alt="" /></span>
          </figure>
          <p>Conforto <font>Térmico</font></p>
          <p>Conforto <font>Acústico</font></p>
        </article>

        <article class="cont-03">
          <p class="title"><span>10 anos<br>de garantia</span></p>
          <figure>
            <span><img src="images/benefits/home-benefit-03.jpg" border="0" alt="" /></span>
          </figure>
          <p class="round"><span>Fáceis de Instalar</span></p>
        </article>

        <article class="cont-04">
          <p><span>Podem ser instalados sobre outras superfícies</span></p>
          <figure>
            <span><img src="images/benefits/home-benefit-04.jpg" border="0" alt="" /></span>
          </figure>
        </article>

        <article class="cont-05">
          <figure>
            <span><img src="images/benefits/home-pattern-01.jpg" border="0" alt="Coral" /></span>
          </figure>
          <figure>
            <span><img src="images/benefits/home-pattern-02.jpg" border="0" alt="Mazarine Blue" /></span>
          </figure>
          <figure>
            <span><img src="images/benefits/home-pattern-03.jpg" border="0" alt="Ipà Ebanizado" /></span>
          </figure>
          <figure>
            <span><img src="images/benefits/home-pattern-04.jpg" border="0" alt="Aquafrost" /></span>
          </figure>
          <figure>
            <span><img src="images/benefits/home-pattern-05.jpg" border="0" alt="Summer Green" /></span>
          </figure>
          <p><span>A maior variedade de cores e padrões para diversos ambientes</span></p>
        </article>

        <article class="cont-06">
          <h3>Recicláveis</h3>
          <p>Livre de FTALATOS e formaldeído</p>
          <figure>
            <span><img src="images/benefits/home-recycle-01.jpg" border="0" alt="" /></span>
          </figure>
        </article>

        <article class="cont-07">
          <figure>
            <span><img src="images/benefits/home-recycle-02.jpg" border="0" alt="" /></span>
          </figure>
          <p><span>Possibilidade de <br>&nbsp;&nbsp;paginações diversas</span></p>
        </article>
      </section>
      <ul class="navg">
        <li>
          <a href="ondeencontrar.php" title="Onde Encontrar"><span>Onde Encontrar</span></a>
          <div class="msgInfo up inverse">
            <p>use este botão para navegar</p>
          </div>
        </li>
        <li>
          <a href="arevitech.php" title="A Revitech"><span>A Revitech</span></a>
          <div class="msgInfo up to-right inverse">
            <p>use este botão para navegar</p>
          </div>
        </li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
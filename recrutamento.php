<!DOCTYPE html>
<html lang="pt-br">
<?php
  $page = "Esclareça suas dúvidas";
  $keywords = "Faça, parte, Equipe";
  $description = "Faça parte da Equipe. Trabalhe Conosco. Preencha o formulário ao lado com seus dados, anexe o currículo  e clique em ENVIAR.";
  include_once "inc/contents/head.php";
?>
  <body>
    <div id="CS" style="position: fixed; top: 0; left:0; z-index: 999"> 000 </div>
    <main class="esclarecaduvidas">
      <?php
        $navg = "recrutamento";
        $sub = "";
        include_once "inc/contents/header.php";
      ?>

      <section class="carrossel">
        <div class="carr_container">
          <dl>  
            <dt><div><h2>Faça parte da Equipe</h2></div></dt>
            <dd><img src="images/banners/esclarecaduvidas.jpg" title="" /></dd>
          </dl> 
        </div>
      </section>

      <div class="phraseTag _darkbrown">
        <p>Lorem Ipsum dolor sit amet cosecutur paralism</p>
      </div>

      <section>
        <article>
          <h3>Trabalhe Conosco</h3>
          <p>Venha fazer parte desta Equipe. Preencha o formulário ao lado com seus dados, anexe o currículo e clique em ENVIAR.</p>
        </article>
        <aside>
            <?php 
                $submitReturn = (!isset($_GET["msg"]) ? -1 : $_GET["msg"]);
                switch ($submitReturn) {
                    case 'ok':
                    echo "<div style='color:#eb903d;'>Seu formulário foi enviado com sucesso.<br><br></div>";
                        break;
                    case 'errorSend':
                    echo "<div style='color:#eb903d;'>Seu formulário não pode ser enviado.<br>Tente novamente por favor.<br><br></div>";
                        break;
                    default:
                        break;
                }
            ?>
          <form action="send_email.php" method="post" enctype="multipart/form-data" >
              <input type="hidden" id="formName" name="formName" value="trabalhe">
              <label for="nome">Nome Completo</label>
              <input type="text" id="nome" name="nome" tabindex="1">
              <label for="cargo">Cargo Pretendido</label>
              <input type="text" id="cargo" name="cargo" tabindex="2">
              <label for="email">E-mail</label>
              <input type="text" id="email" name="email" tabindex="3">
              <label for="celular">Celular</label>
              <input type="text" id="celular" class="celular" placeholder="(00) 00000-0000" name="celular" tabindex="4">
              <label for="arquivo">Arquivo <em>(enviar arquivo em .doc ou .pdf de até 2MB)</em></label>
              <input type="file" id="arquivo" class="arquivo" name="arquivo" tabindex="5">
              <label for="interesse">Mensagem</label>
              <textarea id="interesse" name="interesse" tabindex="6"></textarea>
              <ul></ul>
              <input type="reset" name="reset" value="LIMPAR" tabindex="8"><input type="submit" name="enviar" value="ENVIAR" tabindex="7">
          </form>
        </aside>
      </section>

      <ul class="navg">
        <li><a href="ondeencontrar.php" title="Onde Encontrar"><span>Onde Encontrar</span></a></li>
        <li><a href="./" title="Onde encontrar"><span>Home</span></a></li>
      </ul>
      <?php
        include_once "inc/contents/footer.php";
      ?>
    </main>
  </body>
</html>
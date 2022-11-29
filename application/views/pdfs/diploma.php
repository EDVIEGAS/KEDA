<html>
<head>
	<style>

		* {
			margin: 0;
			padding: 0;
			font-family: "Open Sans", Sans-serif;
		}

		.divPrincipal {
			background-image: url("assets/images/certificado.jpg");
			/* background-size: 598px; */
			background-repeat: no-repeat;
			/* padding: 30px;
			font-size: 12px; */
			background-size: 100% 100%;
	    /* background-position: contain; */
	    height: 100vh;
		}

		img {
			border-radius: 50%;
		}

	</style>
</head>
<body>


  <!-- <div style="height: 600px;background-color:#e9ecef"> -->
<?php foreach($layoutClassificacaoFinalCertificado as $layoutClassificacaoFinalCertificado){ ?>
        <div class="card mt-2 divPrincipal" style="height:774px;width: 100%;background-color: #fff;">
          <div class="info-box-content" style="border-top:1px solid #ebebeb;padding: 16px 0 8px 16px;">

              <div class="">
                <?php $imagem = 'uploads/imagem_qr/' . $layoutClassificacaoFinalCertificado->imagem_qr ?>
                <img class="" src="<?php echo $imagem ?>" alt="User Image" height="120px" style="margin-top:59px;margin-left:99px">
              </div>

              <div class="" style="left: 50%;top: 38%;position: absolute;transform: translateX(-50%);font-size:28px">

                   <span>O atleta <strong style="font-size:32px"><?php echo $layoutClassificacaoFinalCertificado->name_participante ?></strong>
                         participou do Campeonato Provincial de Jujtsu-Tradicional de 2020, na categoria <strong>
                           <?php echo $layoutClassificacaoFinalCertificado->descricao_categoriaPeso ?></strong>, obtendo <?php echo $layoutClassificacaoFinalCertificado->posicaoDes ?></strong>º Lugar.</span>




                   <div class="text-center" id="result">

                   </div>

              </div>

              <div style="margin-top: 435px;margin-right:510px;text-align:center">
                  <!-- <div style="margin-left: -34px;margin-top: 262px"> -->
                    <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:15px;text-align:center;color:#6da9a7">
                       <span><?php echo $SecretarioPresidente[0]->nome ?></span>
                     </h6>
                     <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:15px;text-align:center;color:#6da9a7">
                      Presidente da Federação
                    </h6>
                  <!-- </div> -->
              </div>

              <div style="left: 55%;top: 44%;position: absolute;transform: translateX(-50%);">
                <img class="img-circle" src="assets/images/A22.PNG" alt="User ImageASD" height="108px" style="margin-left:-89px;margin-top:249px">
              </div>

              <div style="margin-top: -39px;margin-right:-463px;text-align:center">
                  <!-- <div style="margin-left: -34px;margin-top: 262px"> -->
                    <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:15px;text-align:center;color:#6da9a7">
                       <span><?php echo $SecretarioPresidente[1]->nome ?></span>
                     </h6>
                     <h6 style="font-family: arial,sans-serif;font-weight: normal;text-align: justify;font-size:15px;text-align:center;color:#6da9a7">
                    Secretario Geral
                    </h6>
                  <!-- </div> -->
              </div>

          </div>
        </div>

<?php } ?>


  <!-- </div> -->
</body>
</html>

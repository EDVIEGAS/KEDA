<html>
<head>
	<style>

		* {
			margin: 0;
			padding: 0;
			font-family: "Open Sans", Sans-serif;
		}

		body {
			padding: 12px;
			font-size: 12px;
		}

		table {
			width: 100%;
			border: 1px solid #eeeeee;
			margin: 0;
			padding: 0;
		}

		th {
			text-transform: uppercase;
		}

		tr:nth-child(2n+0){
			/* background: #eeeeee; */
		}

		table, th, td {
			border: 1px solid #eeeeee;
			border-collapse: collapse;
			padding: 10px;
			text-align: center;
		}

		img {
			border-radius: 50%;
		}

    .divPrincipal{
      flex-direction: row;
      /* background: red; */
    }

		.fichaRosto12{
			/* width:30%; */
			display:inline-block;
		}

	</style>
</head>
<body>
	<!-- <div style="display:inline-block;background-color:#17a2b8;height:100%;width:3%">
			eqeqeqqee
	</div> -->
  <div class="divPrincipal">

    <!-- <div> -->
  	 <span style="padding-left: 580px;padding-top: 20px;font-size: 11px">Data de emissao : <?= date('d/m/Y', strtotime(strtoupper(date('Y-m-d'))));?></span>

      <div class="fichaRosto" style="margin-top:45px;margin-bottom:45px">
        <div class="fichaRosto12" style="width:20%">
          <img style="height:120px;border-radius: 100%;margin-left:50px" src="assets/images/A22.png">
        </div>
        <div class="fichaRosto12" style="width:70%;text-align:center;margin-top:2px;height:100px">
          <span style="font-size: 18px;text-align: center;border-bottom: 1px solid black">FICHA DE CADASTRO DE ATLETA - FAJUJ</span><br><br>
					<span style="font-size: 16px">Relatorio Completo de Atleta </span>
        </div>
      </div>
			<br>
  	  <!-- <h2 style="font-size: 18px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2> -->
      <!-- <hr style="width:128px;"> -->

      <div style="width:100%;padding-bottom:1px;font-size:10px">
				<div style="display: inline-block;width: 20%;">
						<?php $imagem = 'uploads/product/' . $verMestre[0]->imagem ?>
						<img style="padding-left: 15px;width:110px; height:110px;border-radius: 100%" src=<?= $imagem;?>>
				</div>
				<div style="display: inline-block;width: 79%;padding-left:2px;padding-bottom:1px">

					<div class="" style="padding-top: 20px">
						<span style="display: inline-block;padding:4px;text-transform: uppercase;font-weight:bold"><?= $verMestre[0]->nome?></span>
						<!-- <span style="display: inline-block;margin-left:auto;padding:4px">ASDASD</span> -->
					</div>
					<div class="" style="padding-top: 18px">
						<span style="display: inline-block">FEDERACAO ANGOLANA DE JUJITSU E DAO</span>
						<span style="display: inline-block;margin-left:192px;background-color:#eeeeee;padding:4px;width:100px;">  Data do Cadastro :</span>
						<span style="display: inline-block;margin-left:1px;padding:4px"><?= date('d/m/Y', strtotime(strtoupper($verMestre[0]->data_cadastro)));?></span>
					</div>
					<div class="" style="padding-top: 4px">
						<span style="display: inline-block">ADSAADASDASDASDASDAA</span>
						<span style="display: inline-block;margin-left:270px;background-color:#eeeeee;padding:4px;width:100px">Validade da carteira :</span>
						<span style="display: inline-block;margin-left:1px;padding:4px">ASDASD</span>
					</div>
				</div>
    	</div>

  		<table style="font-size:10px;line-height:4px;padding-top:2px">
                                  <thead style="background-color:#17a2b8;color:white;display:none">
                                      <tr>
                                          <td colspan="4" style="text-align:left">PARTICIPAÇAO EM COMPETIÇOES DE SELECOES</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Nome Completo</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->nome;?></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Nacionalidade</td>
                                      	 <td style="text-align: left;color:#2d2d2d">Angolana</td>
                                      	 <td width="10%" style="text-align: left;color:#2d2d2d;background-color:#eeeeee;">Naturalidade</td>
                                      	 <td style="text-align: left;color:#2d2d2d">Angolana</td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Data de Nasc.</td>
                                      	 <td style="text-align: left;color:#2d2d2d"><?= date('d/m/Y', strtotime(strtoupper($verMestre[0]->data_nascimento)));?></td>
                                         <td width="10%" style="text-align: right;color:#2d2d2d;background-color:#eeeeee;">Sexo</td>
                                      	 <td style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->genero;?></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Bilhete nº</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->n_bilhete;?></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Nome Pai</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->nomePai;?></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Nome Mae</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->nomeMae;?></td>
                                      </tr>


                                  </tbody>
      </table>
  		<table style="font-size:10px;line-height:4px">
                                  <thead style="background-color:#17a2b8;color:white;display:none">
                                      <tr>
                                          <td colspan="4" style="text-align:left">PARTICIPAÇAO EM COMPETIÇOES DE SELECOES</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Endereço</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"> </td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Provincia</td>
                                      	 <td style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->provincia_e;?></td>
                                         <td width="10%" style="text-align: right;color:#2d2d2d;background-color:#eeeeee;">Municipio</td>
                                         <td style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->municipio;?></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Telefone</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->telefone;?></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">E-email</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"><?= $verMestre[0]->email;?></td>
                                      </tr>

                                  </tbody>
      </table>
			<?php
			 function data($data){
				$ano = explode(" ",$data);
				$ano2 = explode("-",$ano[0]);
				return $ano2[2] ."-". $ano2[1] ."-". $ano2[0];
			 }
			?>
  		<table style="font-size:10px;line-height:4px">
                                  <thead style="background-color:#17a2b8;color:white">
                                      <tr>
                                          <td colspan="4" style="text-align:left">GRADUACOES</td>
                                      </tr>
                                  </thead>
                                  <tbody>
																		<tr>
																			<th style="text-align:left">Descricao</th>
																			<th>Data</th>
																			<th>Graduacao</th>
																			<th>Data da Proxima Graduacao</th>
																		</tr>

																		<?php foreach ($historico as $historico) {?>
																			<tr class="">
								                        <td style="text-align:left" class="text-uppercase"><?php echo $historico->tipo ?></td>
								                        <td><?php echo data($historico->dataHoraFim); ?></td>

								                        <?php if($historico->nova_graduacao == "0"){ ?>
								                        <td><span class="tag tag-success">Cinturao Negro</span></td>
								                        <?php }else{ ?>
								                        <td><span class="tag tag-success bg bg-dark p-2"><?php echo $historico->nova_graduacao?> ªDan</span></td>
								                        <?php } ?>
								                        <td><span class="bg bg-danger p-2"><?php echo data($historico->dataProxGraduacao); ?></span></td>
								                      </tr>
																		<?php } ?>

                                  </tbody>
      </table>
  		<table style="font-size:10px;line-height:4px">
                                  <thead style="background-color:#17a2b8;color:white">
                                      <tr>
                                          <td colspan="4" style="text-align:left">PARTICIPAÇAO EM MUNDIAL</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="">
                                      	 <td width="60%" style="color:#2d2d2d;text-align: left">Descricao</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Data</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Classificacao</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Classificacao</td>
                                      </tr>

																		<?php foreach ($Mundial_participacao as $Mundial_participacao) {?>
																			<tr class="">
                                      	 <td width="60%" style="color:#2d2d2d;text-align: left"><?= $Mundial_participacao->local;?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= $Mundial_participacao->ano;?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= $Mundial_participacao->ano;?></td>

																				 <?php if($Mundial_participacao->posicao == 1){ ?>
									                         <td style="text-align: center;color:#2d2d2d">Ouro<td>
									                       <?php }elseif ($Mundial_participacao->posicao == 2) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Prata</td>
									                       <?php }elseif ($Mundial_participacao->posicao == 3) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Bronze</td>
									                       <?php }else{?>
									                         <td style="text-align: center;color:#2d2d2d">Sem classificacao</td>
									                       <?php } ?>

                                      </tr>
																		<?php } ?>

                                  </tbody>
      </table>

			<table style="font-size:10px;line-height:4px">
                                  <thead style="background-color:#17a2b8;color:white">
                                      <tr>
                                          <td colspan="4" style="text-align:left">PARTICIPAÇAO EM AFRICANOS</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="">
                                      	 <td width="60%" style="color:#2d2d2d;text-align: left">Descricao</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Data</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Classificacao</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Classificacao</td>
                                      </tr>

																		<?php foreach ($Africano_participaca as $Africano_participaca) {?>
																			<tr class="">
                                      	 <td width="60%" style="color:#2d2d2d;text-align: left"><?= $Africano_participaca->local;?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= $Africano_participaca->ano;?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= $Africano_participaca->ano;?></td>

																				 <?php if($Africano_participaca->posicao == 1){ ?>
									                         <td style="text-align: center;color:#2d2d2d">Ouro<td>
									                       <?php }elseif ($Africano_participaca->posicao == 2) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Prata</td>
									                       <?php }elseif ($Africano_participaca->posicao == 3) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Bronze</td>
									                       <?php }else{?>
									                         <td style="text-align: center;color:#2d2d2d">Sem classificacao</td>
									                       <?php } ?>

                                      </tr>
																		<?php } ?>

                                  </tbody>
      </table>
			<table style="font-size:10px;line-height:4px">
                                  <thead style="background-color:#17a2b8;color:white">
                                      <tr>
                                          <td colspan="4" style="text-align:left">PARTICIPAÇAO EM NACIONAL</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="">
                                      	 <td width="60%" style="color:#2d2d2d;text-align: left">Descricao</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Data</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Classificacao</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Classificacao</td>
                                      </tr>

																		<?php foreach ($Africano_participaca as $Africano_participaca) {?>
																			<tr class="">
                                      	 <td width="60%" style="color:#2d2d2d;text-align: left"><?= $Africano_participaca->local;?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= $Africano_participaca->ano;?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= $Africano_participaca->ano;?></td>

																				 <?php if($Africano_participaca->posicao == 1){ ?>
									                         <td style="text-align: center;color:#2d2d2d">Ouro<td>
									                       <?php }elseif ($Africano_participaca->posicao == 2) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Prata</td>
									                       <?php }elseif ($Africano_participaca->posicao == 3) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Bronze</td>
									                       <?php }else{?>
									                         <td style="text-align: center;color:#2d2d2d">Sem classificacao</td>
									                       <?php } ?>

                                      </tr>
																		<?php } ?>

                                  </tbody>
      </table>
			<table style="font-size:10px;line-height:4px">
                                  <thead style="background-color:#17a2b8;color:white">
                                      <tr>
                                          <td colspan="4" style="text-align:left">PARTICIPAÇAO EM PROVINCIAL</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>

                                      	 <td style="color:#2d2d2d;text-align: left">#</td>
                                      	 <td style="color:#2d2d2d;text-align: center">Descricao</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Data</td>
                                      	 <td style="text-align: center;color:#2d2d2d">Classificacao</td>

                                      </tr>
																			<?php $soma = 0; ?>
																		<?php foreach ($Provincial_participacao as $Provincial_participacao) {?>
																			<tr>

                                      	 <td style="color:#2d2d2d;text-align: left"><?php echo $soma = $soma + 1; ?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= $Provincial_participacao['cidade_campeonato'];?></td>
                                      	 <td style="text-align: center;color:#2d2d2d"><?= data($Provincial_participacao['dataHoraFim']);?></td>
                                      
																				 <?php if($Provincial_participacao[1]['posicao'] == 1){ ?>
									                         <td style="text-align: center;color:#2d2d2d">Ouro<td>
									                       <?php }elseif ($Africano_participaca->posicao == 2) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Prata</td>
									                       <?php }elseif ($Africano_participaca->posicao == 3) { ?>
									                         <td style="text-align: center;color:#2d2d2d">Bronze</td>
									                       <?php }else{?>
									                         <td style="text-align: center;color:#2d2d2d">Sem classificacao</td>
									                       <?php } ?>

                                      </tr>
																		<?php } ?>

                                  </tbody>
      </table>

  </div>
  <!-- </div> -->
</body>
</html>

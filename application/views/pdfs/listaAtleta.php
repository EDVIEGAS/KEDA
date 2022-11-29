<html>
<head>
	<style>

		* {
			margin: 0;
			padding: 0;
			/* font-family: "Open Sans", Sans-serif; */
      font-family: 'Roboto', sans-serif;
		}

		body {
			padding: 20px;
			font-size: 10px;
      text-transform: uppercase;
		}

		table {
			width: 100%;
			border: 1px solid #555555;
			margin: 0;
			padding: 0;
		}

		th {
			text-transform: uppercase;
		}

		/* tr:nth-child(2n+0){
			background: #eeeeee;
		} */

		table, th, td {
			border: 1px solid #555555;
			border-collapse: collapse;
			text-align: left;
			padding: 10px;
			text-align: center;
		}

		img {
			border-radius: 50%;
		}

	</style>
</head>
<body>
<div class="card-body table-responsive p-4" style="height: 550px;" id="conteudoLista56387242638">
                <div class="modal-body" id="conteudoLista5638">
                    <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao : <?= date('d/m/Y', strtotime(strtoupper(date('Y-m-d'))));?></span>
                    <div>
                        <img style="width:100px; height:100px; margin-top: 30px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="assets/images/A22.png">
                    </div>
                    <p style="font-size: 14px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</p>

                    <p style="font-size: 14px;text-align: center;">ASSOCIACAO PROVINCIAL <?php echo $nomeAssociacao; ?></p>
                    <p style="font-size: 14px;text-align: center;">Lista dos Atletas Controlados pela Associacao</p>
                </div><br>

                <div class="modal-body">
                    <div class="card-body table-responsive p-0 conteudoLista56384Lista table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describeddy="example1_info">
                      <table width="100%" class="table table-sm" style="font-size:11px;line-height:9px">
                                      <thead class="bg-info" style="background-color: #a0a0a0;">
                                          <tr>
                                            <th width="2%">Nº</th>

                                            <th  width="30%">Nome</th>
                                            <th class="text-nowrap">D.Nasc</th>
                                            <th class="text-center">Graduacao</th>
                                            <th class="text-center">Estilo</th>
                                            <th class="text-center">Academia</th>
                                            <th class="text-center">Estado</th>
                                          </tr>
                                      </thead>

                      <tbody>
                      <?php $soma = 0;

                      ?>;

                      <?php foreach ($atletas as $retorno1) { ?>

                          <tr>
                                          <td><?php echo $soma = $soma + 1; ?></td>

                                          <td><?php echo $retorno1->nome; ?></td>
                                          <td><?= date('d/m/Y', strtotime(strtoupper($retorno1->data_nascimento)));?></td>
                                          <td class="text-center">
                                            <div class="text-center" id="conteiner3">

                                                  <?php if($retorno1->graduacao == 0){?>

                                                      <div class="entrada7">
                                                        <p style=""> Negro </p>
                                                      </div>

                                                  <?php }else if($retorno1->graduacao > 10){?>

                                                      <?php if($retorno1->graduacao == 15){ ?>
                                                        <div class="bg bg-warning">
                                                          <p style="color:black;">Amarelo</p>
                                                        </div>
                                                      <?php }elseif ($retorno1->graduacao == 16) { ?>
                                                        <div class="bg bg-light">
                                                          <p style="color:black">Branco</p>
                                                        </div>
                                                      <?php }elseif ($retorno1->graduacao == 14) { ?>
                                                        <div class="bg bg-orange">
                                                          <p style="color:black">Laranja</p>
                                                        </div>
                                                      <?php }elseif ($retorno1->graduacao == 13) { ?>
                                                        <div class="bg bg-success">
                                                          <p style="color:black">Verde</p>
                                                        </div>
                                                      <?php }elseif ($retorno1->graduacao == 12) { ?>
                                                        <div class="bg bg-primary">
                                                          <p style="color:black">Azul</p>
                                                        </div>
                                                      <?php }elseif ($retorno1->graduacao == 11) { ?>
                                                        <div class="bg bg-light">
                                                          <p style="color:black">Castanho</p>
                                                        </div>
                                                      <?php } ?>

                                                  <?php }else{ ?>

                                                      <div class="entrada7">
                                                        <p style=""><?= $retorno1->graduacao;?>º DAN</p>
                                                      </div>

                                                      <div class="entrada9">
                                                        <?php for($i=0;$i < $retorno1->graduacao;$i++){ ?>
                                                              <div class="entrada4">
                                                              </div>
                                                        <?php } ?>
                                                      </div>

                                                  <?php } ?>
                                            </div>
                                          </td>
                                          <td class="text-center project-actions"><?php echo $retorno1->nome_estilo; ?></td>
                                          <td class="text-center project-actions"><?php echo $retorno1->nome_academia; ?></td>
                                          <?php if($retorno1->statu_mestre == "Activo") {?>
                                          <td class="text-center project-state"><span class="badge badge-success"><?= $retorno1->statu_mestre;?></span></a></td>
                                          <?php }else{ ?>
                                          <td class="text-center statu_mestres1"><span class="badge badge-danger"><?= $retorno1->statu_mestre;?></span></a></td>
                                          <?php } ?>

                          </tr>

                      <?php } ?>

                      </tbody>
                      </table>
                      <div class="pt-2">
                      <span style="margin-left: 45px;">Total de Participantes : <?php echo count($atletas); ?></span><br>
                      </div>

                    </div>
                </div>
            </div>
</body>
</html>

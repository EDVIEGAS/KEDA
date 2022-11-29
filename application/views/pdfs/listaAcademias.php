<html>
<head>
	<style>

		* {
			margin: 0;
			padding: 0;
			font-family: "Open Sans", Sans-serif;
		}

		body {
			padding: 30px;
			font-size: 12px;
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

		tr:nth-child(2n+0){
			background: #eeeeee;
		}

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
                    <h2 style="font-size: 17px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>

                    <h2 style="font-size: 16px;text-align: center;">ASSOCIACAO PROVINCIAL (<?php echo $academia[0]->descricao_associacao; ?>)</h2>
                    <h2 style="font-size: 16px;text-align: center;">Lista dos Atletas Controlados pela Associacao</h2>
                </div><br>

                <div class="modal-body">
                    <div class="card-body table-responsive p-0 conteudoLista56384Lista table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describeddy="example1_info">
                      <table class="table table-sm" style="font-size:11px;line-height:9px">
                                      <thead class="bg-info" style="background-color: #17a2b8;">
                                          <tr>
                                            <th style="width: 10px">Nº</th>

                                            <th>Descricao</th>
                                            <th class="text-nowrap">Data de Fundacao</th>
                                            <th class="text-center">Estilo</th>

                                            <th class="text-center">Estado</th>
                                          </tr>
                                      </thead>

                      <tbody>
                      <?php $soma = 0;

                      ?>;

                      <?php foreach ($academia as $retorno1) { ?>

                          <tr>
                                          <td><?php echo $soma = $soma + 1; ?></td>

                                          <td><?php echo $retorno1->nome_academia; ?></td>
                                          <td><?= date('d/m/Y', strtotime(strtoupper($retorno1->Data_fundacao)));?></td>
                                          <td class="text-center project-actions"><?php echo $retorno1->nome_estilo; ?></td>

                                          <?php if($retorno1->statu == "Activo") {?>
                                          <td class="text-center project-state"><span class="badge badge-success"><?= $retorno1->statu;?></span></a></td>
                                          <?php }else{ ?>
                                          <td class="text-center statu_mestres1"><span class="badge badge-danger"><?= $retorno1->statu;?></span></a></td>
                                          <?php } ?>

                          </tr>

                      <?php } ?>

                      </tbody>
                      </table>
                      <div class="pt-2">
                      <span style="margin-left: 45px;">Total de Academias : <?php echo count($academia); ?></span><br>
                      </div>

                    </div>
                </div>
            </div>
</body>
</html>

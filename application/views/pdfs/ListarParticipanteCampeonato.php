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
                    <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao : <?= date('Y-m-d');?></span>
                    <div>
                        <img style="width:100px; height:100px; margin-top: 30px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="assets/images/A22.png">
                    </div>
                    <h2 style="font-size: 17px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
                    <hr>
                    <h2 style="font-size: 16px;text-align: center;">LISTA DE PARTICIPANTES AO NACIONAL DE JU-JITSU</h2>
                </div><br>
                <div class="modal-body">
                <div class="card-body table-responsive p-0 table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describeddy="example1_info">
                <table class="table table-sm" style="font-size:11px;line-height:9px">

                    <tbody>
                        <tr>
                            <td><strong>Pais/Cidade:</strong> Angola/<span><?php echo $participantesCabecalho[0]->cidade_campeonato; ?></span></td>
                            <td>Total de Membros : </td>
                        </tr>
                        <tr>
                            <td><strong>Director da Prova : </strong><span><?php echo $participantesCabecalho[0]->director_prova; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Data de Chegada : </strong><span><?php echo $participantesCabecalho[0]->dataHoraInicio; ?></span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Fim da Prova : </strong><span><?php echo $participantesCabecalho[0]->dataHoraFim; ?></span></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
                <div class="modal-body">
                    <div class="card-body table-responsive p-0 conteudoLista56384Lista table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describeddy="example1_info">
                      <table class="table table-sm" style="font-size:11px;line-height:9px">
                                      <thead class="bg-info" style="background-color: #17a2b8;">
                                          <tr>
                                          <th style="width: 10px">Nº</th>
                                          <th>Nome Completo</th>
                                          <th>Funcao</th>
                                          <th>Genero</th>
                                          <th class="text-center">Data de Nascimento</th>
                                          <th class="text-center project-actions">Categoria de Peso</th>
                                          <th>Provincia</th>
                                          </tr>
                                      </thead>

                      <tbody>
                      <?php $soma = 0;
                      $CompetidorTotal = 0;
                      $TreinadorTotal = 0;
                      $ArbitroTotal = 0;
                      ?>;

                      <?php foreach ($participantes as $retorno1) { ?>

                          <?php $peso = $retorno1->categoriaPeso == null ? " " : $retorno1->categoriaPeso . " kg"; ?>

                          <?php if ($retorno1->funcao == "Competidor") {
                                    $CompetidorTotal += 1;
                                  }else if ($retorno1->funcao == "Treinador") {
                                    $TreinadorTotal += 1;
                                  }else {
                                    $ArbitroTotal += 1;
                                  }
                          ?>

                          <tr>
                                          <td><?php echo $soma = $soma + 1; ?></td>
                                          <td><?php echo $retorno1->nome_participante; ?></td>
                                          <td><?php echo $retorno1->funcao; ?></td>
                                          <td><?php echo $retorno1->genero; ?></td>
                                          <td class="text-center"><?php echo $retorno1->dataNascimento; ?></td>
                                          <td class="text-center project-actions"><?php echo $peso; ?></td>
                                          <td><?php echo $retorno1->provincia; ?></td>
                          </tr>

                      <?php } ?>

                      </tbody>
                      </table>
                      <div class="pt-2">
                      <span style="margin-left: 45px;">Total de Participantes : <?php echo count($participantes); ?></span><br>
                      <span style="margin-left: 45px;">Competidor : <?php echo $CompetidorTotal; ?></span><br>
                      <span style="margin-left: 45px;">Treinador  : <?php echo $TreinadorTotal; ?></span><br>
                      <span style="margin-left: 45px;">Arbitro    : <?php echo $ArbitroTotal; ?></span>
                      </div>

                    </div>
                </div>
            </div>
</body>
</html>

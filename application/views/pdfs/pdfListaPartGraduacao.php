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
                    <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao:<?= date('Y-m-d');?></span>
                    <div>
                        <img style="width:100px; height:100px; margin-top: 20px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="assets/images/A22.png">
                    </div>
                    <h2 style="font-size: 17px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>

                    <h2 style="font-size: 17px;text-align: center;border-top: 2px solid #6c757d;">LISTA DOS APROVADOS A RECICLAGEM, GRADUACAO E OFICIALIZACAO DE FAIXAS NEGRAS</h2>
                </div><br>

                <div class="modal-body">

                    <table class="table" style="font-size:11px;width: 100%;">
                      <thead style="background-color: #6c757d;line-height:8px">
	                      <tr>
		                      <th>Nº</th>
		                      <th>Nome Completo</th>
		                      <th>Genero</th>
		                      <th>Provincia</th>
		                      <th>Nova Graduacao</th>
		                      <th>Tipo Exame</th>
	                      </tr>
                      </thead>
                      <tbody style="line-height:8px">
                       <?php $control = 0; ?>
                        <?php foreach($layoutParticipantesAprovadosGraduacao as $participantes){?>
                          <?php $control = $control + 1;?>
                          <tr>
                          <td><?php echo $control; ?></td>
                          <td><?php echo $participantes->nome_participante ?></td>
                          <td><?php echo $participantes->genero ?></td>
                          <td><?php echo $participantes->provincia ?></td>
                          <?php if ($participantes->nova_graduacao == "" || $participantes->nova_graduacao == null):?>
                                <td>----//----</td>
                          <?php else: ?>
                              <td><?php echo $participantes->nova_graduacao ?>ª DAN</td>
                          <?php endif; ?>

                          <td><?php echo $participantes->tipo ?></td>

                          </tr>
                        <?php }?>
                      </tbody>
                      </table>
                    </div>

            </div>
</body>
</html>

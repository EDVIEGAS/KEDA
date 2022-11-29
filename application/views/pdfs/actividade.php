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
			font-size: 11px;
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
	 <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao:<?= date('Y-m-d');?></span>
     <div>
		<img style="width:120px; height:120px; margin-top: 30px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="assets/images/A22.png">
	</div>
	<h2 style="font-size: 22px;text-align: center;margin-bottom: 18px">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
    <h2 style="font-size: 18px;text-align: center;">Calendario de Actividade para o ano de <?php echo($actividade[0]->ano_calendario);?></h2>
    <!-- <hr style="margin-left: 14px;"> -->
	<div>
		<table>
                  <thead style="background-color:#17a2b8">
                                    <tr>
                                        <th width="1%" class="numeracao">Nº</th>
                                        <th class="text-nowrap">Actividade</th>
                                        <th class="text-center">Local</th>
                                        <th class="text-center">Data Inicio</th>
                                        <th class="text-center">Data Fim</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   <?php $contador=0;
                                        foreach($actividade as $actividade):
                                    ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                                            <td id="nomeAatleta"><?= $actividade->nome_actividade; ?></td>
                                            <td class="text-center"><?= $actividade->local;?></td>
                                            <td class="text-center" id="nome_role"><?= $actividade->data_inicio;?></td>
                                            <td class="text-center status" id="controle"><?= $actividade->data_fim;?></td>
                                        </tr>
                                   <?php endforeach;?>
                                </tbody>
    </table>
		<div style="padding-top: 234px">
        <div style="display: inline;float:left;margin-left: 12px">
            <h2>O Secretario Geral</h2>
						<br/>
            <br/>
            <h2>___________________________</h2>
        </div>
        <div style="display: inline;float:right;margin-right: 12px;">
            <h2>Conselho Tecnico Nacional</h2>
            <br/>
            <br/>
            <h2>___________________________</h2>
            <h3><?php echo $SecretarioPresidente[0]->nome ?></h2>
        </div>
    </div>
	</div>

</body>
</html>

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
	 <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao : <?= date('Y-m-d');?></span>
	<div>
		<img style="width:100px; height:100px; margin-top: 40px; padding-button: 10px;border-radius: 100%;margin-left:50px" src="assets/images/A22.png">
	</div><br>
	  <h2 style="font-size: 18px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
	  <h2 style="font-size: 18px;text-align: center;">LISTA COMPLETA DOS ARBITROS</h2>
    <!-- <hr style="width:128px;"> -->
	<div>
		<table style="font-size:11px;line-height:4px">
                  <thead style="background-color:#17a2b8;color:white">
                                    <tr>
                                        <th>Nº</th>
                                        <th width="30%">Nome</th>
                                        <th >Catg.Internac</th>
                                        <th >Catg.Nac</th>
                                        <th >Catg.Prov</th>
                                        <th>Catg.</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   <?php $contador=0;
                                        foreach($Arbitro as $Arbitro):
                                    ?>

                                    <tr class="odd gradeX">
                                    	 <td width="1%" class="numeracao f-s-600 text-inverse"><?= $contador=$contador+1;?></td>
                                    	 <td ><?= $Arbitro->nome;?></td>
                                    	<?php if($Arbitro->nome_categoria_fk == "Internacional"){?>
			                                        <td>Int-<?= $Arbitro->provincia_e;?></td>
			                                        <td>*</td>
			                                        <td>*</td>
			                                        <td><?= $Arbitro->nome_subcategoria_fk?></td>
			                            <?php }else if($Arbitro->nome_categoria_fk == "Nacional"){?>
			                            			<td>*</td>
			                                        <td>Nac-<?= $Arbitro->provincia_e;?></td>
			                                        <td>*</td>
			                                        <td><?= $Arbitro->nome_subcategoria_fk?></td>
			                            <?php }else{ ?>
			                            			<td>*</td>
			                                        <td>*</td>
			                                        <td>Prov-<?= $Arbitro->provincia_e;?></td>
			                                        <td>*</td>
			                            <?php }?>
                                    </tr>
                                   <?php endforeach;?>
                                </tbody>
                            </table>
														<!-- <div class="pt-2">
															<span style="margin-left: 45px;">Internacionais : <?php echo $contador=$contador+1; ?></span><br>
															<span style="margin-left: 45px;">Nacionais      : <?php echo count($Arbitro); ?></span><br>
															<span style="margin-left: 45px;">Provinciais    : <?php echo count($Arbitro); ?></span><br>
															<span style="margin-left: 45px;">Total          : <?php echo count($Arbitro); ?></span><br>
														</div> -->
	</div>
</body>
</html>

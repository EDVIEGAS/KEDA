
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
	 <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao:<?= date('d/m/Y', strtotime(strtoupper(date('Y-m-d'))));?></span>
	<div>
		<img style="width:120px; height:120px; margin-top: 60px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="assets/images/A22.png">
	</div>
	<h2 style="font-size: 18px;text-align: center;padding-bottom:1px">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
	<h2 style="font-size: 18px;text-align: center;padding-bottom:1px">Lista Nominal dos Orgaos Sociais e os seus Membros</h2>
	<?php if($this->session->userdata("id_role") == 56){ ?>
	<h2 style="font-size: 18px;text-align: center;padding-bottom:1px">Associacao Provincial do <?php echo $this->session->userdata("nome"); ?></h2>
	<?php } ?>
    <!-- <hr style="margin-left: 14px;"> -->
	<div>
	<?php foreach($orgaos as $orgao){?>
	<div class="card" style="font-size:12px">

              <div>
                <table class="">
									<thead style="background-color:#17a2b8;color:white;padding:2px">
											<tr>
													<td colspan="4" style="text-align:left"><h3><?php echo ($orgao['descricao']) ?></h3></td>
											</tr>
									</thead>
                  <thead>
										<tr>
                      <th>CARGO</th>
                      <th>NOME COMPLETO</th>
                      <th>TELEFONE</th>
                      <th>FOTO</th>
                    </tr>
                  <thead>

                  <tbody>
                  <?php foreach($orgao['membros'] as $membro){?>
                    <tr >
                      <td><?php echo $membro['nome_cargo_membro']?></td>
                      <td><?php echo $membro['nome']?></td>
                      <td><?php echo $membro['telefone']?></td>
                      <?php if(empty($membro['imagem_membro'])){ ?>
                        <td><span class="tag tag-success"><img alt="Avatar" class="table-avatar" src="assets/dist/img/avatar.png" style="height: 50px;width: 50px;"></span></td>
                      <?php }else{?>
												<?php $imagem = 'uploads/product/' . $membro['imagem_membro'] ?>
                        <td><span class="tag tag-success"><img alt="Avatar" class="table-avatar" src=<?= $imagem ?>  style="height: 50px;width: 50px;"></span></td>

                      <?php } ?>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
                <br>
              </div>
			  </div>
    <?php }?>
	</div>
</body>
</html>

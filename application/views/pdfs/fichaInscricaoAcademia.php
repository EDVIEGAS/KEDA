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

      <div style="margin-top:65px;margin-bottom:45px">
        <div class="fichaRosto12" style="width:20%">
          <img style="height:100px;border-radius: 100%;margin-left:50px" src="assets/images/A22.png">
        </div>

      </div>

  	  <!-- <h2 style="font-size: 18px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2> -->
      <!-- <hr style="width:128px;"> -->

      <!-- <div style="width:100%;padding-bottom:1px;font-size:10px;text-align: center"> -->
        <!-- <div style="width:70%;text-align:center;margin-top:2px">
          <span style="font-size: 18px;text-align: center;border-bottom: 1px solid black">FICHA DE CADASTRO DE ATLETA - FAJUJ</span>
        </div> -->
        <div style="text-align:center;font-size:16px;">
          <strong><label style="border-bottom: 1px solid black">FICHA DE INSCRICAO ACADEMIA - FAJUJ</label></strong>
        </div>
    	<!-- </div> -->

      <br>

  		<table style="font-size:12px;line-height:4px;">
                                  <thead style="background-color:#17a2b8;color:white;display:none">
                                      <tr>
                                          <td colspan="4" style="text-align:left">INFORMACOES PESSOAL</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Responsavel</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">E-mail</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"></td>
                                      </tr>

                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Provincia</td>
                                      	 <td style="text-align: left;color:#2d2d2d"><?php echo $nomeAssociacao; ?></td>
                                         <td width="10%" style="text-align: right;color:#2d2d2d;background-color:#eeeeee;">Municipio</td>
                                      	 <td style="text-align: left;color:#2d2d2d"></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Designacao</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Data de Fundacao</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"></td>
                                      </tr>
                                      <tr class="">
                                      	 <td width="20%" style="background-color:#eeeeee;color:#2d2d2d;text-align: right">Estilo</td>
                                      	 <td colspan="3" style="text-align: left;color:#2d2d2d"></td>
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

  </div>
  <!-- </div> -->
</body>
</html>

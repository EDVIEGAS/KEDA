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
                    <span style="padding-left: 580px;padding-top: 20px; font-size: 10px">Data de emissao: <?php echo date('Y-m-d');?></span>
                    <div>
                        <img style="width:130px; height:130px; margin-top: 60px; padding-bottom: 16px;border-radius: 50%;margin-left:50px" src="assets/images/A22.png">
                    </div>
                   
                </div>
                <div class="modal-body">
                <div class="card-body table-responsive p-0 table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describeddy="example1_info">
                <h2 style="font-size: 22px;text-align: center;"><u>FEDERACAO ANGOLANA DE JU-JITSU e DA</u></h2><br><br>
                    
                    <p class="font-weight-bold" style="font-size: 20px;text-align: center;">Comunicado Final nº 005/SG-FAJUJ/2018</p><br>

                    <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;font-size: 14px;text-align: justify;text-justify: inter-word;">Para o conhecimento do secretario de estado para o desporto, a direção nacional do desporto, as direccao Provinciais da juventude e desporto, Associacoes Provinciais de Ju-Jitsu, órgãos de Comunicacao social e os demais interessados,
                    a federação Angolana de Ju-Jitsu comunica que foi realizado no passado dia <span id="iniciodaprova"></span> no <span id="idlocalcampeonato34"></span> a partir das 9h00 local, a <span id="edicaoCampeonato"></span>ª Edicao do Campeonato Nacional de Ju-Jitsu.
                    </p><br>

                    <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;font-size:14px;text-align: justify;text-justify: inter-word;">O evento reuniu as provinciais de <span class="font-weight-bold" id="listProvinciasCp"></span> num total de <span id="totalCompet45">72</span> competidores, dentre os atletas femininas e masculinos.
                    As competições decorreram nas categorias de <span id="listCategoriaCp"><?php var_dump($categorias) ?></span> e surgiram os seguintes resultados:
                    </p>

                    <p class="text-justify" id="CF36198ui1" style="margin-top:22px">
                        <div class="text-center" style="margin-left:264px">
                            <span class="font-weight-bold" style="font-size:16px;"><b>CLASSIFICACAO FINAL</b></span>
                                <?php foreach($retornoRelatorio as $retornoRelatorio2){ ?> 
                                <div class="info-box-content" style="width:100%;padding: 16px 0 8px 16px;">
                                    <?php foreach($retornoRelatorio2['generos'] as $genero){ ?>
                                    <?php if($genero['categoriaPesos'] != " "){ ?>
                                        <span class="info-box-text text-muted font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;font-size:14px;text-align:center"><u><b><?php echo $genero['genero']?></b></u></span><br>
                                        <?php foreach($genero['categoriaPesos'] as $categoriaPeso){ ?>
                                        <?php if(count($categoriaPeso['classificacaoFinals'])!=0){ ?>
                                        
                                            <div style="margin-top: 5px;margin-bottom: 5px;">
                                            <div>
                                                <span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"><b>Categoria de <?php echo $categoriaPeso['descricao_categoriaPeso'] ?> kg</b></span>
                                                </div>
                                                </div>
                                                <?php foreach($categoriaPeso['classificacaoFinals'] as $teste){ ?>
                                                
                                                <div class="text-center">
                                             
                                                        <?php if($teste['posicao'] == 1){ ?>
                                                            <span style="font-family: arial,sans-serif;font-weight: normal;font-size:14px" height="16">1. </span>
                                                            <?php }elseif($teste['posicao'] == 2) { ?>
                                                            <span style="font-family: arial,sans-serif;font-weight: normal;font-size:14px" height="16">2. </span>
                                                            <?php }else{ ?>
                                                            <span style="font-family: arial,sans-serif;font-weight: normal;font-size:14px" height="16">3. </span>
                                                        <?php } ?>

                                                           <span style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"><?php echo $teste['name_participante']?> - <?php echo $teste['provincia']?></span>
                                                            <span class="description"></span>
                                                    
                                                      
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php } ?>
                                </div>
                                <?php } ?>
                        </div>
                    </p>
                    <p class="text-justify" id="CF36198uiyu" style="font-size:42px;margin-top:22px">
                    <div style="margin-left:164px">
                    <span class="font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;font-size:16px;text-align: center;"><strong>CLASSIFICACAO DAS MEDALHAS POR PROVINCIA</strong></span>
                                                            </div>

                       <div class="text-center" style="margin-left:264px">
                        
                            <?php $control = 1; ?>

                            <?php uasort($relatorioProvincia, function ($a, $b) {
                                return strcmp($b['nome_medalha'], $a['nome_medalha']);
                                //Se quiser inverter a ordem basta trocar por return strcmp($b['nome'], $a['nome']);
                            });?>
                        
                            <?php foreach($relatorioProvincia as $retornoRelatoriof){ ?>
                            
                            <div class="info-box-content" style="width:100%;padding: 16px 0 8px 16px;">

                                <span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"><u><b><?php echo $control++ ?> ª Lugar</b></u></span><br>
                                <p><span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"><u><?php echo $retornoRelatoriof['nome_provincia']?> </u> - </span><span style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"><?php echo $retornoRelatoriof['nome_medalha']?> Medalhas</span></p>
                                <?php $i=0; ?>
                                <?php $a=0; ?>

                                <?php foreach($retornoRelatoriof as $medalhas2){?>
                                
                                    <?php if($i == 0){ ?>
                                    <?php }elseif($i == 1){ ?>
                                    <?php }else{ ?>
                                        <span class="" style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"><?php echo $medalhas2["Medalha"]['Descricao']?>  : </span><span style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"> <?php echo $medalhas2["Medalha"]['quantidade']?> </span><br>
                                    <?php } ?>
                                    <?php $i++; ?>
                                
                                <?php } ?>

                            </div>
                                
                            <?php } ?>
                            
                        </div>
                    </p>

                    <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;margin-top:12px;font-size:14px;text-align: justify;text-justify: inter-word;">
                    As Competições terminaram quando eram 15 horas locais com as premiações e entrega dos certificado de certificado de participações aos participantes a <span id="edicaoCampeonato56"></span>ª Edição do campeonato Nacional de Ju-Jitsu.
                                    </p>
                    <p style="font-family: arial,sans-serif;font-weight: normal;font-size:14px">Nada mais para comunicar
                    </p><br>

                    <p class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;text-align:center;font-size:14px">
                    Luanda, aos <span id="fimdaprova12"></span>
                    </p><br>

                    <p class="text-justify text-center" style="font-family: arial,sans-serif;font-weight: normal;text-align:center;font-size:14px">
                    O Secretario Geral
                    </p><br>

                    <p class="text-justify" style="font-family: arial,sans-serif;font-weight: normal;text-align:center;font-size:14px" id="secretarioGeral34">
                    <?php echo $nome_secretarioGeral ?>
                    </p>
                </div>
                </div>
                
            </div>
</body>
</html>


<html>
<head>
	<style>

		.tela21 {
            background-image: url('assets/images/QWS21.jpg');
            height: none;
            width: 464px;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: rgb(231, 231, 231);
            font-weight: 500;
            font-size: larger;
            text-shadow: 1px 1px white, 1px 1px #333;
        }

        .tela77 img {
            opacity: 0.7;
            padding-right: 6px;
        }

        .tela212 {
            padding: 30px;
            display: flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .tela99 {
            padding-bottom: 12px;
        }

        .tela66 {
            width: 70%;
        }

        .tela55 {
            margin-left: 38px;
            display: flex;
            flex-direction: column;
        }

        .tela55 span {
            text-align: center;
            font-size: 16px;
            padding-top: 8px;
        }

        .tela98 {
            display: flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .a2 {
            font-size: 14px;
        }

        .a3 {
            font-size: 14px;
        }

        .u12 {
            display: flex;
        }

        .u12 {
            font-size: 13px;
            justify-content: space-between;
            padding-bottom: 16px;
        }

        .tela66 hr {
            color: rgb(231, 231, 231);
        }

        .s12 {
            font-size: 8px;
            padding-top: 12px;
        }

        .tela879 {
            display: flex;
            padding-bottom: 12px;
        }

        .tela47 {
            font-size: 16px;
        }

        .aa34 {
            padding-bottom: 16px;
        }

        .aa345 span {
            font-size: 13px;
        }

        .aa345 {
            padding-bottom: 12px;
        }

        .logomarca34 {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: -1;
            transform: translate(-50%, -50%);
            opacity: 0.3;
        }

	</style>
</head>
<body>
	 <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao:<?= date('Y-m-d');?></span>

	 <div class="content ml-3" style="margin-left: 0rem;padding-left: 138px;">
		 	<div class="card" style="border-radius: 2%;height:304px;width: 482px;background-color: #fff;background-image: url('http://localhost/KEDA/assets/images/1.JPG');background-size: cover">

		 		<div class="card-body">
		 			<div class="d-flex pt-3 col-12" style="color:#323333;margin-top: 44px;">


		 					<div class="d-flex flex-column col-lg-8" style="bottom: 0px;margin-bottom: 0px;border-bottom-width: 0px;border-bottom-style: solid;top: 33px;">
		 							<div class="d-flex">
		 									<div class="d-flex flex-column ml-2 text-bold" style="font-weight: 700;font-size: 16px;">
		 									<span>04-FEF90 - <?php echo $verMestre[0]->graduacao ?>ªDAN</span>
		 									<span><?php echo $verMestre[0]->nome ?></span>
		 									</div>
		 							</div>
		 							<div class="d-flex">
		 									<div class="d-flex flex-column ml-2 text-bold" style="font-weight: 700;font-size: 16px;">
		 									<span>NASC</span>
		 									<span>29-10-1989</span>
		 									</div>
		 									<div class="d-flex flex-column ml-5 text-bold text-right" style="font-weight: 700;font-size: 16px;">
		 									<span>VALIDADE</span>
		 									<span>2022</span>
		 									</div>
		 							</div>
		 							<div class="d-flex" style="margin-top: 73px;">
		 									<div class="" style="font-weight: 700;font-size: 12px;">
		 									<span style="" class="text-uppercase">ASSOCIACAO PROVINCIAL DE <?php echo $verMestre[0]->descricao_associacao?></span>
		 									</div>

		 							</div>
		 					</div>

		 					<div class="d-flex flex-column col-lg-4">
		 							<div class="bg-light mb-1" style="width: 130px;height:150px;">
		 									<img src="http://localhost/KEDA/uploads/product/<?php echo $verMestre[0]->imagem?>" alt = "Product 1" style="width: 130px;height: 150px;border-radius:0%;box-shadow: 0 0 1px #f8f9fa,0 1px 3px #f8f9fa;">
		 							</div>

		 							<span style="margin-left: 1px;margin-left: 35px;">MESTRE</span>
		 					</div>

		 			</div>
		 			<!-- /.d-flex -->

		 			<!-- /.d-flex -->

		 			<!-- /.d-flex -->
		 		</div>
		 	</div>

		 	<div class="card border" style="border-radius: 2%;height:304px;width: 482px;background-color: #fff;background-image: url('http://localhost/KEDA/assets/images/2.JPG');background-size: cover">
		 		<div class="card-header border-0">

		 			<div class="card-tools">

		 			</div>
		 		</div>
		 		<div class="card-body">
		 			<div class="bt-3 text-center" style="display: block;">
		 					<img src="http://localhost/KEDA/assets/images/PNG12.png" alt = "Product 1" style="width: 100px;height: 104px;margin-bottom: 0px;margin-top: 74px;margin-left: 325px;">
		 			</div>
		 		</div>
		 	</div>
 	</div>
</body>
</html>

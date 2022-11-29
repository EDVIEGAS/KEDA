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

        .content {
            /* position:relative; */
        }

        .card {
            height: 527px;
            width: 358px;
            background-color: #fff;
            /* position:relative; */
            /* border: 1px solid gray; */
        }

	</style>
</head>
<body>
	 <span style="padding-left: 580px;padding-top: 20px; font-size: 11px">Data de emissao:<?= date('Y-m-d');?></span>
	
	<h2 style="font-size: 18px;text-align: center;">FEDERACAO ANGOLANA DE JU-JITSU e DA</h2>
    <hr style="margin-left: 14px;">
	<div class="content">
        <div class="card border" style="height: 527px;width: 358px;background-color: #fff;">
              <!-- <div class="card-header border-0" style="background-image: url('http://localhost/KEDA/assets/images/QWS21.jpg');">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Campeonato Provincial de Bengo</h3>
                </div>
              </div> -->
              <div class="card-body">
                <div class="d-flex">
                  <div class="d-flex flex-column">
                    <img src="http://localhost/KEDA/assets/images/2.JPG" alt = "Product 1" style="width: 130px;height: 150px;border-radius:0%">
                  </div>
                  <div class="d-flex flex-column" style="margin-left: 18px">
                    <div class="bg-light mb-1" style="width: 164px;height:96px;">
                    <img src="http://localhost/KEDA/assets/images/A22.PNG" alt = "Product 1" style="width: 164px;height: 96px;border-radius:0%;box-shadow: 0 0 1px #f8f9fa,0 1px 3px #f8f9fa;">
                    </div>
                    <div class="bg-danger bt-2 text-center" style="display: block; width: 164px;height:50px;box-shadow: 0 0 1px #dc3545,0 1px 3px #dc3545;"><h2><strong>APb</strong></h2></div>
                  </div>
                </div>
                
                <div class="d-flex flex-column pt-3 pb-3">
                    <div class="text-left text-bold" style="font-weight: 700;font-size: larger;">
                        Edson <span class="text-uppercase">Viegas</span>
                    </div>
                    <div class="text-left text-bold pt-2">
                        <span class="text-uppercase">COMPETIDOR</span>
                    </div>
                    <!-- <div class="text-left text-bold pt-2">
                        Edson <span class="text-uppercase">Viegas</span>
                    </div> -->
                  </div>
               
            
                <div class="d-flex flex-row pb-4">
                  <span class="mr-2">
                    <img src="http://localhost/KEDA/assets/images/PNG12.png" alt = "Product 1" style="width: 95px;height: 102px;border-radius:0%">
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>

                <div class="d-flex flex-row">
                  <div class="mr-2 text-center" style="background-color:#212529;width: 78px;height: 45px;color:white;box-shadow: 0 0 1px #212529,0 1px 3px #212529;">
                    <h6><strong>FAJUJ-DAO</strong></h6>
                  </div>
                  <div class="mr-2 text-center" style="width: 78px;height: 45px;color:white">
                    <img src="http://localhost/KEDA/assets/images/bandera123.png" alt = "Product 1" style="width: 78px;height: 50px;border-radius:0%">
                  </div>
                </div>
              </div>
        </div>
	</div>
</body>
</html>


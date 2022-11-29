<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gerir Campeonato</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
          <div class="box-tools col-1 mt-2">
                <a href="javascript:history.back();"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">

      <!-- Default box -->
      <!-- USERS LIST -->
      <div class="card">
        <?php if(count($Participantes_mundial) != 0) {?>
        <div class="card-header">
          <h5 class="text-center text-uppercase">CAMPEONATO DO MUNDO / <?php echo $Participantes_mundial[0]->local ?> <?php echo $Participantes_mundial[0]->ano ?></h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-2">
          <h5 class="text-center text-uppercase">Lista de Participantes</h5>
          <br>
          <ul class="users-list clearfix pt-2">
            <?php  foreach ($Participantes_mundial as $Participantes_mundial){?>
              <li>
                <?php  if($Participantes_mundial->imagem == ""){?>
                  <img src="<?= base_url('assets/images/3.JPG');?>" alt="User Image" height="90" width="90" style="height:100px;width:100px">
                <?php  }else{?>
                  <img src="<?= base_url('uploads/product/' . $Participantes_mundial->imagem);?>" alt="User Image" height="100" width="100" style="height:100px;width:100px">
                <?php  }?>
                <a class="users-list-name" href="#" style="font-size:16px"><?php echo $Participantes_mundial->nome_pessoa ?></a>
                <?php if($Participantes_mundial->posicao == 1){ ?>
                  <span class="users-list-date" style="font-size:16px">Ouro</span>
                <?php }elseif ($Participantes_mundial->posicao == 2) { ?>
                  <span class="users-list-date" style="font-size:16px">Prata</span>
                <?php }elseif ($Participantes_mundial->posicao == 3) { ?>
                  <span class="users-list-date" style="font-size:16px">Bronze</span>
                <?php }else{?>
                  <span class="users-list-date" style="font-size:16px">Sem classificacao</span>
                <?php } ?>

              </li>
            <?php  } ?>
          </ul>
          <!-- /.users-list -->
        </div>
      <?php }else{ ?>
        <div class="card-header">
          <h5 class="text-center">CAMPEONATO DO MUNDO</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <br>
          <h5 class="text-center p-5">Sem informacao relativa aos participantes <a href="http://localhost/KEDA/Campeonato/CampeonatoGerir200/459" class="small">Adicionar</a></h5>

          <!-- /.users-list -->
        </div>
      <?php } ?>
      </div>
      <!--/.card -->

</section>

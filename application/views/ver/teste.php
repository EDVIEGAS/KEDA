<section class="content text-sm">
      <div class="container-fluid">
        <div class="box-tools col-md-1 mb-3">
                <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm"><i class="fa fa-reply"></i> Voltar</button></a>
        </div>
        <div class="row ml-5 mr-5">
          <div class="col-md-3" style="padding-left:4.5px">

            <!-- Profile Image -->
            <div class="card card-primary card-outline" style="border-top:0px;">
              <div class="card-body box-profile" style="padding-top: 4px;padding-right:4px;padding-left:4px">
              
                <div id="text-center5" class="text-center">
                    <?php if($verMestre[0]->imagem != null){ ?>
                    <img class="profile-user-img img-fluid p-0" src="<?= base_url('uploads/product/' . $verMestre[0]->imagem);?>" style="height:18.1rem; width:14.1rem;border:1px solid #adb5bd">
                    <?php }else{ ?>
                    <img class="profile-user-img img-fluid p-0" src="<?= base_url('assets/images/3.jpg')?>" style="height:18.1rem; width:14.1rem;border:1px solid #adb5bd">
                    <?php } ?>
                </div>

                <p class="text-center text-muted"><?php echo $verMestre[0]->nome?></p>

                <p class="text-muted text-center">Software Engineer</p>

                <div class="tela21 col-sm-6" style="height:20%">
                    <div class="tela212">
                        <div class="tela66">

                            <div class="tela879">
                                <div class="tela77">
                                    <img src="<?= base_url('assets/images/A22.png')?>" alt="User Image" style="width: 20px;height: 20px;">
                                </div>
                                <div class="tela47">
                                    <span class="a1">FAJUJ - FEDERACAO</span><br>
                                    <span class="a1">ANGOLANA DE JIU-JITSU</span><br><br>
                                </div>
                            </div>

                            <div class="aa34">
                                <span class="a2">04-2616 - 4ª DAN</span>
                                <span class="a3"><?php echo $verMestre[0]->nome?></span>
                            </div>

                            <div class="u12">
                                <div class="uu12">
                                    <span class="">NASC</span><br>
                                    <span class="">29/10/1979</span>
                                </div>
                                <div class="uu13">
                                    <span class="">VALIDADE</span><br>
                                    <span class="">2022</span>
                                </div>
                            </div>

                            <div class="aa345">
                                <span class="a2">ASSOCIAÇÃO PROVINCIAL DE LUANDA</span>
                            </div>
                            <hr>
                            <div class="s12">
                                <span class="">CARTÕES GERADOS PELO SISTEMA KEDA</span>
                                <span class="">DESENVOLVIDO POR EDSON VIEGAS</span>
                            </div>
                        </div>
                        <div class="tela55">
                            <div class="tela99">
                                <img">
                              <?php if($verMestre[0]->imagem != null){ ?>
                              <img src="<?= base_url('uploads/product/' . $verMestre[0]->imagem);?>" alt="User Image" style="width: 50px;height: 55px;">
                              <?php }else{ ?>
                              <img src="<?= base_url('assets/images/3.jpg')?>" alt="User Image" style="width: 50px;height: 55px;">
                              <?php } ?>
                            </div>
                            <div class="tela98 p-2">
                                <img src="<?= base_url('assets/images/PNG12.png')?>" alt="User Image" style="width: 30px;height: 30px;">
                            </div>
                            <span class="">MESTRE</span>
                        </div>
                    </div>
                </div>

                <span style="color:#007bff">Gerar cartão em alta definição para impressão</span>
              </div>

              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Localizacao</strong>
                <p class="text-muted"><?php echo $verMestre[0]->provincia;?>, <?php echo $verMestre[0]->municipio;?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
           <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ficha Individual</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Estatistica</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                                  <div class="p-0" style="color:#5b5b5b"><h7><strong>INFORMAÇÃO PESSOAL</strong></h7></div>
                                  <hr>
                                  <div class="table-responsive" style="line-height:12px">
                                    <table class="table" style="width:83%">
                                      <tbody>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Nome</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->nome;?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Genero</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->genero;?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Bilhete de Identidade</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->n_bilhete;?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Telefone</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->telefone;?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Data de Nascimento</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?= date('d/m/Y', strtotime(strtoupper($verMestre[0]->data_nascimento)));?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Morada</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->provincia;?>/<?php echo $verMestre[0]->municipio;?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">E-email</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->email;?></td>
                                        </tr>
                                      </tbody>
                              
                                    </table>
                                  </div>

                                  <div class="p-0" style="color:#5b5b5b"><h7><strong>INFORMAÇÃO TÉCNICA</strong></h7></div>
                                    <hr>
                                   <div class="table-responsive" style="line-height:12px">
                                    <table class="table" style="width:83%">
                                    <tbody>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Peso</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->peso;?> Kg</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Graduacao</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->graduacao;?></td>
                                        </tr>
                                        
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Estilo</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->nome_estilo_atleta;?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Academia</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->nome_academia;?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                          <td width="24%" class="text-right" style="padding: 4px;border-top: 0px solid">Estado</td>
                                          <td id="nomeAatleta" class="text-muted text-sm" style="padding: 4px;border-top: 0px solid"><?php echo $verMestre[0]->statu_mestre;?></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                              
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      
                    </div>
                  </div>
                 
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
              
            </div>

            <div class="card">
              <div class="card-header p-2">
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Opoes de Documentos</button>
                    <div class="dropdown-menu" role="menu" style="">
                      <a class="dropdown-item" href="#" id="Listar900"><div><i class="fa fa-address-card t-plus-1 text-secundary fa-fw fa-lg"></i> Carteira (PDF)</div></a>
                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-certificate"></i> Diploma (Excel)</div></a>
                      <a class="dropdown-item" href="#" id="Listar900"><div><i class="fas fa-id-badge t-plus-1 text-secundary fa-fw fa-lg"></i> Carteira (PDF)</div></a>
                      <a class="dropdown-item" href="#" id="CriarParticipante768"><div><i class="fa fa-file-excel t-plus-1 text-secundary fa-fw fa-lg"></i> Exportar Listagem (Excel)</div></a>
                    </div>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
              
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          

          
          
        </div>
      </div>
</section>
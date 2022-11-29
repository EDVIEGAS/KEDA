
$(this).ready(function() {

    checados = new Array;
    checadosDel = new Array;
    checadosDel3 = new Array;

    var id_role = $('#role').val();

    $('.inputi').click(function() {
// alert("ola sdsdfsfsdfsdfsdf");
        $('#btnn456').removeClass('hide');

        var role = $('#role').val();

        //var submenus = $(this).val();

        var submenus = $(this).attr('idsubmenu');
        var menus = $(this).attr('idmenu');

        if ($(this).is(':checked')) {

            // $('input[id='+menus+"control"+']:checkbox').prop('checked', true);
            $('label[for=' + menus + submenus + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

            checados.push({
                'id_role': role,
                'id_menu': menus,
                'id_submenu': submenus
            });

        } else {

            $('label[for=' + menus + submenus + ']').css('background', '#dee2e6');
            // var checadosDel3 = new Array;

            checadosDel3.push({
                'id_role': role,
                'id_menu': menus,
                'id_submenu': submenus
            });

            // console.log(checadosDel3);

            // $.post('http://localhost/KEDA/Permissao/pegarPermissoes2', { checadosDel3 }, function(event) {
            //     var event2 = JSON.parse(event);
            //     for (var i = 0; i < event2.length; i++) {
            //         checadosDel.push({
            //             'id_menu_sub_menu': event2[i].id_menu_sub_menu
            //         });
            //     }
            // });

        }

        submenus = $('input[idmenu=' + $(this).attr('idmenu') + ']');

        $.each(submenus, function(i, submenu) {
                if ($(submenu).is(":checked")) {
                    $('label[idmenu2=' + $(this).attr('idmenu') + ']').css('background-image', 'url("http://localhost/KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
                    return false;
                } else {
                    $('label[idmenu2=' + $(this).attr('idmenu') + ']').css('background', '#dee2e6');
                }
            })
            // console.log(checadosDel);
    });

    var modalEscolherAtleta = '<div class="modal" id="confirm-escolher-atleta">' +
        '<div class="modal-dialog">' +
        '<div class="modal-content">' +
        +'</div>' +
        '<div class="modal-body">' +
        '<div class="panel-body">' +
        '<div id="jstree-ajax" class="jstree jstree-4 jstree-default" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="j4_loading" aria-busy="false">' +
        '<ul class="jstree-container-ul jstree-children" role="group">' +
        '<li id="j4_loading" class="jstree-initial-node jstree-loading jstree-leaf jstree-last" role="tree-item">' +
        '<i class="jstree-icon jstree-ocl">' +
        '</i><a class="jstree-anchor" href="#">' +
        '<i class="jstree-icon jstree-themeicon-hidden"></i>Loading ...</a></li>' +
        '</ul>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';

    $('#role').on('change', function() {

        // $('.meu234').addClass('card-primary')

        var role = parseInt($('#role').val());


        if (role === 0) {
            $('#corpoPermissao908').attr('hidden', 'hidden');
        } else {

            $('#corpoPermissao908').removeAttr('hidden');

            $('.input:checkbox').prop('checked', false);
            $('label[id=label34]').css('background', '#dee2e6');
            $('label[id=label344]').css('background', '#dee2e6');

            var role = parseInt($('#role').val());

            $('#head33').removeClass('hide');
            $('#corpo').removeClass('hide');
            $('#checkedTodos').removeClass('hide');
            // $('#btnn').removeClass('hide');
            var id_role = role;

            $.ajax({
                type: 'post',
                data: { id_role },
                url: 'http://localhost/KEDA/Permissao/obterMenusAcessoRole',
                beforeSend: function(event) {

                    var conteudo = `<div class="fa-3x text-center"><i class="fas fa-spinner fa-pulse"></i></div>`;
                    $('#Beforemensagem').removeAttr('hidden').html(conteudo);
                    $('#callback3').removeAttr('hidden').html('Carregando as Permissoes...');

                },
                success: function(event) {

                    $('#Beforemensagem').attr('hidden', 'hidden');
                    $('#callback3').attr('hidden', 'hidden');

                    $('.label834').css('background', '#dee2e6');

                    $('.meu234').removeClass('card-success').addClass('card-primary');
                    // $('.meu234').removeClass('card-success').addClass('card-primary');
                    $('input[class=checkSub1256]:checkbox').prop('checked', false);
                    $('label[class=label834]').css('background', '#dee2e6');

                    var event1 = JSON.parse(event);

                    console.log(event1);

                    if(event1.length !== 0){

                        $.each(event1, function (i, value){

                            $('div[id='+value.id+']').removeClass('card-primary').addClass('card-success');
                            $('div[id='+value.id+value.id_submenu+']').removeClass('card-primary').addClass('card-success');

                            $('input[id=' + value.id + "control" + ']:checkbox').prop('checked', true);
                            $('label[for=' + value.id + "control" + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

                            // $('input[id=' + value.id + value.id_submenu + ']:checkbox').prop('checked', true);
                            // $('label[for=' + value.id + value.id_submenu + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

                            $.each(value.submenus, function (i, value2){

                                $('div[id='+value.id+']').removeClass('card-primary').addClass('card-success');
                                $('div[id='+value.id+value2.id_submenu+']').removeClass('card-primary').addClass('card-success');

                                // $('input[id=' + value.id + "control" + ']:checkbox').prop('checked', true);
                                // $('label[for=' + value.id + "control" + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/stop.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

                                $('input[id=' + value.id + value2.id_submenu + ']:checkbox').prop('checked', true);
                                $('label[for=' + value.id + value2.id_submenu + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

                                $.each(value2.submenusubmenus, function (i, value3){

                                    $('input[id=' + value3.id_submenu_submenusubmenu + value2.id_submenu + "control" + ']:checkbox').prop('checked', true);
                                    $('label[for=' + value3.id_submenu_submenusubmenu + value2.id_submenu + "control" + ']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');

                                })
                            })

                        })

                    }else{
                      // $('.checkSub1256':checkbox').prop('checked', true);
                        $('.label834').css('background', '#dee2e6');

                        $('.meu234').removeClass('card-success').addClass('card-primary');
                        // $('.meu234').removeClass('card-success').addClass('card-primary');
                        $('input[class=checkSub1256]:checkbox').prop('checked', false);
                        $('label[class=label834]').css('background', '#dee2e6');

                    }
                }
            });
        }

    });

    var checkedTodos = $('#checkedTodos');
    checkedTodos.click(function() {
        if ($(this).is(':checked')) {
            $('input:checkbox').prop("checked", true);
        } else {
            $('input:checkbox').prop("checked", false);
        }
    })

})

menuSubmenuCamada3 = [];
menuSubmenuCamada4 = [];
// checados = [];

$('.checkSub1256').click(function(){
// alert("olahhhhh");
    var role1 = $('#role').val();

    var menus1 = $(this).attr("idmenu");

    var id_submenusubmenuid_submenu = $(this).attr('id');
    var id_submenu = $(this).attr('idsubmenu');

    var id_submenusubmenu = $(this).attr('idsubmenusubmenu');

    const camada3 = id_submenusubmenu == undefined ? 17 : id_submenusubmenu;

    const chaveControl = role1 + menus1 + id_submenu + id_submenusubmenu;

    if ($(this).is(":checked")) {

        $('label[for='+id_submenusubmenuid_submenu+']').css('background', '#49b6d6').css('background-image', 'url("http://localhost/KEDA/assets/images/checkbox3.png")').css('background-position', 'center center').css('text-align', 'center').css('background-size', '80%').css('background-repeat', 'no-repeat');
        // $('label[for='+id_submenusubmenuid_submenu+']').css('background', '#dee2e6');

        dados = {
            chave : chaveControl,
            role : role1,
            menus1 : menus1,
            submenus : id_submenu,
            submenusubmenu : camada3
        };

        let posicaoRemove = menuSubmenuCamada3.findIndex(function(wizard) {
            return wizard.chave === chaveControl;
        });

        menuSubmenuCamada4.splice(posicaoRemove, 1);
        checadosDel = menuSubmenuCamada4;

        menuSubmenuCamada3.push(dados);
        checados = menuSubmenuCamada3;

        console.log(checados);
        // console.log("NAO CHECADOS" + checadosDel);

    } else {

        $('label[for='+id_submenusubmenuid_submenu+']').css('background', '#dee2e6');

        dados = {
            chave : chaveControl,
            role : role1,
            menus1 : menus1,
            submenus : id_submenu,
            submenusubmenu : camada3
        };

        let posicaoRemove = menuSubmenuCamada3.findIndex(function(wizard) {
            return wizard.chave === chaveControl;
        });

        menuSubmenuCamada3.splice(posicaoRemove, 1);
        checados = menuSubmenuCamada3;

        menuSubmenuCamada4.push(dados);
        checadosDel = menuSubmenuCamada4;

        console.log(checadosDel);
        // console.log("CHECADOS" + checados);

    }
})


var modalNotSelected = `<div class="modal fade text-sm pb-5" id="modal-default-modalNotSelected">
                <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body alert alert-warning alert-dismissible m-3">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Atencao!</h5>
                        <p id="mensagem77" class="text-center">Nenhum elemento foi selecionado</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Fechar</button>
                        </div>
                    </div>

                    </div>

</div>`;

var modalSelectedGravarDialog = `<div class="modal fade text-sm pb-5" id="modal-default-modalSelectedGravarDialog">
                <div class="modal-dialog">
                <div class="modal-content">

                        <div class="modal-body p-5" id="mensagem459ooo">

                        </div>

                    </div>

                    </div>

</div>`;


$('#btnn456').click(function() {
// console.log(checados);
    if(checados.length === 0 && checadosDel.length === 0){
      if (!$('modal-default-modalNotSelected').length) {
          $('body').append(modalNotSelected);
      }

      $('#modal-default-modalNotSelected').modal('show');
    }else{

      if (!$('modal-default-modalSelectedGravarDialog').length) {
          $('body').append(modalSelectedGravarDialog);
      }

      if (checados.length !== 0) {

        // alert("oi456456");
          $.ajax({
              type: 'post',
              data: { checados },
              url: 'http://localhost/KEDA/Permissao/gravarPermissoes',
              beforeSend: function() {
                  var conteudo = `<div class="fa-3x text-center"><i class="fas fa-spinner fa-pulse"></i><br><span style="font-size:16px">Gravando as Permissoes...</span></div>`;
                  $('#Beforemensagem').removeClass('hide').html(conteudo);

                  $('#mensagem459ooo').html(conteudo);

                  $('#modal-default-modalSelectedGravarDialog').modal('show');

                  // $('#corpoPermissao908').html(conteudo);
                  $('#callback3').removeClass('hide').html('Carregando as Permissoes...');

              },
              success: function(event) {

                location.reload();

                  // setTimeout(function() {
                  //     $('#callback2').slideUp("slow", function() {
                  //         $('#callback2').addClass('hide');
                  //     });
                  // }, 4000)

              }

          })

      }

      if (checadosDel.length !== 0) {

        // alert("oi456456");
          $.ajax({
              type: 'post',
              data: { checadosDel },
              url: 'http://localhost/KEDA/Permissao/gravarPermissoesDel',
              beforeSend: function() {
                  var conteudo = `<div class="fa-3x text-center"><i class="fas fa-spinner fa-pulse"></i><br><span style="font-size:16px">Gravando as Permissoes...</span></div>`;
                  $('#Beforemensagem').removeClass('hide').html(conteudo);
                  // $('#corpoPermissao908').html(conteudo);
                  $('#mensagem459ooo').html(conteudo);

                  $('#modal-default-modalSelectedGravarDialog').modal('show');

                  $('#callback3').removeClass('hide').html('Carregando as Permissoes...');
              },
              success: function(event) {
                location.reload();
                // alert(event + "olaolaolao");
                  // $('#modal-default-modalSelectedGravarDialog').modal("hide");
                  // $('#Beforemensagem').addClass('hide');
                  // $('#callback3').addClass('hide');
                  //
                  // $('#callback2').removeClass('hide').html(event);
                  //
                  // setTimeout(function() {
                  //     $('#callback2').slideUp("slow", function() {
                  //         $('#callback2').addClass('hide');
                  //     });
                  // }, 4000)
                  //
                  // $('#confirm-escolher-atleta').hide();
              }

          })

      }
    }

})

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'App';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'App/entrar';
$route['dashboard'] = 'App/dashboard';
$route['sair'] = 'App/sair';
$route['ver'] = 'teste/ver';
$route['gerenciar'] = 'backupbanco/gerenciarBackup';

$route['novo_atleta'] = 'Atleta/novo';
$route['novo_actividade'] = 'actividade/novo';
$route['novo_treinador'] = 'treinador/novo';
$route['salvar_mestre'] = 'mestre/novo';
$route['listarAtleta'] = 'Atleta/listar_atleta';
$route['actividade'] = 'actividade/cadastrar_actividade';
$route['addgraduacao'] = 'graduacao/cadastrar_graduacao';
$route['categoria'] = 'App/cadastrar_categoria';
$route['nivel'] = 'App/cadastrar_nivel';
$route['actividade1'] = 'App/cadastrar_actividade1';
$route['categoria1'] = 'App/cadastrarCategoria';
$route['cadaMuni'] = 'App/cadastrarMunicipio';
$route['cada_Muni'] = 'App/cadastrar_Municipio';
$route['cada_Acad'] = 'config_crud/';
$route['cada_Acad1'] = 'config_crud/cadastrar_academia1';
$route['cada_Arbi'] = 'Arbito/cadastrar';
$route['cada_treinador'] = 'treinador/cadastrar_treinador';
$route['cada_Arbitro'] = 'Arbitro/novo';
$route['addAtleta'] = 'Atleta/addAtleta';
$route['addMestre'] = 'mestre/addMestre';
$route['NovorgaoSocial'] = 'Orgao_Social/novo';
$route['novoMestre'] = 'mestre/novo';
$route['cada_tecnico'] = 'tecnico/cadastrarTecnico';
$route['cada_academia'] = 'Academia/cadastrar_academia';
$route['novaAcademia'] = 'Academia/cadastrar';
$route['cadastrar_orgao/(:num)'] = 'Orgao_Social/cadastrar/$1';
$route['cadastrar_Arbitro'] = 'Arbitro/cadastrar';
$route['cadastrarcampeonato'] = 'campeonato/addCampeonato';
$route['cadastrarcampeonatoNacional'] = 'campeonato/NovoCampeonatoNacional';
$route['cadastrarcampeonatoProvincial'] = 'campeonato/NovoCampeonatoProvincial';
$route['cadastrar_campeonato'] = 'Campeonato/novo';
$route['graduacao'] = 'graduacao/novo';
$route['cadastrar_campeonato_pro'] = 'Campeonato/novo_provincia';
$route['gerirCampeonato/(:num)'] = 'Campeonato_Nacional/gerirCampeonato/$1';
$route['Campeonato_Gerir'] = 'Campeonato/CampeonatoGerir200';
$route['Campeonato_Gerir_africano'] = 'Campeonato/CampeonatoGerir400';
$route['registrarMundialAfricano'] = 'Campeonato/registrarMundialAfricano';
$route['registrarAfricano'] = 'Campeonato/registrarAfricano';
// $route['campeonatoNovoProvincial'] = 'Campeonato/novo_provincial';
$route['backup'] = 'backupbanco/fazerBackupBanco';
$route['backupGerir'] = 'backupbanco/gerenciarBackup';
$route['verSelecao'] = 'selecao/novo';
//rotas para listarasd

$route['listaAtividade'] = 'actividade/listar';
$route['listaMundial'] = 'Campeonato/ListarCampeonatoMundial';
$route['listaGraduacao'] = 'graduacao/listar';
$route['listaAfricano'] = 'Campeonato/ListarCampeonatoAfricano';
$route['listaMundial/(:num)'] = 'Campeonato/verAllParticipanteMundial/$1';
$route['listaNacional'] = 'Campeonato/ListarCampeonatoNacional';
$route['listaProvincial'] = 'Campeonato/ListarCampeonatoProvincial';
$route['listaAfricano/(:num)'] = 'Campeonato/verAllParticipanteAfricano/$1';
$route['listaArbitro'] = 'Arbitro/listar';
$route['listaMestre'] = 'mestre/listar';
$route['listaMestre2/(:num)'] = 'mestre/listar/$1';
$route['listaCategoria'] = 'App/listarCategoria';
$route['listarAcademia'] = 'Academia/listar_Academia';
$route['listar_atleta'] = 'Atleta/listar';
$route['listar_usuario'] = 'usuario/listar';
$route['listar_treiandor'] = 'treinador/listar';
$route['listar_role'] = 'role/listar';
$route['verAtleta/(:num)'] = 'Atleta/verAtleta/$1';
$route['mostrarUsuario/(:num)'] = 'usuario/EditarPerfil/$1';
$route['mostrarUsuarioPerfil/(:num)'] = 'usuario/verUsuario/$1';
$route['editarDados'] = 'usuario/Editar';
$route['mostrarArbl/(:num)'] = 'Arbitro/verArbitro/$1';
$route['mostrarMembro/(:num)/(:num)'] = 'Orgao_Social/verMembroOrgao/$1/$2';
$route['mostrarMandato'] = 'Orgao_Social/listarMandato';
$route['mostrarMandatoHistorico'] = 'Orgao_Social/listarMandatoHistorico';
$route['listarMandatoOrgaoMembro/(:num)'] = 'Orgao_Social/listarMandatoOrgaoMembro2/$1';
$route['verAtletaAcademia/(:num)'] = 'academia/verAcademiaAtleta/$1';
$route['verMestre/(:num)'] = 'mestre/verMestre/$1';
$route['GerarPDFFichaMestre/(:num)'] = 'mestre/GerarPDFFichaMestre/$1';
$route['GerarPDFDiploma/(:num)'] = 'mestre/GerarPDFDiploma/$1';
$route['verMandatoOrgao/(:num)'] = 'Orgao_Social/listarOrgaoSocial/$1';
$route['verGraduacao/(:num)'] = 'graduacao/verGraduacao/$1';
$route['verPermissoes'] = 'Permissao/ListarPermissoes';
$route['verActividade/(:num)/(:num)'] = 'actividade/Consultar/$1/$2';
$route['GerirNacional/(:num)'] = 'campeonato/gerirCampeonatoNacional/$1';
$route['GerirProvincial/(:num)'] = 'campeonato/gerirCampeonatoProvincial/$1';
$route['GerirProvincial'] = 'campeonato/NovoCampeonatoProvincial';
$route['gerirDocumento'] = 'associacao/gerirDocumento';
$route['listarAssociacao'] = 'associacao/listar';
$route['verAssociacao/(:num)'] = 'associacao/verAssociacao/$1';
$route['verCalendario'] = 'calendario/calendario';
$route['verEstatistica'] = 'estatistica/verEstatistica';
$route['fichaAtleta'] = 'associacao/GerarPDFFichaInscricaoAtleta';
$route['fichaAcademia'] = 'associacao/GerarPDFFichaInscricaoAcademia';
$route['pdfAtletalista'] = 'Atleta/GerarPDF';
$route['pdfTreinadorlista'] = 'treinador/GerarPDFListarTreinador';
$route['pdfAcademialista'] = 'Academia/GerarPDFListaAcademia';
$route['pdfAcademiaAtletalista/(:num)'] = 'Academia/GerarPDFListaAcademiaAtleta/$1';
$route['caixaEntrada'] = 'send_notification/caixaDeEntrada';
$route['caixaSaida'] = 'send_notification/caixaDeSaida';
$route['criarMensagem'] = 'send_notification/criarMensagem';

//Excluir

$route['ExcluirAtividade/(:num)'] = 'App/ExcluirAtividade/$1';
$route['ExcluirCategoria/(:num)'] = 'App/ExcluirCategoria/$1';
$route['ExcluirAtleta/(:num)/(:any)'] = 'Atleta/eliminar/$1/$2';
$route['ExcluirMestre/(:num)'] = 'mestre/eliminar/$1';
$route['ExcluirArbitro/(:num)'] = 'Arbitro/eliminar/$1';
$route['ExcluirAcademia/(:num)'] = 'Academia/ExcluirAcademia/$1';
$route['ExcluirUsuario/(:num)'] = 'usuario/excluir/$1';
$route['ExcluirRole/(:num)'] = 'role/excluir/$1';
$route['ExcluirActividade/(:num)'] = 'actividade/excluir/$1';
$route['ExcluirParticipante/(:num)/(:any)'] = 'actividade/excluirParticipante/$1/$2';

//Editar

$route['editar_mestre/(:num)'] = 'mestre/Editar/$1';
$route['editarAtleta/(:num)'] = 'Atleta/Editar/$1';
$route['editarSalvar'] = 'Atleta/salvar_Editar';
$route['editar_academia/(:num)'] = 'Academia/editar_academia/$1';
$route['editar_usuario/(:num)'] = 'usuario/Editar/$1';
$route['editar_perfil/(:num)'] = 'usuario/EditarPerfil/$1';
$route['editar_estado/(:num)/(:any)'] = 'usuario/mudarEstado/$1/$2';
$route['editar_estado_mestre/(:num)/(:any)'] = 'mestre/mudarEstado/$1/$2';
$route['editar_estado_atleta/(:num)/(:any)'] = 'Atleta/mudarEstado/$1/$2';
$route['editar_estado_arbitro/(:num)/(:any)'] = 'Arbitro/mudarEstado/$1/$2';
$route['editar_estado_associacao/(:num)/(:any)'] = 'associacao/mudarEstado/$1/$2';
$route['editar_arbitro/(:num)'] = 'Arbitro/Editar/$1';
$route['editar_arbitro1'] = 'Arbitro/Editar2';
$route['editar_actividade/(:num)'] = 'actividade/Editar/$1';
$route['editar_actividade1/(:num)'] = 'actividade/Editar_Actividade1/$1';

//Actualizar
$route['editar_atleta/(:num)'] = 'Atleta/Actualizar/$1';
$route['qr-generate'] = 'geradorCodigoBarra/print_qr';

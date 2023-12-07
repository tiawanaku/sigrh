<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	
	Route::get('', 'HomeController@index')->name('index');
	Route::get('home', 'HomeController@index')->name('home');




/* routes for SgSecuencial Controller */
	Route::get('sgsecuencial', 'SgSecuencialController@index')->name('sgsecuencial.index');
	Route::get('sgsecuencial/index/{filter?}/{filtervalue?}', 'SgSecuencialController@index')->name('sgsecuencial.index');

/* routes for TblBonoAntiguedadEscala Controller */
	Route::get('tblbonoantiguedadescala', 'TblBonoAntiguedadEscalaController@index')->name('tblbonoantiguedadescala.index');
	Route::get('tblbonoantiguedadescala/index/{filter?}/{filtervalue?}', 'TblBonoAntiguedadEscalaController@index')->name('tblbonoantiguedadescala.index');	
	Route::get('tblbonoantiguedadescala/view/{rec_id}', 'TblBonoAntiguedadEscalaController@view')->name('tblbonoantiguedadescala.view');	
	Route::get('tblbonoantiguedadescala/add', 'TblBonoAntiguedadEscalaController@add')->name('tblbonoantiguedadescala.add');
	Route::post('tblbonoantiguedadescala/add', 'TblBonoAntiguedadEscalaController@store')->name('tblbonoantiguedadescala.store');
		
	Route::any('tblbonoantiguedadescala/edit/{rec_id}', 'TblBonoAntiguedadEscalaController@edit')->name('tblbonoantiguedadescala.edit');	
	Route::get('tblbonoantiguedadescala/delete/{rec_id}', 'TblBonoAntiguedadEscalaController@delete');

/* routes for TblBsAfiliacionEgs Controller */
	Route::get('tblbsafiliacionegs', 'TblBsAfiliacionEgsController@index')->name('tblbsafiliacionegs.index');
	Route::get('tblbsafiliacionegs/index/{filter?}/{filtervalue?}', 'TblBsAfiliacionEgsController@index')->name('tblbsafiliacionegs.index');

/* routes for TblBsAfiliacionEgsBeneficiario Controller */
	Route::get('tblbsafiliacionegsbeneficiario', 'TblBsAfiliacionEgsBeneficiarioController@index')->name('tblbsafiliacionegsbeneficiario.index');
	Route::get('tblbsafiliacionegsbeneficiario/index/{filter?}/{filtervalue?}', 'TblBsAfiliacionEgsBeneficiarioController@index')->name('tblbsafiliacionegsbeneficiario.index');	
	Route::get('tblbsafiliacionegsbeneficiario/view/{rec_id}', 'TblBsAfiliacionEgsBeneficiarioController@view')->name('tblbsafiliacionegsbeneficiario.view');	
	Route::get('tblbsafiliacionegsbeneficiario/add', 'TblBsAfiliacionEgsBeneficiarioController@add')->name('tblbsafiliacionegsbeneficiario.add');
	Route::post('tblbsafiliacionegsbeneficiario/add', 'TblBsAfiliacionEgsBeneficiarioController@store')->name('tblbsafiliacionegsbeneficiario.store');
		
	Route::any('tblbsafiliacionegsbeneficiario/edit/{rec_id}', 'TblBsAfiliacionEgsBeneficiarioController@edit')->name('tblbsafiliacionegsbeneficiario.edit');	
	Route::get('tblbsafiliacionegsbeneficiario/delete/{rec_id}', 'TblBsAfiliacionEgsBeneficiarioController@delete');

/* routes for TblBsAfp Controller */
	Route::get('tblbsafp', 'TblBsAfpController@index')->name('tblbsafp.index');
	Route::get('tblbsafp/index/{filter?}/{filtervalue?}', 'TblBsAfpController@index')->name('tblbsafp.index');	
	Route::get('tblbsafp/view/{rec_id}', 'TblBsAfpController@view')->name('tblbsafp.view');	
	Route::get('tblbsafp/add', 'TblBsAfpController@add')->name('tblbsafp.add');
	Route::post('tblbsafp/add', 'TblBsAfpController@store')->name('tblbsafp.store');
		
	Route::any('tblbsafp/edit/{rec_id}', 'TblBsAfpController@edit')->name('tblbsafp.edit');	
	Route::get('tblbsafp/delete/{rec_id}', 'TblBsAfpController@delete');

/* routes for TblBsAgenteInvolucrado Controller */
	Route::get('tblbsagenteinvolucrado', 'TblBsAgenteInvolucradoController@index')->name('tblbsagenteinvolucrado.index');
	Route::get('tblbsagenteinvolucrado/index/{filter?}/{filtervalue?}', 'TblBsAgenteInvolucradoController@index')->name('tblbsagenteinvolucrado.index');	
	Route::get('tblbsagenteinvolucrado/view/{rec_id}', 'TblBsAgenteInvolucradoController@view')->name('tblbsagenteinvolucrado.view');	
	Route::get('tblbsagenteinvolucrado/add', 'TblBsAgenteInvolucradoController@add')->name('tblbsagenteinvolucrado.add');
	Route::post('tblbsagenteinvolucrado/add', 'TblBsAgenteInvolucradoController@store')->name('tblbsagenteinvolucrado.store');
		
	Route::any('tblbsagenteinvolucrado/edit/{rec_id}', 'TblBsAgenteInvolucradoController@edit')->name('tblbsagenteinvolucrado.edit');	
	Route::get('tblbsagenteinvolucrado/delete/{rec_id}', 'TblBsAgenteInvolucradoController@delete');

/* routes for TblBsAsignacionBeneficio Controller */
	Route::get('tblbsasignacionbeneficio', 'TblBsAsignacionBeneficioController@index')->name('tblbsasignacionbeneficio.index');
	Route::get('tblbsasignacionbeneficio/index/{filter?}/{filtervalue?}', 'TblBsAsignacionBeneficioController@index')->name('tblbsasignacionbeneficio.index');	
	Route::get('tblbsasignacionbeneficio/view/{rec_id}', 'TblBsAsignacionBeneficioController@view')->name('tblbsasignacionbeneficio.view');	
	Route::get('tblbsasignacionbeneficio/add', 'TblBsAsignacionBeneficioController@add')->name('tblbsasignacionbeneficio.add');
	Route::post('tblbsasignacionbeneficio/add', 'TblBsAsignacionBeneficioController@store')->name('tblbsasignacionbeneficio.store');
		
	Route::any('tblbsasignacionbeneficio/edit/{rec_id}', 'TblBsAsignacionBeneficioController@edit')->name('tblbsasignacionbeneficio.edit');	
	Route::get('tblbsasignacionbeneficio/delete/{rec_id}', 'TblBsAsignacionBeneficioController@delete');

/* routes for TblBsDenunciaAccidente Controller */
	Route::get('tblbsdenunciaaccidente', 'TblBsDenunciaAccidenteController@index')->name('tblbsdenunciaaccidente.index');
	Route::get('tblbsdenunciaaccidente/index/{filter?}/{filtervalue?}', 'TblBsDenunciaAccidenteController@index')->name('tblbsdenunciaaccidente.index');	
	Route::get('tblbsdenunciaaccidente/view/{rec_id}', 'TblBsDenunciaAccidenteController@view')->name('tblbsdenunciaaccidente.view');	
	Route::get('tblbsdenunciaaccidente/add', 'TblBsDenunciaAccidenteController@add')->name('tblbsdenunciaaccidente.add');
	Route::post('tblbsdenunciaaccidente/add', 'TblBsDenunciaAccidenteController@store')->name('tblbsdenunciaaccidente.store');
		
	Route::any('tblbsdenunciaaccidente/edit/{rec_id}', 'TblBsDenunciaAccidenteController@edit')->name('tblbsdenunciaaccidente.edit');	
	Route::get('tblbsdenunciaaccidente/delete/{rec_id}', 'TblBsDenunciaAccidenteController@delete');

/* routes for TblBsEnfermedadesRecurrentes Controller */
	Route::get('tblbsenfermedadesrecurrentes', 'TblBsEnfermedadesRecurrentesController@index')->name('tblbsenfermedadesrecurrentes.index');
	Route::get('tblbsenfermedadesrecurrentes/index/{filter?}/{filtervalue?}', 'TblBsEnfermedadesRecurrentesController@index')->name('tblbsenfermedadesrecurrentes.index');	
	Route::get('tblbsenfermedadesrecurrentes/view/{rec_id}', 'TblBsEnfermedadesRecurrentesController@view')->name('tblbsenfermedadesrecurrentes.view');	
	Route::get('tblbsenfermedadesrecurrentes/add', 'TblBsEnfermedadesRecurrentesController@add')->name('tblbsenfermedadesrecurrentes.add');
	Route::post('tblbsenfermedadesrecurrentes/add', 'TblBsEnfermedadesRecurrentesController@store')->name('tblbsenfermedadesrecurrentes.store');
		
	Route::any('tblbsenfermedadesrecurrentes/edit/{rec_id}', 'TblBsEnfermedadesRecurrentesController@edit')->name('tblbsenfermedadesrecurrentes.edit');	
	Route::get('tblbsenfermedadesrecurrentes/delete/{rec_id}', 'TblBsEnfermedadesRecurrentesController@delete');

/* routes for TblBsExamenPreocupacional Controller */
	Route::get('tblbsexamenpreocupacional', 'TblBsExamenPreocupacionalController@index')->name('tblbsexamenpreocupacional.index');
	Route::get('tblbsexamenpreocupacional/index/{filter?}/{filtervalue?}', 'TblBsExamenPreocupacionalController@index')->name('tblbsexamenpreocupacional.index');	
	Route::get('tblbsexamenpreocupacional/view/{rec_id}', 'TblBsExamenPreocupacionalController@view')->name('tblbsexamenpreocupacional.view');
	Route::get('tblbsexamenpreocupacional/masterdetail/{rec_id}', 'TblBsExamenPreocupacionalController@masterDetail')->name('tblbsexamenpreocupacional.masterdetail');	
	Route::get('tblbsexamenpreocupacional/add', 'TblBsExamenPreocupacionalController@add')->name('tblbsexamenpreocupacional.add');
	Route::post('tblbsexamenpreocupacional/add', 'TblBsExamenPreocupacionalController@store')->name('tblbsexamenpreocupacional.store');
		
	Route::any('tblbsexamenpreocupacional/edit/{rec_id}', 'TblBsExamenPreocupacionalController@edit')->name('tblbsexamenpreocupacional.edit');	
	Route::get('tblbsexamenpreocupacional/delete/{rec_id}', 'TblBsExamenPreocupacionalController@delete');

/* routes for TblBsSeguimientoAccidente Controller */
	Route::get('tblbsseguimientoaccidente', 'TblBsSeguimientoAccidenteController@index')->name('tblbsseguimientoaccidente.index');
	Route::get('tblbsseguimientoaccidente/index/{filter?}/{filtervalue?}', 'TblBsSeguimientoAccidenteController@index')->name('tblbsseguimientoaccidente.index');	
	Route::get('tblbsseguimientoaccidente/view/{rec_id}', 'TblBsSeguimientoAccidenteController@view')->name('tblbsseguimientoaccidente.view');	
	Route::get('tblbsseguimientoaccidente/add', 'TblBsSeguimientoAccidenteController@add')->name('tblbsseguimientoaccidente.add');
	Route::post('tblbsseguimientoaccidente/add', 'TblBsSeguimientoAccidenteController@store')->name('tblbsseguimientoaccidente.store');
		
	Route::any('tblbsseguimientoaccidente/edit/{rec_id}', 'TblBsSeguimientoAccidenteController@edit')->name('tblbsseguimientoaccidente.edit');	
	Route::get('tblbsseguimientoaccidente/delete/{rec_id}', 'TblBsSeguimientoAccidenteController@delete');

/* routes for TblCpAsignacionHorario Controller */
	Route::get('tblcpasignacionhorario', 'TblCpAsignacionHorarioController@index')->name('tblcpasignacionhorario.index');
	Route::get('tblcpasignacionhorario/index/{filter?}/{filtervalue?}', 'TblCpAsignacionHorarioController@index')->name('tblcpasignacionhorario.index');	
	Route::get('tblcpasignacionhorario/view/{rec_id}', 'TblCpAsignacionHorarioController@view')->name('tblcpasignacionhorario.view');	
	Route::get('tblcpasignacionhorario/add', 'TblCpAsignacionHorarioController@add')->name('tblcpasignacionhorario.add');
	Route::post('tblcpasignacionhorario/add', 'TblCpAsignacionHorarioController@store')->name('tblcpasignacionhorario.store');
		
	Route::any('tblcpasignacionhorario/edit/{rec_id}', 'TblCpAsignacionHorarioController@edit')->name('tblcpasignacionhorario.edit');	
	Route::get('tblcpasignacionhorario/delete/{rec_id}', 'TblCpAsignacionHorarioController@delete');

/* routes for TblCpAsistencia Controller */
	Route::get('tblcpasistencia', 'TblCpAsistenciaController@index')->name('tblcpasistencia.index');
	Route::get('tblcpasistencia/index/{filter?}/{filtervalue?}', 'TblCpAsistenciaController@index')->name('tblcpasistencia.index');	
	Route::get('tblcpasistencia/view/{rec_id}', 'TblCpAsistenciaController@view')->name('tblcpasistencia.view');	
	Route::get('tblcpasistencia/add', 'TblCpAsistenciaController@add')->name('tblcpasistencia.add');
	Route::post('tblcpasistencia/add', 'TblCpAsistenciaController@store')->name('tblcpasistencia.store');
		
	Route::any('tblcpasistencia/edit/{rec_id}', 'TblCpAsistenciaController@edit')->name('tblcpasistencia.edit');	
	Route::get('tblcpasistencia/delete/{rec_id}', 'TblCpAsistenciaController@delete');

/* routes for TblCpBitacoraDispositivo Controller */
	Route::get('tblcpbitacoradispositivo', 'TblCpBitacoraDispositivoController@index')->name('tblcpbitacoradispositivo.index');
	Route::get('tblcpbitacoradispositivo/index/{filter?}/{filtervalue?}', 'TblCpBitacoraDispositivoController@index')->name('tblcpbitacoradispositivo.index');	
	Route::get('tblcpbitacoradispositivo/view/{rec_id}', 'TblCpBitacoraDispositivoController@view')->name('tblcpbitacoradispositivo.view');	
	Route::get('tblcpbitacoradispositivo/add', 'TblCpBitacoraDispositivoController@add')->name('tblcpbitacoradispositivo.add');
	Route::post('tblcpbitacoradispositivo/add', 'TblCpBitacoraDispositivoController@store')->name('tblcpbitacoradispositivo.store');
		
	Route::any('tblcpbitacoradispositivo/edit/{rec_id}', 'TblCpBitacoraDispositivoController@edit')->name('tblcpbitacoradispositivo.edit');	
	Route::get('tblcpbitacoradispositivo/delete/{rec_id}', 'TblCpBitacoraDispositivoController@delete');

/* routes for TblCpCierreMensual Controller */
	Route::get('tblcpcierremensual', 'TblCpCierreMensualController@index')->name('tblcpcierremensual.index');
	Route::get('tblcpcierremensual/index/{filter?}/{filtervalue?}', 'TblCpCierreMensualController@index')->name('tblcpcierremensual.index');	
	Route::get('tblcpcierremensual/view/{rec_id}', 'TblCpCierreMensualController@view')->name('tblcpcierremensual.view');
	Route::get('tblcpcierremensual/masterdetail/{rec_id}', 'TblCpCierreMensualController@masterDetail')->name('tblcpcierremensual.masterdetail');	
	Route::get('tblcpcierremensual/add', 'TblCpCierreMensualController@add')->name('tblcpcierremensual.add');
	Route::post('tblcpcierremensual/add', 'TblCpCierreMensualController@store')->name('tblcpcierremensual.store');
		
	Route::any('tblcpcierremensual/edit/{rec_id}', 'TblCpCierreMensualController@edit')->name('tblcpcierremensual.edit');	
	Route::get('tblcpcierremensual/delete/{rec_id}', 'TblCpCierreMensualController@delete');

/* routes for TblCpControlAcceso Controller */
	Route::get('tblcpcontrolacceso', 'TblCpControlAccesoController@index')->name('tblcpcontrolacceso.index');
	Route::get('tblcpcontrolacceso/index/{filter?}/{filtervalue?}', 'TblCpControlAccesoController@index')->name('tblcpcontrolacceso.index');	
	Route::get('tblcpcontrolacceso/view/{rec_id}', 'TblCpControlAccesoController@view')->name('tblcpcontrolacceso.view');	
	Route::get('tblcpcontrolacceso/add', 'TblCpControlAccesoController@add')->name('tblcpcontrolacceso.add');
	Route::post('tblcpcontrolacceso/add', 'TblCpControlAccesoController@store')->name('tblcpcontrolacceso.store');
		
	Route::any('tblcpcontrolacceso/edit/{rec_id}', 'TblCpControlAccesoController@edit')->name('tblcpcontrolacceso.edit');	
	Route::get('tblcpcontrolacceso/delete/{rec_id}', 'TblCpControlAccesoController@delete');

/* routes for TblCpControlesPersonal Controller */
	Route::get('tblcpcontrolespersonal', 'TblCpControlesPersonalController@index')->name('tblcpcontrolespersonal.index');
	Route::get('tblcpcontrolespersonal/index/{filter?}/{filtervalue?}', 'TblCpControlesPersonalController@index')->name('tblcpcontrolespersonal.index');	
	Route::get('tblcpcontrolespersonal/view/{rec_id}', 'TblCpControlesPersonalController@view')->name('tblcpcontrolespersonal.view');	
	Route::get('tblcpcontrolespersonal/add', 'TblCpControlesPersonalController@add')->name('tblcpcontrolespersonal.add');
	Route::post('tblcpcontrolespersonal/add', 'TblCpControlesPersonalController@store')->name('tblcpcontrolespersonal.store');
		
	Route::any('tblcpcontrolespersonal/edit/{rec_id}', 'TblCpControlesPersonalController@edit')->name('tblcpcontrolespersonal.edit');	
	Route::get('tblcpcontrolespersonal/delete/{rec_id}', 'TblCpControlesPersonalController@delete');

/* routes for TblCpDispositivo Controller */
	Route::get('tblcpdispositivo', 'TblCpDispositivoController@index')->name('tblcpdispositivo.index');
	Route::get('tblcpdispositivo/index/{filter?}/{filtervalue?}', 'TblCpDispositivoController@index')->name('tblcpdispositivo.index');	
	Route::get('tblcpdispositivo/view/{rec_id}', 'TblCpDispositivoController@view')->name('tblcpdispositivo.view');
	Route::get('tblcpdispositivo/masterdetail/{rec_id}', 'TblCpDispositivoController@masterDetail')->name('tblcpdispositivo.masterdetail');	
	Route::get('tblcpdispositivo/add', 'TblCpDispositivoController@add')->name('tblcpdispositivo.add');
	Route::post('tblcpdispositivo/add', 'TblCpDispositivoController@store')->name('tblcpdispositivo.store');
		
	Route::any('tblcpdispositivo/edit/{rec_id}', 'TblCpDispositivoController@edit')->name('tblcpdispositivo.edit');	
	Route::get('tblcpdispositivo/delete/{rec_id}', 'TblCpDispositivoController@delete');

/* routes for TblCpHorarioEspecial Controller */
	Route::get('tblcphorarioespecial', 'TblCpHorarioEspecialController@index')->name('tblcphorarioespecial.index');
	Route::get('tblcphorarioespecial/index/{filter?}/{filtervalue?}', 'TblCpHorarioEspecialController@index')->name('tblcphorarioespecial.index');	
	Route::get('tblcphorarioespecial/view/{rec_id}', 'TblCpHorarioEspecialController@view')->name('tblcphorarioespecial.view');	
	Route::get('tblcphorarioespecial/add', 'TblCpHorarioEspecialController@add')->name('tblcphorarioespecial.add');
	Route::post('tblcphorarioespecial/add', 'TblCpHorarioEspecialController@store')->name('tblcphorarioespecial.store');
		
	Route::any('tblcphorarioespecial/edit/{rec_id}', 'TblCpHorarioEspecialController@edit')->name('tblcphorarioespecial.edit');	
	Route::get('tblcphorarioespecial/delete/{rec_id}', 'TblCpHorarioEspecialController@delete');

/* routes for TblCpHuellas Controller */
	Route::get('tblcphuellas', 'TblCpHuellasController@index')->name('tblcphuellas.index');
	Route::get('tblcphuellas/index/{filter?}/{filtervalue?}', 'TblCpHuellasController@index')->name('tblcphuellas.index');	
	Route::get('tblcphuellas/view/{rec_id}', 'TblCpHuellasController@view')->name('tblcphuellas.view');	
	Route::get('tblcphuellas/add', 'TblCpHuellasController@add')->name('tblcphuellas.add');
	Route::post('tblcphuellas/add', 'TblCpHuellasController@store')->name('tblcphuellas.store');
		
	Route::any('tblcphuellas/edit/{rec_id}', 'TblCpHuellasController@edit')->name('tblcphuellas.edit');	
	Route::get('tblcphuellas/delete/{rec_id}', 'TblCpHuellasController@delete');

/* routes for TblCpLicenciaJustificada Controller */
	Route::get('tblcplicenciajustificada', 'TblCpLicenciaJustificadaController@index')->name('tblcplicenciajustificada.index');
	Route::get('tblcplicenciajustificada/index/{filter?}/{filtervalue?}', 'TblCpLicenciaJustificadaController@index')->name('tblcplicenciajustificada.index');	
	Route::get('tblcplicenciajustificada/view/{rec_id}', 'TblCpLicenciaJustificadaController@view')->name('tblcplicenciajustificada.view');	
	Route::get('tblcplicenciajustificada/add', 'TblCpLicenciaJustificadaController@add')->name('tblcplicenciajustificada.add');
	Route::post('tblcplicenciajustificada/add', 'TblCpLicenciaJustificadaController@store')->name('tblcplicenciajustificada.store');
		
	Route::any('tblcplicenciajustificada/edit/{rec_id}', 'TblCpLicenciaJustificadaController@edit')->name('tblcplicenciajustificada.edit');	
	Route::get('tblcplicenciajustificada/delete/{rec_id}', 'TblCpLicenciaJustificadaController@delete');

/* routes for TblCpLugarMarcado Controller */
	Route::get('tblcplugarmarcado', 'TblCpLugarMarcadoController@index')->name('tblcplugarmarcado.index');
	Route::get('tblcplugarmarcado/index/{filter?}/{filtervalue?}', 'TblCpLugarMarcadoController@index')->name('tblcplugarmarcado.index');	
	Route::get('tblcplugarmarcado/view/{rec_id}', 'TblCpLugarMarcadoController@view')->name('tblcplugarmarcado.view');	
	Route::get('tblcplugarmarcado/add', 'TblCpLugarMarcadoController@add')->name('tblcplugarmarcado.add');
	Route::post('tblcplugarmarcado/add', 'TblCpLugarMarcadoController@store')->name('tblcplugarmarcado.store');
		
	Route::any('tblcplugarmarcado/edit/{rec_id}', 'TblCpLugarMarcadoController@edit')->name('tblcplugarmarcado.edit');	
	Route::get('tblcplugarmarcado/delete/{rec_id}', 'TblCpLugarMarcadoController@delete');

/* routes for TblCpMarcaciones Controller */
	Route::get('tblcpmarcaciones', 'TblCpMarcacionesController@index')->name('tblcpmarcaciones.index');
	Route::get('tblcpmarcaciones/index/{filter?}/{filtervalue?}', 'TblCpMarcacionesController@index')->name('tblcpmarcaciones.index');	
	Route::get('tblcpmarcaciones/view/{rec_id}', 'TblCpMarcacionesController@view')->name('tblcpmarcaciones.view');	
	Route::get('tblcpmarcaciones/add', 'TblCpMarcacionesController@add')->name('tblcpmarcaciones.add');
	Route::post('tblcpmarcaciones/add', 'TblCpMarcacionesController@store')->name('tblcpmarcaciones.store');
		
	Route::any('tblcpmarcaciones/edit/{rec_id}', 'TblCpMarcacionesController@edit')->name('tblcpmarcaciones.edit');	
	Route::get('tblcpmarcaciones/delete/{rec_id}', 'TblCpMarcacionesController@delete');

/* routes for TblCpPlanillaLicencias Controller */
	Route::get('tblcpplanillalicencias', 'TblCpPlanillaLicenciasController@index')->name('tblcpplanillalicencias.index');
	Route::get('tblcpplanillalicencias/index/{filter?}/{filtervalue?}', 'TblCpPlanillaLicenciasController@index')->name('tblcpplanillalicencias.index');	
	Route::get('tblcpplanillalicencias/view/{rec_id}', 'TblCpPlanillaLicenciasController@view')->name('tblcpplanillalicencias.view');	
	Route::get('tblcpplanillalicencias/add', 'TblCpPlanillaLicenciasController@add')->name('tblcpplanillalicencias.add');
	Route::post('tblcpplanillalicencias/add', 'TblCpPlanillaLicenciasController@store')->name('tblcpplanillalicencias.store');
		
	Route::any('tblcpplanillalicencias/edit/{rec_id}', 'TblCpPlanillaLicenciasController@edit')->name('tblcpplanillalicencias.edit');	
	Route::get('tblcpplanillalicencias/delete/{rec_id}', 'TblCpPlanillaLicenciasController@delete');

/* routes for TblCpPlanillaSanciones Controller */
	Route::get('tblcpplanillasanciones', 'TblCpPlanillaSancionesController@index')->name('tblcpplanillasanciones.index');
	Route::get('tblcpplanillasanciones/index/{filter?}/{filtervalue?}', 'TblCpPlanillaSancionesController@index')->name('tblcpplanillasanciones.index');	
	Route::get('tblcpplanillasanciones/view/{rec_id}', 'TblCpPlanillaSancionesController@view')->name('tblcpplanillasanciones.view');	
	Route::get('tblcpplanillasanciones/add', 'TblCpPlanillaSancionesController@add')->name('tblcpplanillasanciones.add');
	Route::post('tblcpplanillasanciones/add', 'TblCpPlanillaSancionesController@store')->name('tblcpplanillasanciones.store');
		
	Route::any('tblcpplanillasanciones/edit/{rec_id}', 'TblCpPlanillaSancionesController@edit')->name('tblcpplanillasanciones.edit');	
	Route::get('tblcpplanillasanciones/delete/{rec_id}', 'TblCpPlanillaSancionesController@delete');

/* routes for TblCpSanciones Controller */
	Route::get('tblcpsanciones', 'TblCpSancionesController@index')->name('tblcpsanciones.index');
	Route::get('tblcpsanciones/index/{filter?}/{filtervalue?}', 'TblCpSancionesController@index')->name('tblcpsanciones.index');	
	Route::get('tblcpsanciones/view/{rec_id}', 'TblCpSancionesController@view')->name('tblcpsanciones.view');	
	Route::get('tblcpsanciones/add', 'TblCpSancionesController@add')->name('tblcpsanciones.add');
	Route::post('tblcpsanciones/add', 'TblCpSancionesController@store')->name('tblcpsanciones.store');
		
	Route::any('tblcpsanciones/edit/{rec_id}', 'TblCpSancionesController@edit')->name('tblcpsanciones.edit');	
	Route::get('tblcpsanciones/delete/{rec_id}', 'TblCpSancionesController@delete');

/* routes for TblCpSancionesRelPlanilla Controller */
	Route::get('tblcpsancionesrelplanilla', 'TblCpSancionesRelPlanillaController@index')->name('tblcpsancionesrelplanilla.index');
	Route::get('tblcpsancionesrelplanilla/index/{filter?}/{filtervalue?}', 'TblCpSancionesRelPlanillaController@index')->name('tblcpsancionesrelplanilla.index');

/* routes for TblCpTmpDiasSemana Controller */
	Route::get('tblcptmpdiassemana', 'TblCpTmpDiasSemanaController@index')->name('tblcptmpdiassemana.index');
	Route::get('tblcptmpdiassemana/index/{filter?}/{filtervalue?}', 'TblCpTmpDiasSemanaController@index')->name('tblcptmpdiassemana.index');

/* routes for TblCpTmpHorario Controller */
	Route::get('tblcptmphorario', 'TblCpTmpHorarioController@index')->name('tblcptmphorario.index');
	Route::get('tblcptmphorario/index/{filter?}/{filtervalue?}', 'TblCpTmpHorarioController@index')->name('tblcptmphorario.index');

/* routes for TblCpUbicacionFisica Controller */
	Route::get('tblcpubicacionfisica', 'TblCpUbicacionFisicaController@index')->name('tblcpubicacionfisica.index');
	Route::get('tblcpubicacionfisica/index/{filter?}/{filtervalue?}', 'TblCpUbicacionFisicaController@index')->name('tblcpubicacionfisica.index');	
	Route::get('tblcpubicacionfisica/view/{rec_id}', 'TblCpUbicacionFisicaController@view')->name('tblcpubicacionfisica.view');	
	Route::get('tblcpubicacionfisica/add', 'TblCpUbicacionFisicaController@add')->name('tblcpubicacionfisica.add');
	Route::post('tblcpubicacionfisica/add', 'TblCpUbicacionFisicaController@store')->name('tblcpubicacionfisica.store');
		
	Route::any('tblcpubicacionfisica/edit/{rec_id}', 'TblCpUbicacionFisicaController@edit')->name('tblcpubicacionfisica.edit');	
	Route::get('tblcpubicacionfisica/delete/{rec_id}', 'TblCpUbicacionFisicaController@delete');

/* routes for TblDjbrAcreditacion Controller */
	Route::get('tbldjbracreditacion', 'TblDjbrAcreditacionController@index')->name('tbldjbracreditacion.index');
	Route::get('tbldjbracreditacion/index/{filter?}/{filtervalue?}', 'TblDjbrAcreditacionController@index')->name('tbldjbracreditacion.index');	
	Route::get('tbldjbracreditacion/view/{rec_id}', 'TblDjbrAcreditacionController@view')->name('tbldjbracreditacion.view');	
	Route::get('tbldjbracreditacion/add', 'TblDjbrAcreditacionController@add')->name('tbldjbracreditacion.add');
	Route::post('tbldjbracreditacion/add', 'TblDjbrAcreditacionController@store')->name('tbldjbracreditacion.store');
		
	Route::any('tbldjbracreditacion/edit/{rec_id}', 'TblDjbrAcreditacionController@edit')->name('tbldjbracreditacion.edit');	
	Route::get('tbldjbracreditacion/delete/{rec_id}', 'TblDjbrAcreditacionController@delete');

/* routes for TblEscalaPuesto Controller */
	Route::get('tblescalapuesto', 'TblEscalaPuestoController@index')->name('tblescalapuesto.index');
	Route::get('tblescalapuesto/index/{filter?}/{filtervalue?}', 'TblEscalaPuestoController@index')->name('tblescalapuesto.index');	
	Route::get('tblescalapuesto/view/{rec_id}', 'TblEscalaPuestoController@view')->name('tblescalapuesto.view');	
	Route::get('tblescalapuesto/add', 'TblEscalaPuestoController@add')->name('tblescalapuesto.add');
	Route::post('tblescalapuesto/add', 'TblEscalaPuestoController@store')->name('tblescalapuesto.store');
		
	Route::any('tblescalapuesto/edit/{rec_id}', 'TblEscalaPuestoController@edit')->name('tblescalapuesto.edit');	
	Route::get('tblescalapuesto/delete/{rec_id}', 'TblEscalaPuestoController@delete');

/* routes for TblKdAsignacionVacacion Controller */
	Route::get('tblkdasignacionvacacion', 'TblKdAsignacionVacacionController@index')->name('tblkdasignacionvacacion.index');
	Route::get('tblkdasignacionvacacion/index/{filter?}/{filtervalue?}', 'TblKdAsignacionVacacionController@index')->name('tblkdasignacionvacacion.index');	
	Route::get('tblkdasignacionvacacion/view/{rec_id}', 'TblKdAsignacionVacacionController@view')->name('tblkdasignacionvacacion.view');	
	Route::get('tblkdasignacionvacacion/add', 'TblKdAsignacionVacacionController@add')->name('tblkdasignacionvacacion.add');
	Route::post('tblkdasignacionvacacion/add', 'TblKdAsignacionVacacionController@store')->name('tblkdasignacionvacacion.store');
		
	Route::any('tblkdasignacionvacacion/edit/{rec_id}', 'TblKdAsignacionVacacionController@edit')->name('tblkdasignacionvacacion.edit');	
	Route::get('tblkdasignacionvacacion/delete/{rec_id}', 'TblKdAsignacionVacacionController@delete');

/* routes for TblKdEducacionFormal Controller */
	Route::get('tblkdeducacionformal', 'TblKdEducacionFormalController@index')->name('tblkdeducacionformal.index');
	Route::get('tblkdeducacionformal/index/{filter?}/{filtervalue?}', 'TblKdEducacionFormalController@index')->name('tblkdeducacionformal.index');	
	Route::get('tblkdeducacionformal/view/{rec_id}', 'TblKdEducacionFormalController@view')->name('tblkdeducacionformal.view');	
	Route::get('tblkdeducacionformal/add', 'TblKdEducacionFormalController@add')->name('tblkdeducacionformal.add');
	Route::post('tblkdeducacionformal/add', 'TblKdEducacionFormalController@store')->name('tblkdeducacionformal.store');
		
	Route::any('tblkdeducacionformal/edit/{rec_id}', 'TblKdEducacionFormalController@edit')->name('tblkdeducacionformal.edit');	
	Route::get('tblkdeducacionformal/delete/{rec_id}', 'TblKdEducacionFormalController@delete');

/* routes for TblKdFeriados Controller */
	Route::get('tblkdferiados', 'TblKdFeriadosController@index')->name('tblkdferiados.index');
	Route::get('tblkdferiados/index/{filter?}/{filtervalue?}', 'TblKdFeriadosController@index')->name('tblkdferiados.index');	
	Route::get('tblkdferiados/view/{rec_id}', 'TblKdFeriadosController@view')->name('tblkdferiados.view');	
	Route::get('tblkdferiados/add', 'TblKdFeriadosController@add')->name('tblkdferiados.add');
	Route::post('tblkdferiados/add', 'TblKdFeriadosController@store')->name('tblkdferiados.store');
		
	Route::any('tblkdferiados/edit/{rec_id}', 'TblKdFeriadosController@edit')->name('tblkdferiados.edit');	
	Route::get('tblkdferiados/delete/{rec_id}', 'TblKdFeriadosController@delete');

/* routes for TblKdFile Controller */
	Route::get('tblkdfile', 'TblKdFileController@index')->name('tblkdfile.index');
	Route::get('tblkdfile/index/{filter?}/{filtervalue?}', 'TblKdFileController@index')->name('tblkdfile.index');

/* routes for TblKdRequisito Controller */
	Route::get('tblkdrequisito', 'TblKdRequisitoController@index')->name('tblkdrequisito.index');
	Route::get('tblkdrequisito/index/{filter?}/{filtervalue?}', 'TblKdRequisitoController@index')->name('tblkdrequisito.index');	
	Route::get('tblkdrequisito/view/{rec_id}', 'TblKdRequisitoController@view')->name('tblkdrequisito.view');	
	Route::get('tblkdrequisito/add', 'TblKdRequisitoController@add')->name('tblkdrequisito.add');
	Route::post('tblkdrequisito/add', 'TblKdRequisitoController@store')->name('tblkdrequisito.store');
		
	Route::any('tblkdrequisito/edit/{rec_id}', 'TblKdRequisitoController@edit')->name('tblkdrequisito.edit');	
	Route::get('tblkdrequisito/delete/{rec_id}', 'TblKdRequisitoController@delete');

/* routes for TblKdRequisitoFormacion Controller */
	Route::get('tblkdrequisitoformacion', 'TblKdRequisitoFormacionController@index')->name('tblkdrequisitoformacion.index');
	Route::get('tblkdrequisitoformacion/index/{filter?}/{filtervalue?}', 'TblKdRequisitoFormacionController@index')->name('tblkdrequisitoformacion.index');	
	Route::get('tblkdrequisitoformacion/view/{rec_id}', 'TblKdRequisitoFormacionController@view')->name('tblkdrequisitoformacion.view');	
	Route::get('tblkdrequisitoformacion/add', 'TblKdRequisitoFormacionController@add')->name('tblkdrequisitoformacion.add');
	Route::post('tblkdrequisitoformacion/add', 'TblKdRequisitoFormacionController@store')->name('tblkdrequisitoformacion.store');
		
	Route::any('tblkdrequisitoformacion/edit/{rec_id}', 'TblKdRequisitoFormacionController@edit')->name('tblkdrequisitoformacion.edit');	
	Route::get('tblkdrequisitoformacion/delete/{rec_id}', 'TblKdRequisitoFormacionController@delete');

/* routes for TblKdRequisitoPresentado Controller */
	Route::get('tblkdrequisitopresentado', 'TblKdRequisitoPresentadoController@index')->name('tblkdrequisitopresentado.index');
	Route::get('tblkdrequisitopresentado/index/{filter?}/{filtervalue?}', 'TblKdRequisitoPresentadoController@index')->name('tblkdrequisitopresentado.index');	
	Route::get('tblkdrequisitopresentado/view/{rec_id}', 'TblKdRequisitoPresentadoController@view')->name('tblkdrequisitopresentado.view');	
	Route::get('tblkdrequisitopresentado/add', 'TblKdRequisitoPresentadoController@add')->name('tblkdrequisitopresentado.add');
	Route::post('tblkdrequisitopresentado/add', 'TblKdRequisitoPresentadoController@store')->name('tblkdrequisitopresentado.store');
		
	Route::any('tblkdrequisitopresentado/edit/{rec_id}', 'TblKdRequisitoPresentadoController@edit')->name('tblkdrequisitopresentado.edit');	
	Route::get('tblkdrequisitopresentado/delete/{rec_id}', 'TblKdRequisitoPresentadoController@delete');

/* routes for TblKdRespuestaCombo Controller */
	Route::get('tblkdrespuestacombo', 'TblKdRespuestaComboController@index')->name('tblkdrespuestacombo.index');
	Route::get('tblkdrespuestacombo/index/{filter?}/{filtervalue?}', 'TblKdRespuestaComboController@index')->name('tblkdrespuestacombo.index');	
	Route::get('tblkdrespuestacombo/view/{rec_id}', 'TblKdRespuestaComboController@view')->name('tblkdrespuestacombo.view');	
	Route::get('tblkdrespuestacombo/add', 'TblKdRespuestaComboController@add')->name('tblkdrespuestacombo.add');
	Route::post('tblkdrespuestacombo/add', 'TblKdRespuestaComboController@store')->name('tblkdrespuestacombo.store');
		
	Route::any('tblkdrespuestacombo/edit/{rec_id}', 'TblKdRespuestaComboController@edit')->name('tblkdrespuestacombo.edit');	
	Route::get('tblkdrespuestacombo/delete/{rec_id}', 'TblKdRespuestaComboController@delete');

/* routes for TblKdSolicitudVacacion Controller */
	Route::get('tblkdsolicitudvacacion', 'TblKdSolicitudVacacionController@index')->name('tblkdsolicitudvacacion.index');
	Route::get('tblkdsolicitudvacacion/index/{filter?}/{filtervalue?}', 'TblKdSolicitudVacacionController@index')->name('tblkdsolicitudvacacion.index');	
	Route::get('tblkdsolicitudvacacion/view/{rec_id}', 'TblKdSolicitudVacacionController@view')->name('tblkdsolicitudvacacion.view');	
	Route::get('tblkdsolicitudvacacion/add', 'TblKdSolicitudVacacionController@add')->name('tblkdsolicitudvacacion.add');
	Route::post('tblkdsolicitudvacacion/add', 'TblKdSolicitudVacacionController@store')->name('tblkdsolicitudvacacion.store');
		
	Route::any('tblkdsolicitudvacacion/edit/{rec_id}', 'TblKdSolicitudVacacionController@edit')->name('tblkdsolicitudvacacion.edit');	
	Route::get('tblkdsolicitudvacacion/delete/{rec_id}', 'TblKdSolicitudVacacionController@delete');

/* routes for TblKdVacacionPrescrito Controller */
	Route::get('tblkdvacacionprescrito', 'TblKdVacacionPrescritoController@index')->name('tblkdvacacionprescrito.index');
	Route::get('tblkdvacacionprescrito/index/{filter?}/{filtervalue?}', 'TblKdVacacionPrescritoController@index')->name('tblkdvacacionprescrito.index');	
	Route::get('tblkdvacacionprescrito/view/{rec_id}', 'TblKdVacacionPrescritoController@view')->name('tblkdvacacionprescrito.view');	
	Route::get('tblkdvacacionprescrito/add', 'TblKdVacacionPrescritoController@add')->name('tblkdvacacionprescrito.add');
	Route::post('tblkdvacacionprescrito/add', 'TblKdVacacionPrescritoController@store')->name('tblkdvacacionprescrito.store');
		
	Route::any('tblkdvacacionprescrito/edit/{rec_id}', 'TblKdVacacionPrescritoController@edit')->name('tblkdvacacionprescrito.edit');	
	Route::get('tblkdvacacionprescrito/delete/{rec_id}', 'TblKdVacacionPrescritoController@delete');

/* routes for TblMpAsignacion Controller */
	Route::get('tblmpasignacion', 'TblMpAsignacionController@index')->name('tblmpasignacion.index');
	Route::get('tblmpasignacion/index/{filter?}/{filtervalue?}', 'TblMpAsignacionController@index')->name('tblmpasignacion.index');	
	Route::get('tblmpasignacion/view/{rec_id}', 'TblMpAsignacionController@view')->name('tblmpasignacion.view');	
	Route::get('tblmpasignacion/add', 'TblMpAsignacionController@add')->name('tblmpasignacion.add');
	Route::post('tblmpasignacion/add', 'TblMpAsignacionController@store')->name('tblmpasignacion.store');
		
	Route::any('tblmpasignacion/edit/{rec_id}', 'TblMpAsignacionController@edit')->name('tblmpasignacion.edit');	
	Route::get('tblmpasignacion/delete/{rec_id}', 'TblMpAsignacionController@delete');

/* routes for TblMpAsignacionComInt Controller */
	Route::get('tblmpasignacioncomint', 'TblMpAsignacionComIntController@index')->name('tblmpasignacioncomint.index');
	Route::get('tblmpasignacioncomint/index/{filter?}/{filtervalue?}', 'TblMpAsignacionComIntController@index')->name('tblmpasignacioncomint.index');	
	Route::get('tblmpasignacioncomint/view/{rec_id}', 'TblMpAsignacionComIntController@view')->name('tblmpasignacioncomint.view');	
	Route::get('tblmpasignacioncomint/add', 'TblMpAsignacionComIntController@add')->name('tblmpasignacioncomint.add');
	Route::post('tblmpasignacioncomint/add', 'TblMpAsignacionComIntController@store')->name('tblmpasignacioncomint.store');
		
	Route::any('tblmpasignacioncomint/edit/{rec_id}', 'TblMpAsignacionComIntController@edit')->name('tblmpasignacioncomint.edit');	
	Route::get('tblmpasignacioncomint/delete/{rec_id}', 'TblMpAsignacionComIntController@delete');

/* routes for TblMpAsignacionTipoAportante Controller */
	Route::get('tblmpasignaciontipoaportante', 'TblMpAsignacionTipoAportanteController@index')->name('tblmpasignaciontipoaportante.index');
	Route::get('tblmpasignaciontipoaportante/index/{filter?}/{filtervalue?}', 'TblMpAsignacionTipoAportanteController@index')->name('tblmpasignaciontipoaportante.index');	
	Route::get('tblmpasignaciontipoaportante/view/{rec_id}', 'TblMpAsignacionTipoAportanteController@view')->name('tblmpasignaciontipoaportante.view');	
	Route::get('tblmpasignaciontipoaportante/add', 'TblMpAsignacionTipoAportanteController@add')->name('tblmpasignaciontipoaportante.add');
	Route::post('tblmpasignaciontipoaportante/add', 'TblMpAsignacionTipoAportanteController@store')->name('tblmpasignaciontipoaportante.store');
		
	Route::any('tblmpasignaciontipoaportante/edit/{rec_id}', 'TblMpAsignacionTipoAportanteController@edit')->name('tblmpasignaciontipoaportante.edit');	
	Route::get('tblmpasignaciontipoaportante/delete/{rec_id}', 'TblMpAsignacionTipoAportanteController@delete');

/* routes for TblMpCargo Controller */
	Route::get('tblmpcargo', 'TblMpCargoController@index')->name('tblmpcargo.index');
	Route::get('tblmpcargo/index/{filter?}/{filtervalue?}', 'TblMpCargoController@index')->name('tblmpcargo.index');	
	Route::get('tblmpcargo/view/{rec_id}', 'TblMpCargoController@view')->name('tblmpcargo.view');	
	Route::get('tblmpcargo/add', 'TblMpCargoController@add')->name('tblmpcargo.add');
	Route::post('tblmpcargo/add', 'TblMpCargoController@store')->name('tblmpcargo.store');
		
	Route::any('tblmpcargo/edit/{rec_id}', 'TblMpCargoController@edit')->name('tblmpcargo.edit');	
	Route::get('tblmpcargo/delete/{rec_id}', 'TblMpCargoController@delete');

/* routes for TblMpCargoPuesto Controller */
	Route::get('tblmpcargopuesto', 'TblMpCargoPuestoController@index')->name('tblmpcargopuesto.index');
	Route::get('tblmpcargopuesto/index/{filter?}/{filtervalue?}', 'TblMpCargoPuestoController@index')->name('tblmpcargopuesto.index');

/* routes for TblMpCategoriaProgItem Controller */
	Route::get('tblmpcategoriaprogitem', 'TblMpCategoriaProgItemController@index')->name('tblmpcategoriaprogitem.index');
	Route::get('tblmpcategoriaprogitem/index/{filter?}/{filtervalue?}', 'TblMpCategoriaProgItemController@index')->name('tblmpcategoriaprogitem.index');

/* routes for TblMpCategoriaProgramatica Controller */
	Route::get('tblmpcategoriaprogramatica', 'TblMpCategoriaProgramaticaController@index')->name('tblmpcategoriaprogramatica.index');
	Route::get('tblmpcategoriaprogramatica/index/{filter?}/{filtervalue?}', 'TblMpCategoriaProgramaticaController@index')->name('tblmpcategoriaprogramatica.index');	
	Route::get('tblmpcategoriaprogramatica/view/{rec_id}', 'TblMpCategoriaProgramaticaController@view')->name('tblmpcategoriaprogramatica.view');	
	Route::get('tblmpcategoriaprogramatica/add', 'TblMpCategoriaProgramaticaController@add')->name('tblmpcategoriaprogramatica.add');
	Route::post('tblmpcategoriaprogramatica/add', 'TblMpCategoriaProgramaticaController@store')->name('tblmpcategoriaprogramatica.store');
		
	Route::any('tblmpcategoriaprogramatica/edit/{rec_id}', 'TblMpCategoriaProgramaticaController@edit')->name('tblmpcategoriaprogramatica.edit');	
	Route::get('tblmpcategoriaprogramatica/delete/{rec_id}', 'TblMpCategoriaProgramaticaController@delete');

/* routes for TblMpEcategProgItem Controller */
	Route::get('tblmpecategprogitem', 'TblMpEcategProgItemController@index')->name('tblmpecategprogitem.index');
	Route::get('tblmpecategprogitem/index/{filter?}/{filtervalue?}', 'TblMpEcategProgItemController@index')->name('tblmpecategprogitem.index');	
	Route::get('tblmpecategprogitem/view/{rec_id}', 'TblMpEcategProgItemController@view')->name('tblmpecategprogitem.view');	
	Route::get('tblmpecategprogitem/add', 'TblMpEcategProgItemController@add')->name('tblmpecategprogitem.add');
	Route::post('tblmpecategprogitem/add', 'TblMpEcategProgItemController@store')->name('tblmpecategprogitem.store');
		
	Route::any('tblmpecategprogitem/edit/{rec_id}', 'TblMpEcategProgItemController@edit')->name('tblmpecategprogitem.edit');	
	Route::get('tblmpecategprogitem/delete/{rec_id}', 'TblMpEcategProgItemController@delete');

/* routes for TblMpEscalaSalarial Controller */
	Route::get('tblmpescalasalarial', 'TblMpEscalaSalarialController@index')->name('tblmpescalasalarial.index');
	Route::get('tblmpescalasalarial/index/{filter?}/{filtervalue?}', 'TblMpEscalaSalarialController@index')->name('tblmpescalasalarial.index');	
	Route::get('tblmpescalasalarial/view/{rec_id}', 'TblMpEscalaSalarialController@view')->name('tblmpescalasalarial.view');	
	Route::get('tblmpescalasalarial/add', 'TblMpEscalaSalarialController@add')->name('tblmpescalasalarial.add');
	Route::post('tblmpescalasalarial/add', 'TblMpEscalaSalarialController@store')->name('tblmpescalasalarial.store');
		
	Route::any('tblmpescalasalarial/edit/{rec_id}', 'TblMpEscalaSalarialController@edit')->name('tblmpescalasalarial.edit');	
	Route::get('tblmpescalasalarial/delete/{rec_id}', 'TblMpEscalaSalarialController@delete');

/* routes for TblMpEstructuraOrganizacional Controller */
	Route::get('tblmpestructuraorganizacional', 'TblMpEstructuraOrganizacionalController@index')->name('tblmpestructuraorganizacional.index');
	Route::get('tblmpestructuraorganizacional/index/{filter?}/{filtervalue?}', 'TblMpEstructuraOrganizacionalController@index')->name('tblmpestructuraorganizacional.index');	
	Route::get('tblmpestructuraorganizacional/view/{rec_id}', 'TblMpEstructuraOrganizacionalController@view')->name('tblmpestructuraorganizacional.view');	
	Route::get('tblmpestructuraorganizacional/add', 'TblMpEstructuraOrganizacionalController@add')->name('tblmpestructuraorganizacional.add');
	Route::post('tblmpestructuraorganizacional/add', 'TblMpEstructuraOrganizacionalController@store')->name('tblmpestructuraorganizacional.store');
		
	Route::any('tblmpestructuraorganizacional/edit/{rec_id}', 'TblMpEstructuraOrganizacionalController@edit')->name('tblmpestructuraorganizacional.edit');	
	Route::get('tblmpestructuraorganizacional/delete/{rec_id}', 'TblMpEstructuraOrganizacionalController@delete');

/* routes for TblMpIncompatibilidadFun Controller */
	Route::get('tblmpincompatibilidadfun', 'TblMpIncompatibilidadFunController@index')->name('tblmpincompatibilidadfun.index');
	Route::get('tblmpincompatibilidadfun/index/{filter?}/{filtervalue?}', 'TblMpIncompatibilidadFunController@index')->name('tblmpincompatibilidadfun.index');	
	Route::get('tblmpincompatibilidadfun/view/{rec_id}', 'TblMpIncompatibilidadFunController@view')->name('tblmpincompatibilidadfun.view');	
	Route::get('tblmpincompatibilidadfun/add', 'TblMpIncompatibilidadFunController@add')->name('tblmpincompatibilidadfun.add');
	Route::post('tblmpincompatibilidadfun/add', 'TblMpIncompatibilidadFunController@store')->name('tblmpincompatibilidadfun.store');
		
	Route::any('tblmpincompatibilidadfun/edit/{rec_id}', 'TblMpIncompatibilidadFunController@edit')->name('tblmpincompatibilidadfun.edit');	
	Route::get('tblmpincompatibilidadfun/delete/{rec_id}', 'TblMpIncompatibilidadFunController@delete');

/* routes for TblMpLimiteHorasExtras Controller */
	Route::get('tblmplimitehorasextras', 'TblMpLimiteHorasExtrasController@index')->name('tblmplimitehorasextras.index');
	Route::get('tblmplimitehorasextras/index/{filter?}/{filtervalue?}', 'TblMpLimiteHorasExtrasController@index')->name('tblmplimitehorasextras.index');	
	Route::get('tblmplimitehorasextras/view/{rec_id}', 'TblMpLimiteHorasExtrasController@view')->name('tblmplimitehorasextras.view');	
	Route::get('tblmplimitehorasextras/add', 'TblMpLimiteHorasExtrasController@add')->name('tblmplimitehorasextras.add');
	Route::post('tblmplimitehorasextras/add', 'TblMpLimiteHorasExtrasController@store')->name('tblmplimitehorasextras.store');
		
	Route::any('tblmplimitehorasextras/edit/{rec_id}', 'TblMpLimiteHorasExtrasController@edit')->name('tblmplimitehorasextras.edit');	
	Route::get('tblmplimitehorasextras/delete/{rec_id}', 'TblMpLimiteHorasExtrasController@delete');

/* routes for TblMpMemosHistorico Controller */
	Route::get('tblmpmemoshistorico', 'TblMpMemosHistoricoController@index')->name('tblmpmemoshistorico.index');
	Route::get('tblmpmemoshistorico/index/{filter?}/{filtervalue?}', 'TblMpMemosHistoricoController@index')->name('tblmpmemoshistorico.index');	
	Route::get('tblmpmemoshistorico/view/{rec_id}', 'TblMpMemosHistoricoController@view')->name('tblmpmemoshistorico.view');	
	Route::get('tblmpmemoshistorico/add', 'TblMpMemosHistoricoController@add')->name('tblmpmemoshistorico.add');
	Route::post('tblmpmemoshistorico/add', 'TblMpMemosHistoricoController@store')->name('tblmpmemoshistorico.store');
		
	Route::any('tblmpmemoshistorico/edit/{rec_id}', 'TblMpMemosHistoricoController@edit')->name('tblmpmemoshistorico.edit');	
	Route::get('tblmpmemoshistorico/delete/{rec_id}', 'TblMpMemosHistoricoController@delete');

/* routes for TblMpMemosVarios Controller */
	Route::get('tblmpmemosvarios', 'TblMpMemosVariosController@index')->name('tblmpmemosvarios.index');
	Route::get('tblmpmemosvarios/index/{filter?}/{filtervalue?}', 'TblMpMemosVariosController@index')->name('tblmpmemosvarios.index');	
	Route::get('tblmpmemosvarios/view/{rec_id}', 'TblMpMemosVariosController@view')->name('tblmpmemosvarios.view');	
	Route::get('tblmpmemosvarios/add', 'TblMpMemosVariosController@add')->name('tblmpmemosvarios.add');
	Route::post('tblmpmemosvarios/add', 'TblMpMemosVariosController@store')->name('tblmpmemosvarios.store');
		
	Route::any('tblmpmemosvarios/edit/{rec_id}', 'TblMpMemosVariosController@edit')->name('tblmpmemosvarios.edit');	
	Route::get('tblmpmemosvarios/delete/{rec_id}', 'TblMpMemosVariosController@delete');

/* routes for TblMpNivelEscala Controller */
	Route::get('tblmpnivelescala', 'TblMpNivelEscalaController@index')->name('tblmpnivelescala.index');
	Route::get('tblmpnivelescala/index/{filter?}/{filtervalue?}', 'TblMpNivelEscalaController@index')->name('tblmpnivelescala.index');	
	Route::get('tblmpnivelescala/view/{rec_id}', 'TblMpNivelEscalaController@view')->name('tblmpnivelescala.view');	
	Route::get('tblmpnivelescala/add', 'TblMpNivelEscalaController@add')->name('tblmpnivelescala.add');
	Route::post('tblmpnivelescala/add', 'TblMpNivelEscalaController@store')->name('tblmpnivelescala.store');
		
	Route::any('tblmpnivelescala/edit/{rec_id}', 'TblMpNivelEscalaController@edit')->name('tblmpnivelescala.edit');	
	Route::get('tblmpnivelescala/delete/{rec_id}', 'TblMpNivelEscalaController@delete');

/* routes for TblMpNivelSalarial Controller */
	Route::get('tblmpnivelsalarial', 'TblMpNivelSalarialController@index')->name('tblmpnivelsalarial.index');
	Route::get('tblmpnivelsalarial/index/{filter?}/{filtervalue?}', 'TblMpNivelSalarialController@index')->name('tblmpnivelsalarial.index');	
	Route::get('tblmpnivelsalarial/view/{rec_id}', 'TblMpNivelSalarialController@view')->name('tblmpnivelsalarial.view');	
	Route::get('tblmpnivelsalarial/add', 'TblMpNivelSalarialController@add')->name('tblmpnivelsalarial.add');
	Route::post('tblmpnivelsalarial/add', 'TblMpNivelSalarialController@store')->name('tblmpnivelsalarial.store');
		
	Route::any('tblmpnivelsalarial/edit/{rec_id}', 'TblMpNivelSalarialController@edit')->name('tblmpnivelsalarial.edit');	
	Route::get('tblmpnivelsalarial/delete/{rec_id}', 'TblMpNivelSalarialController@delete');

/* routes for TblMpPresupuesto Controller */
	Route::get('tblmppresupuesto', 'TblMpPresupuestoController@index')->name('tblmppresupuesto.index');
	Route::get('tblmppresupuesto/index/{filter?}/{filtervalue?}', 'TblMpPresupuestoController@index')->name('tblmppresupuesto.index');	
	Route::get('tblmppresupuesto/view/{rec_id}', 'TblMpPresupuestoController@view')->name('tblmppresupuesto.view');	
	Route::get('tblmppresupuesto/add', 'TblMpPresupuestoController@add')->name('tblmppresupuesto.add');
	Route::post('tblmppresupuesto/add', 'TblMpPresupuestoController@store')->name('tblmppresupuesto.store');
		
	Route::any('tblmppresupuesto/edit/{rec_id}', 'TblMpPresupuestoController@edit')->name('tblmppresupuesto.edit');	
	Route::get('tblmppresupuesto/delete/{rec_id}', 'TblMpPresupuestoController@delete');

/* routes for TblMpPuesto Controller */
	Route::get('tblmppuesto', 'TblMpPuestoController@index')->name('tblmppuesto.index');
	Route::get('tblmppuesto/index/{filter?}/{filtervalue?}', 'TblMpPuestoController@index')->name('tblmppuesto.index');

/* routes for TblMpTenor Controller */
	Route::get('tblmptenor', 'TblMpTenorController@index')->name('tblmptenor.index');
	Route::get('tblmptenor/index/{filter?}/{filtervalue?}', 'TblMpTenorController@index')->name('tblmptenor.index');	
	Route::get('tblmptenor/view/{rec_id}', 'TblMpTenorController@view')->name('tblmptenor.view');	
	Route::get('tblmptenor/add', 'TblMpTenorController@add')->name('tblmptenor.add');
	Route::post('tblmptenor/add', 'TblMpTenorController@store')->name('tblmptenor.store');
		
	Route::any('tblmptenor/edit/{rec_id}', 'TblMpTenorController@edit')->name('tblmptenor.edit');	
	Route::get('tblmptenor/delete/{rec_id}', 'TblMpTenorController@delete');

/* routes for TblMpTipoAbono Controller */
	Route::get('tblmptipoabono', 'TblMpTipoAbonoController@index')->name('tblmptipoabono.index');
	Route::get('tblmptipoabono/index/{filter?}/{filtervalue?}', 'TblMpTipoAbonoController@index')->name('tblmptipoabono.index');	
	Route::get('tblmptipoabono/view/{rec_id}', 'TblMpTipoAbonoController@view')->name('tblmptipoabono.view');	
	Route::get('tblmptipoabono/add', 'TblMpTipoAbonoController@add')->name('tblmptipoabono.add');
	Route::post('tblmptipoabono/add', 'TblMpTipoAbonoController@store')->name('tblmptipoabono.store');
		
	Route::any('tblmptipoabono/edit/{rec_id}', 'TblMpTipoAbonoController@edit')->name('tblmptipoabono.edit');	
	Route::get('tblmptipoabono/delete/{rec_id}', 'TblMpTipoAbonoController@delete');

/* routes for TblMpTipoItem Controller */
	Route::get('tblmptipoitem', 'TblMpTipoItemController@index')->name('tblmptipoitem.index');
	Route::get('tblmptipoitem/index/{filter?}/{filtervalue?}', 'TblMpTipoItemController@index')->name('tblmptipoitem.index');	
	Route::get('tblmptipoitem/view/{rec_id}', 'TblMpTipoItemController@view')->name('tblmptipoitem.view');	
	Route::get('tblmptipoitem/add', 'TblMpTipoItemController@add')->name('tblmptipoitem.add');
	Route::post('tblmptipoitem/add', 'TblMpTipoItemController@store')->name('tblmptipoitem.store');
		
	Route::any('tblmptipoitem/edit/{rec_id}', 'TblMpTipoItemController@edit')->name('tblmptipoitem.edit');	
	Route::get('tblmptipoitem/delete/{rec_id}', 'TblMpTipoItemController@delete');

/* routes for TblPcFrecuencias Controller */
	Route::get('tblpcfrecuencias', 'TblPcFrecuenciasController@index')->name('tblpcfrecuencias.index');
	Route::get('tblpcfrecuencias/index/{filter?}/{filtervalue?}', 'TblPcFrecuenciasController@index')->name('tblpcfrecuencias.index');	
	Route::get('tblpcfrecuencias/view/{rec_id}', 'TblPcFrecuenciasController@view')->name('tblpcfrecuencias.view');	
	Route::get('tblpcfrecuencias/add', 'TblPcFrecuenciasController@add')->name('tblpcfrecuencias.add');
	Route::post('tblpcfrecuencias/add', 'TblPcFrecuenciasController@store')->name('tblpcfrecuencias.store');
		
	Route::any('tblpcfrecuencias/edit/{rec_id}', 'TblPcFrecuenciasController@edit')->name('tblpcfrecuencias.edit');	
	Route::get('tblpcfrecuencias/delete/{rec_id}', 'TblPcFrecuenciasController@delete');

/* routes for TblPcMpAsignacionRelPcPrecontratado Controller */
	Route::get('tblpcmpasignacionrelpcprecontratado', 'TblPcMpAsignacionRelPcPrecontratadoController@index')->name('tblpcmpasignacionrelpcprecontratado.index');
	Route::get('tblpcmpasignacionrelpcprecontratado/index/{filter?}/{filtervalue?}', 'TblPcMpAsignacionRelPcPrecontratadoController@index')->name('tblpcmpasignacionrelpcprecontratado.index');

/* routes for TblPcPlanilla Controller */
	Route::get('tblpcplanilla', 'TblPcPlanillaController@index')->name('tblpcplanilla.index');
	Route::get('tblpcplanilla/index/{filter?}/{filtervalue?}', 'TblPcPlanillaController@index')->name('tblpcplanilla.index');	
	Route::get('tblpcplanilla/view/{rec_id}', 'TblPcPlanillaController@view')->name('tblpcplanilla.view');	
	Route::get('tblpcplanilla/add', 'TblPcPlanillaController@add')->name('tblpcplanilla.add');
	Route::post('tblpcplanilla/add', 'TblPcPlanillaController@store')->name('tblpcplanilla.store');
		
	Route::any('tblpcplanilla/edit/{rec_id}', 'TblPcPlanillaController@edit')->name('tblpcplanilla.edit');	
	Route::get('tblpcplanilla/delete/{rec_id}', 'TblPcPlanillaController@delete');

/* routes for TblPcPrecontratado Controller */
	Route::get('tblpcprecontratado', 'TblPcPrecontratadoController@index')->name('tblpcprecontratado.index');
	Route::get('tblpcprecontratado/index/{filter?}/{filtervalue?}', 'TblPcPrecontratadoController@index')->name('tblpcprecontratado.index');	
	Route::get('tblpcprecontratado/view/{rec_id}', 'TblPcPrecontratadoController@view')->name('tblpcprecontratado.view');	
	Route::get('tblpcprecontratado/add', 'TblPcPrecontratadoController@add')->name('tblpcprecontratado.add');
	Route::post('tblpcprecontratado/add', 'TblPcPrecontratadoController@store')->name('tblpcprecontratado.store');
		
	Route::any('tblpcprecontratado/edit/{rec_id}', 'TblPcPrecontratadoController@edit')->name('tblpcprecontratado.edit');	
	Route::get('tblpcprecontratado/delete/{rec_id}', 'TblPcPrecontratadoController@delete');

/* routes for TblPcSeguimiento Controller */
	Route::get('tblpcseguimiento', 'TblPcSeguimientoController@index')->name('tblpcseguimiento.index');
	Route::get('tblpcseguimiento/index/{filter?}/{filtervalue?}', 'TblPcSeguimientoController@index')->name('tblpcseguimiento.index');	
	Route::get('tblpcseguimiento/view/{rec_id}', 'TblPcSeguimientoController@view')->name('tblpcseguimiento.view');	
	Route::get('tblpcseguimiento/add', 'TblPcSeguimientoController@add')->name('tblpcseguimiento.add');
	Route::post('tblpcseguimiento/add', 'TblPcSeguimientoController@store')->name('tblpcseguimiento.store');
		
	Route::any('tblpcseguimiento/edit/{rec_id}', 'TblPcSeguimientoController@edit')->name('tblpcseguimiento.edit');	
	Route::get('tblpcseguimiento/delete/{rec_id}', 'TblPcSeguimientoController@delete');

/* routes for TblPcTmpPrecontratado Controller */
	Route::get('tblpctmpprecontratado', 'TblPcTmpPrecontratadoController@index')->name('tblpctmpprecontratado.index');
	Route::get('tblpctmpprecontratado/index/{filter?}/{filtervalue?}', 'TblPcTmpPrecontratadoController@index')->name('tblpctmpprecontratado.index');

/* routes for TblPermisoCategoriaProgramatica Controller */
	Route::get('tblpermisocategoriaprogramatica', 'TblPermisoCategoriaProgramaticaController@index')->name('tblpermisocategoriaprogramatica.index');
	Route::get('tblpermisocategoriaprogramatica/index/{filter?}/{filtervalue?}', 'TblPermisoCategoriaProgramaticaController@index')->name('tblpermisocategoriaprogramatica.index');	
	Route::get('tblpermisocategoriaprogramatica/view/{rec_id}', 'TblPermisoCategoriaProgramaticaController@view')->name('tblpermisocategoriaprogramatica.view');	
	Route::get('tblpermisocategoriaprogramatica/add', 'TblPermisoCategoriaProgramaticaController@add')->name('tblpermisocategoriaprogramatica.add');
	Route::post('tblpermisocategoriaprogramatica/add', 'TblPermisoCategoriaProgramaticaController@store')->name('tblpermisocategoriaprogramatica.store');
		
	Route::any('tblpermisocategoriaprogramatica/edit/{rec_id}', 'TblPermisoCategoriaProgramaticaController@edit')->name('tblpermisocategoriaprogramatica.edit');	
	Route::get('tblpermisocategoriaprogramatica/delete/{rec_id}', 'TblPermisoCategoriaProgramaticaController@delete');

/* routes for TblPersona Controller */
	Route::get('tblpersona', 'TblPersonaController@index')->name('tblpersona.index');
	Route::get('tblpersona/index/{filter?}/{filtervalue?}', 'TblPersonaController@index')->name('tblpersona.index');	
	Route::get('tblpersona/view/{rec_id}', 'TblPersonaController@view')->name('tblpersona.view');
	Route::get('tblpersona/masterdetail/{rec_id}', 'TblPersonaController@masterDetail')->name('tblpersona.masterdetail');	
	Route::get('tblpersona/add', 'TblPersonaController@add')->name('tblpersona.add');
	Route::post('tblpersona/add', 'TblPersonaController@store')->name('tblpersona.store');
		
	Route::any('tblpersona/edit/{rec_id}', 'TblPersonaController@edit')->name('tblpersona.edit');	
	Route::get('tblpersona/delete/{rec_id}', 'TblPersonaController@delete');

/* routes for TblPersonaDomicilio Controller */
	Route::get('tblpersonadomicilio', 'TblPersonaDomicilioController@index')->name('tblpersonadomicilio.index');
	Route::get('tblpersonadomicilio/index/{filter?}/{filtervalue?}', 'TblPersonaDomicilioController@index')->name('tblpersonadomicilio.index');

/* routes for TblPersonaFamiliares Controller */
	Route::get('tblpersonafamiliares', 'TblPersonaFamiliaresController@index')->name('tblpersonafamiliares.index');
	Route::get('tblpersonafamiliares/index/{filter?}/{filtervalue?}', 'TblPersonaFamiliaresController@index')->name('tblpersonafamiliares.index');

/* routes for TblPersonaFoto Controller */
	Route::get('tblpersonafoto', 'TblPersonaFotoController@index')->name('tblpersonafoto.index');
	Route::get('tblpersonafoto/index/{filter?}/{filtervalue?}', 'TblPersonaFotoController@index')->name('tblpersonafoto.index');	
	Route::get('tblpersonafoto/view/{rec_id}', 'TblPersonaFotoController@view')->name('tblpersonafoto.view');	
	Route::get('tblpersonafoto/add', 'TblPersonaFotoController@add')->name('tblpersonafoto.add');
	Route::post('tblpersonafoto/add', 'TblPersonaFotoController@store')->name('tblpersonafoto.store');
		
	Route::any('tblpersonafoto/edit/{rec_id}', 'TblPersonaFotoController@edit')->name('tblpersonafoto.edit');	
	Route::get('tblpersonafoto/delete/{rec_id}', 'TblPersonaFotoController@delete');

/* routes for TblPlaAcreedorRetencion Controller */
	Route::get('tblplaacreedorretencion', 'TblPlaAcreedorRetencionController@index')->name('tblplaacreedorretencion.index');
	Route::get('tblplaacreedorretencion/index/{filter?}/{filtervalue?}', 'TblPlaAcreedorRetencionController@index')->name('tblplaacreedorretencion.index');	
	Route::get('tblplaacreedorretencion/view/{rec_id}', 'TblPlaAcreedorRetencionController@view')->name('tblplaacreedorretencion.view');	
	Route::get('tblplaacreedorretencion/add', 'TblPlaAcreedorRetencionController@add')->name('tblplaacreedorretencion.add');
	Route::post('tblplaacreedorretencion/add', 'TblPlaAcreedorRetencionController@store')->name('tblplaacreedorretencion.store');
		
	Route::any('tblplaacreedorretencion/edit/{rec_id}', 'TblPlaAcreedorRetencionController@edit')->name('tblplaacreedorretencion.edit');	
	Route::get('tblplaacreedorretencion/delete/{rec_id}', 'TblPlaAcreedorRetencionController@delete');

/* routes for TblPlaCabBoletaHistorico Controller */
	Route::get('tblplacabboletahistorico', 'TblPlaCabBoletaHistoricoController@index')->name('tblplacabboletahistorico.index');
	Route::get('tblplacabboletahistorico/index/{filter?}/{filtervalue?}', 'TblPlaCabBoletaHistoricoController@index')->name('tblplacabboletahistorico.index');	
	Route::get('tblplacabboletahistorico/view/{rec_id}', 'TblPlaCabBoletaHistoricoController@view')->name('tblplacabboletahistorico.view');	
	Route::get('tblplacabboletahistorico/add', 'TblPlaCabBoletaHistoricoController@add')->name('tblplacabboletahistorico.add');
	Route::post('tblplacabboletahistorico/add', 'TblPlaCabBoletaHistoricoController@store')->name('tblplacabboletahistorico.store');
		
	Route::any('tblplacabboletahistorico/edit/{rec_id}', 'TblPlaCabBoletaHistoricoController@edit')->name('tblplacabboletahistorico.edit');	
	Route::get('tblplacabboletahistorico/delete/{rec_id}', 'TblPlaCabBoletaHistoricoController@delete');

/* routes for TblPlaCas Controller */
	Route::get('tblplacas', 'TblPlaCasController@index')->name('tblplacas.index');
	Route::get('tblplacas/index/{filter?}/{filtervalue?}', 'TblPlaCasController@index')->name('tblplacas.index');	
	Route::get('tblplacas/view/{rec_id}', 'TblPlaCasController@view')->name('tblplacas.view');	
	Route::get('tblplacas/add', 'TblPlaCasController@add')->name('tblplacas.add');
	Route::post('tblplacas/add', 'TblPlaCasController@store')->name('tblplacas.store');
		
	Route::any('tblplacas/edit/{rec_id}', 'TblPlaCasController@edit')->name('tblplacas.edit');	
	Route::get('tblplacas/delete/{rec_id}', 'TblPlaCasController@delete');

/* routes for TblPlaDetBoletaHistorico Controller */
	Route::get('tblpladetboletahistorico', 'TblPlaDetBoletaHistoricoController@index')->name('tblpladetboletahistorico.index');
	Route::get('tblpladetboletahistorico/index/{filter?}/{filtervalue?}', 'TblPlaDetBoletaHistoricoController@index')->name('tblpladetboletahistorico.index');	
	Route::get('tblpladetboletahistorico/view/{rec_id}', 'TblPlaDetBoletaHistoricoController@view')->name('tblpladetboletahistorico.view');	
	Route::get('tblpladetboletahistorico/add', 'TblPlaDetBoletaHistoricoController@add')->name('tblpladetboletahistorico.add');
	Route::post('tblpladetboletahistorico/add', 'TblPlaDetBoletaHistoricoController@store')->name('tblpladetboletahistorico.store');
		
	Route::any('tblpladetboletahistorico/edit/{rec_id}', 'TblPlaDetBoletaHistoricoController@edit')->name('tblpladetboletahistorico.edit');	
	Route::get('tblpladetboletahistorico/delete/{rec_id}', 'TblPlaDetBoletaHistoricoController@delete');

/* routes for TblPlaDetBonoHistorico Controller */
	Route::get('tblpladetbonohistorico', 'TblPlaDetBonoHistoricoController@index')->name('tblpladetbonohistorico.index');
	Route::get('tblpladetbonohistorico/index/{filter?}/{filtervalue?}', 'TblPlaDetBonoHistoricoController@index')->name('tblpladetbonohistorico.index');	
	Route::get('tblpladetbonohistorico/view/{rec_id}', 'TblPlaDetBonoHistoricoController@view')->name('tblpladetbonohistorico.view');	
	Route::get('tblpladetbonohistorico/add', 'TblPlaDetBonoHistoricoController@add')->name('tblpladetbonohistorico.add');
	Route::post('tblpladetbonohistorico/add', 'TblPlaDetBonoHistoricoController@store')->name('tblpladetbonohistorico.store');
		
	Route::any('tblpladetbonohistorico/edit/{rec_id}', 'TblPlaDetBonoHistoricoController@edit')->name('tblpladetbonohistorico.edit');	
	Route::get('tblpladetbonohistorico/delete/{rec_id}', 'TblPlaDetBonoHistoricoController@delete');

/* routes for TblPlaFactor Controller */
	Route::get('tblplafactor', 'TblPlaFactorController@index')->name('tblplafactor.index');
	Route::get('tblplafactor/index/{filter?}/{filtervalue?}', 'TblPlaFactorController@index')->name('tblplafactor.index');	
	Route::get('tblplafactor/view/{rec_id}', 'TblPlaFactorController@view')->name('tblplafactor.view');	
	Route::get('tblplafactor/add', 'TblPlaFactorController@add')->name('tblplafactor.add');
	Route::post('tblplafactor/add', 'TblPlaFactorController@store')->name('tblplafactor.store');
		
	Route::any('tblplafactor/edit/{rec_id}', 'TblPlaFactorController@edit')->name('tblplafactor.edit');	
	Route::get('tblplafactor/delete/{rec_id}', 'TblPlaFactorController@delete');

/* routes for TblPlaProceso Controller */
	Route::get('tblplaproceso', 'TblPlaProcesoController@index')->name('tblplaproceso.index');
	Route::get('tblplaproceso/index/{filter?}/{filtervalue?}', 'TblPlaProcesoController@index')->name('tblplaproceso.index');	
	Route::get('tblplaproceso/view/{rec_id}', 'TblPlaProcesoController@view')->name('tblplaproceso.view');	
	Route::get('tblplaproceso/add', 'TblPlaProcesoController@add')->name('tblplaproceso.add');
	Route::post('tblplaproceso/add', 'TblPlaProcesoController@store')->name('tblplaproceso.store');
		
	Route::any('tblplaproceso/edit/{rec_id}', 'TblPlaProcesoController@edit')->name('tblplaproceso.edit');	
	Route::get('tblplaproceso/delete/{rec_id}', 'TblPlaProcesoController@delete');

/* routes for TblPlaSuplencia Controller */
	Route::get('tblplasuplencia', 'TblPlaSuplenciaController@index')->name('tblplasuplencia.index');
	Route::get('tblplasuplencia/index/{filter?}/{filtervalue?}', 'TblPlaSuplenciaController@index')->name('tblplasuplencia.index');	
	Route::get('tblplasuplencia/view/{rec_id}', 'TblPlaSuplenciaController@view')->name('tblplasuplencia.view');	
	Route::get('tblplasuplencia/add', 'TblPlaSuplenciaController@add')->name('tblplasuplencia.add');
	Route::post('tblplasuplencia/add', 'TblPlaSuplenciaController@store')->name('tblplasuplencia.store');
		
	Route::any('tblplasuplencia/edit/{rec_id}', 'TblPlaSuplenciaController@edit')->name('tblplasuplencia.edit');	
	Route::get('tblplasuplencia/delete/{rec_id}', 'TblPlaSuplenciaController@delete');

/* routes for TblPlaSuplenciaAdicionarAsistencia Controller */
	Route::get('tblplasuplenciaadicionarasistencia', 'TblPlaSuplenciaAdicionarAsistenciaController@index')->name('tblplasuplenciaadicionarasistencia.index');
	Route::get('tblplasuplenciaadicionarasistencia/index/{filter?}/{filtervalue?}', 'TblPlaSuplenciaAdicionarAsistenciaController@index')->name('tblplasuplenciaadicionarasistencia.index');	
	Route::get('tblplasuplenciaadicionarasistencia/view/{rec_id}', 'TblPlaSuplenciaAdicionarAsistenciaController@view')->name('tblplasuplenciaadicionarasistencia.view');	
	Route::get('tblplasuplenciaadicionarasistencia/add', 'TblPlaSuplenciaAdicionarAsistenciaController@add')->name('tblplasuplenciaadicionarasistencia.add');
	Route::post('tblplasuplenciaadicionarasistencia/add', 'TblPlaSuplenciaAdicionarAsistenciaController@store')->name('tblplasuplenciaadicionarasistencia.store');
		
	Route::any('tblplasuplenciaadicionarasistencia/edit/{rec_id}', 'TblPlaSuplenciaAdicionarAsistenciaController@edit')->name('tblplasuplenciaadicionarasistencia.edit');	
	Route::get('tblplasuplenciaadicionarasistencia/delete/{rec_id}', 'TblPlaSuplenciaAdicionarAsistenciaController@delete');

/* routes for TblPlaSuplenciaAsistencia Controller */
	Route::get('tblplasuplenciaasistencia', 'TblPlaSuplenciaAsistenciaController@index')->name('tblplasuplenciaasistencia.index');
	Route::get('tblplasuplenciaasistencia/index/{filter?}/{filtervalue?}', 'TblPlaSuplenciaAsistenciaController@index')->name('tblplasuplenciaasistencia.index');	
	Route::get('tblplasuplenciaasistencia/view/{rec_id}', 'TblPlaSuplenciaAsistenciaController@view')->name('tblplasuplenciaasistencia.view');	
	Route::get('tblplasuplenciaasistencia/add', 'TblPlaSuplenciaAsistenciaController@add')->name('tblplasuplenciaasistencia.add');
	Route::post('tblplasuplenciaasistencia/add', 'TblPlaSuplenciaAsistenciaController@store')->name('tblplasuplenciaasistencia.store');
		
	Route::any('tblplasuplenciaasistencia/edit/{rec_id}', 'TblPlaSuplenciaAsistenciaController@edit')->name('tblplasuplenciaasistencia.edit');	
	Route::get('tblplasuplenciaasistencia/delete/{rec_id}', 'TblPlaSuplenciaAsistenciaController@delete');

/* routes for TblPlaSuplenciaDocadj Controller */
	Route::get('tblplasuplenciadocadj', 'TblPlaSuplenciaDocadjController@index')->name('tblplasuplenciadocadj.index');
	Route::get('tblplasuplenciadocadj/index/{filter?}/{filtervalue?}', 'TblPlaSuplenciaDocadjController@index')->name('tblplasuplenciadocadj.index');	
	Route::get('tblplasuplenciadocadj/view/{rec_id}', 'TblPlaSuplenciaDocadjController@view')->name('tblplasuplenciadocadj.view');	
	Route::get('tblplasuplenciadocadj/add', 'TblPlaSuplenciaDocadjController@add')->name('tblplasuplenciadocadj.add');
	Route::post('tblplasuplenciadocadj/add', 'TblPlaSuplenciaDocadjController@store')->name('tblplasuplenciadocadj.store');
		
	Route::any('tblplasuplenciadocadj/edit/{rec_id}', 'TblPlaSuplenciaDocadjController@edit')->name('tblplasuplenciadocadj.edit');	
	Route::get('tblplasuplenciadocadj/delete/{rec_id}', 'TblPlaSuplenciaDocadjController@delete');

/* routes for TblPlaTransacciones Controller */
	Route::get('tblplatransacciones', 'TblPlaTransaccionesController@index')->name('tblplatransacciones.index');
	Route::get('tblplatransacciones/index/{filter?}/{filtervalue?}', 'TblPlaTransaccionesController@index')->name('tblplatransacciones.index');	
	Route::get('tblplatransacciones/view/{rec_id}', 'TblPlaTransaccionesController@view')->name('tblplatransacciones.view');	
	Route::get('tblplatransacciones/add', 'TblPlaTransaccionesController@add')->name('tblplatransacciones.add');
	Route::post('tblplatransacciones/add', 'TblPlaTransaccionesController@store')->name('tblplatransacciones.store');
		
	Route::any('tblplatransacciones/edit/{rec_id}', 'TblPlaTransaccionesController@edit')->name('tblplatransacciones.edit');	
	Route::get('tblplatransacciones/delete/{rec_id}', 'TblPlaTransaccionesController@delete');

/* routes for TblPlaTransaccionesAcreedor Controller */
	Route::get('tblplatransaccionesacreedor', 'TblPlaTransaccionesAcreedorController@index')->name('tblplatransaccionesacreedor.index');
	Route::get('tblplatransaccionesacreedor/index/{filter?}/{filtervalue?}', 'TblPlaTransaccionesAcreedorController@index')->name('tblplatransaccionesacreedor.index');

/* routes for TblPlaTransaccionesCuotas Controller */
	Route::get('tblplatransaccionescuotas', 'TblPlaTransaccionesCuotasController@index')->name('tblplatransaccionescuotas.index');
	Route::get('tblplatransaccionescuotas/index/{filter?}/{filtervalue?}', 'TblPlaTransaccionesCuotasController@index')->name('tblplatransaccionescuotas.index');	
	Route::get('tblplatransaccionescuotas/view/{rec_id}', 'TblPlaTransaccionesCuotasController@view')->name('tblplatransaccionescuotas.view');	
	Route::get('tblplatransaccionescuotas/add', 'TblPlaTransaccionesCuotasController@add')->name('tblplatransaccionescuotas.add');
	Route::post('tblplatransaccionescuotas/add', 'TblPlaTransaccionesCuotasController@store')->name('tblplatransaccionescuotas.store');
		
	Route::any('tblplatransaccionescuotas/edit/{rec_id}', 'TblPlaTransaccionesCuotasController@edit')->name('tblplatransaccionescuotas.edit');	
	Route::get('tblplatransaccionescuotas/delete/{rec_id}', 'TblPlaTransaccionesCuotasController@delete');

/* routes for TblPlaTransaccionesCuotaseliminado Controller */
	Route::get('tblplatransaccionescuotaseliminado', 'TblPlaTransaccionesCuotaseliminadoController@index')->name('tblplatransaccionescuotaseliminado.index');
	Route::get('tblplatransaccionescuotaseliminado/index/{filter?}/{filtervalue?}', 'TblPlaTransaccionesCuotaseliminadoController@index')->name('tblplatransaccionescuotaseliminado.index');

/* routes for TblPlaTributaria Controller */
	Route::get('tblplatributaria', 'TblPlaTributariaController@index')->name('tblplatributaria.index');
	Route::get('tblplatributaria/index/{filter?}/{filtervalue?}', 'TblPlaTributariaController@index')->name('tblplatributaria.index');

/* routes for TblPsAisa Controller */
	Route::get('tblpsaisa', 'TblPsAisaController@index')->name('tblpsaisa.index');
	Route::get('tblpsaisa/index/{filter?}/{filtervalue?}', 'TblPsAisaController@index')->name('tblpsaisa.index');	
	Route::get('tblpsaisa/view/{rec_id}', 'TblPsAisaController@view')->name('tblpsaisa.view');	
	Route::get('tblpsaisa/add', 'TblPsAisaController@add')->name('tblpsaisa.add');
	Route::post('tblpsaisa/add', 'TblPsAisaController@store')->name('tblpsaisa.store');
		
	Route::any('tblpsaisa/edit/{rec_id}', 'TblPsAisaController@edit')->name('tblpsaisa.edit');	
	Route::get('tblpsaisa/delete/{rec_id}', 'TblPsAisaController@delete');

/* routes for TblPsProccoactfisc Controller */
	Route::get('tblpsproccoactfisc', 'TblPsProccoactfiscController@index')->name('tblpsproccoactfisc.index');
	Route::get('tblpsproccoactfisc/index/{filter?}/{filtervalue?}', 'TblPsProccoactfiscController@index')->name('tblpsproccoactfisc.index');	
	Route::get('tblpsproccoactfisc/view/{rec_id}', 'TblPsProccoactfiscController@view')->name('tblpsproccoactfisc.view');	
	Route::get('tblpsproccoactfisc/add', 'TblPsProccoactfiscController@add')->name('tblpsproccoactfisc.add');
	Route::post('tblpsproccoactfisc/add', 'TblPsProccoactfiscController@store')->name('tblpsproccoactfisc.store');
		
	Route::any('tblpsproccoactfisc/edit/{rec_id}', 'TblPsProccoactfiscController@edit')->name('tblpsproccoactfisc.edit');	
	Route::get('tblpsproccoactfisc/delete/{rec_id}', 'TblPsProccoactfiscController@delete');

/* routes for TblPuestos Controller */
	Route::get('tblpuestos', 'TblPuestosController@index')->name('tblpuestos.index');
	Route::get('tblpuestos/index/{filter?}/{filtervalue?}', 'TblPuestosController@index')->name('tblpuestos.index');

/* routes for TblRango Controller */
	Route::get('tblrango', 'TblRangoController@index')->name('tblrango.index');
	Route::get('tblrango/index/{filter?}/{filtervalue?}', 'TblRangoController@index')->name('tblrango.index');	
	Route::get('tblrango/view/{rec_id}', 'TblRangoController@view')->name('tblrango.view');	
	Route::get('tblrango/add', 'TblRangoController@add')->name('tblrango.add');
	Route::post('tblrango/add', 'TblRangoController@store')->name('tblrango.store');
		
	Route::any('tblrango/edit/{rec_id}', 'TblRangoController@edit')->name('tblrango.edit');	
	Route::get('tblrango/delete/{rec_id}', 'TblRangoController@delete');

/* routes for TblRfsPoai Controller */
	Route::get('tblrfspoai', 'TblRfsPoaiController@index')->name('tblrfspoai.index');
	Route::get('tblrfspoai/index/{filter?}/{filtervalue?}', 'TblRfsPoaiController@index')->name('tblrfspoai.index');	
	Route::get('tblrfspoai/view/{rec_id}', 'TblRfsPoaiController@view')->name('tblrfspoai.view');	
	Route::get('tblrfspoai/add', 'TblRfsPoaiController@add')->name('tblrfspoai.add');
	Route::post('tblrfspoai/add', 'TblRfsPoaiController@store')->name('tblrfspoai.store');
		
	Route::any('tblrfspoai/edit/{rec_id}', 'TblRfsPoaiController@edit')->name('tblrfspoai.edit');	
	Route::get('tblrfspoai/delete/{rec_id}', 'TblRfsPoaiController@delete');

/* routes for TblRfsRegistroSap Controller */
	Route::get('tblrfsregistrosap', 'TblRfsRegistroSapController@index')->name('tblrfsregistrosap.index');
	Route::get('tblrfsregistrosap/index/{filter?}/{filtervalue?}', 'TblRfsRegistroSapController@index')->name('tblrfsregistrosap.index');	
	Route::get('tblrfsregistrosap/view/{rec_id}', 'TblRfsRegistroSapController@view')->name('tblrfsregistrosap.view');	
	Route::get('tblrfsregistrosap/add', 'TblRfsRegistroSapController@add')->name('tblrfsregistrosap.add');
	Route::post('tblrfsregistrosap/add', 'TblRfsRegistroSapController@store')->name('tblrfsregistrosap.store');
		
	Route::any('tblrfsregistrosap/edit/{rec_id}', 'TblRfsRegistroSapController@edit')->name('tblrfsregistrosap.edit');	
	Route::get('tblrfsregistrosap/delete/{rec_id}', 'TblRfsRegistroSapController@delete');

/* routes for TblRfsResultadosEspecificos Controller */
	Route::get('tblrfsresultadosespecificos', 'TblRfsResultadosEspecificosController@index')->name('tblrfsresultadosespecificos.index');
	Route::get('tblrfsresultadosespecificos/index/{filter?}/{filtervalue?}', 'TblRfsResultadosEspecificosController@index')->name('tblrfsresultadosespecificos.index');	
	Route::get('tblrfsresultadosespecificos/view/{rec_id}', 'TblRfsResultadosEspecificosController@view')->name('tblrfsresultadosespecificos.view');	
	Route::get('tblrfsresultadosespecificos/add', 'TblRfsResultadosEspecificosController@add')->name('tblrfsresultadosespecificos.add');
	Route::post('tblrfsresultadosespecificos/add', 'TblRfsResultadosEspecificosController@store')->name('tblrfsresultadosespecificos.store');
		
	Route::any('tblrfsresultadosespecificos/edit/{rec_id}', 'TblRfsResultadosEspecificosController@edit')->name('tblrfsresultadosespecificos.edit');	
	Route::get('tblrfsresultadosespecificos/delete/{rec_id}', 'TblRfsResultadosEspecificosController@delete');

/* routes for TblRfsTareasRecurrentes Controller */
	Route::get('tblrfstareasrecurrentes', 'TblRfsTareasRecurrentesController@index')->name('tblrfstareasrecurrentes.index');
	Route::get('tblrfstareasrecurrentes/index/{filter?}/{filtervalue?}', 'TblRfsTareasRecurrentesController@index')->name('tblrfstareasrecurrentes.index');	
	Route::get('tblrfstareasrecurrentes/view/{rec_id}', 'TblRfsTareasRecurrentesController@view')->name('tblrfstareasrecurrentes.view');	
	Route::get('tblrfstareasrecurrentes/add', 'TblRfsTareasRecurrentesController@add')->name('tblrfstareasrecurrentes.add');
	Route::post('tblrfstareasrecurrentes/add', 'TblRfsTareasRecurrentesController@store')->name('tblrfstareasrecurrentes.store');
		
	Route::any('tblrfstareasrecurrentes/edit/{rec_id}', 'TblRfsTareasRecurrentesController@edit')->name('tblrfstareasrecurrentes.edit');	
	Route::get('tblrfstareasrecurrentes/delete/{rec_id}', 'TblRfsTareasRecurrentesController@delete');

/* routes for TblSalariosMinimos Controller */
	Route::get('tblsalariosminimos', 'TblSalariosMinimosController@index')->name('tblsalariosminimos.index');
	Route::get('tblsalariosminimos/index/{filter?}/{filtervalue?}', 'TblSalariosMinimosController@index')->name('tblsalariosminimos.index');	
	Route::get('tblsalariosminimos/view/{rec_id}', 'TblSalariosMinimosController@view')->name('tblsalariosminimos.view');	
	Route::get('tblsalariosminimos/add', 'TblSalariosMinimosController@add')->name('tblsalariosminimos.add');
	Route::post('tblsalariosminimos/add', 'TblSalariosMinimosController@store')->name('tblsalariosminimos.store');
		
	Route::any('tblsalariosminimos/edit/{rec_id}', 'TblSalariosMinimosController@edit')->name('tblsalariosminimos.edit');	
	Route::get('tblsalariosminimos/delete/{rec_id}', 'TblSalariosMinimosController@delete');

/* routes for TblSalDevolucionSanciones Controller */
	Route::get('tblsaldevolucionsanciones', 'TblSalDevolucionSancionesController@index')->name('tblsaldevolucionsanciones.index');
	Route::get('tblsaldevolucionsanciones/index/{filter?}/{filtervalue?}', 'TblSalDevolucionSancionesController@index')->name('tblsaldevolucionsanciones.index');	
	Route::get('tblsaldevolucionsanciones/view/{rec_id}', 'TblSalDevolucionSancionesController@view')->name('tblsaldevolucionsanciones.view');	
	Route::get('tblsaldevolucionsanciones/add', 'TblSalDevolucionSancionesController@add')->name('tblsaldevolucionsanciones.add');
	Route::post('tblsaldevolucionsanciones/add', 'TblSalDevolucionSancionesController@store')->name('tblsaldevolucionsanciones.store');
		
	Route::any('tblsaldevolucionsanciones/edit/{rec_id}', 'TblSalDevolucionSancionesController@edit')->name('tblsaldevolucionsanciones.edit');	
	Route::get('tblsaldevolucionsanciones/delete/{rec_id}', 'TblSalDevolucionSancionesController@delete');

/* routes for TblSituacionPersona Controller */
	Route::get('tblsituacionpersona', 'TblSituacionPersonaController@index')->name('tblsituacionpersona.index');
	Route::get('tblsituacionpersona/index/{filter?}/{filtervalue?}', 'TblSituacionPersonaController@index')->name('tblsituacionpersona.index');	
	Route::get('tblsituacionpersona/view/{rec_id}', 'TblSituacionPersonaController@view')->name('tblsituacionpersona.view');	
	Route::get('tblsituacionpersona/add', 'TblSituacionPersonaController@add')->name('tblsituacionpersona.add');
	Route::post('tblsituacionpersona/add', 'TblSituacionPersonaController@store')->name('tblsituacionpersona.store');
		
	Route::any('tblsituacionpersona/edit/{rec_id}', 'TblSituacionPersonaController@edit')->name('tblsituacionpersona.edit');	
	Route::get('tblsituacionpersona/delete/{rec_id}', 'TblSituacionPersonaController@delete');

/* routes for TblTipoAportante Controller */
	Route::get('tbltipoaportante', 'TblTipoAportanteController@index')->name('tbltipoaportante.index');
	Route::get('tbltipoaportante/index/{filter?}/{filtervalue?}', 'TblTipoAportanteController@index')->name('tbltipoaportante.index');	
	Route::get('tbltipoaportante/view/{rec_id}', 'TblTipoAportanteController@view')->name('tbltipoaportante.view');	
	Route::get('tbltipoaportante/add', 'TblTipoAportanteController@add')->name('tbltipoaportante.add');
	Route::post('tbltipoaportante/add', 'TblTipoAportanteController@store')->name('tbltipoaportante.store');
		
	Route::any('tbltipoaportante/edit/{rec_id}', 'TblTipoAportanteController@edit')->name('tbltipoaportante.edit');	
	Route::get('tbltipoaportante/delete/{rec_id}', 'TblTipoAportanteController@delete');

/* routes for TblTipoSancion Controller */
	Route::get('tbltiposancion', 'TblTipoSancionController@index')->name('tbltiposancion.index');
	Route::get('tbltiposancion/index/{filter?}/{filtervalue?}', 'TblTipoSancionController@index')->name('tbltiposancion.index');	
	Route::get('tbltiposancion/view/{rec_id}', 'TblTipoSancionController@view')->name('tbltiposancion.view');	
	Route::get('tbltiposancion/add', 'TblTipoSancionController@add')->name('tbltiposancion.add');
	Route::post('tbltiposancion/add', 'TblTipoSancionController@store')->name('tbltiposancion.store');
		
	Route::any('tbltiposancion/edit/{rec_id}', 'TblTipoSancionController@edit')->name('tbltiposancion.edit');	
	Route::get('tbltiposancion/delete/{rec_id}', 'TblTipoSancionController@delete');

/**
 * All routes which requires auth
 */
Route::middleware(['auth'])->group(function () {
	
	
});


	
Route::get('componentsdata/afp_per_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->afp_per_id_option_list($request);
	}
);
	
Route::get('componentsdata/aginvexpre_exp_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->aginvexpre_exp_id_option_list($request);
	}
);
	
Route::get('componentsdata/bd_di_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->bd_di_id_option_list($request);
	}
);
	
Route::get('componentsdata/ps_cm_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->ps_cm_id_option_list($request);
	}
);


Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');


/**
 * All static content routes
 */
Route::get('info/about',  function(){
		return view("pages.info.about");
	}
);
Route::get('info/faq',  function(){
		return view("pages.info.faq");
	}
);

Route::get('info/contact',  function(){
	return view("pages.info.contact");
}
);
Route::get('info/contactsent',  function(){
	return view("pages.info.contactsent");
}
);

Route::post('info/contact',  function(Request $request){
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);

		$senderName = $request->name;
		$senderEmail = $request->email;
		$message = $request->message;

		$receiverEmail = config("mail.from.address");

		Mail::send(
			'pages.info.contactemail', [
				'name' => $senderName,
				'email' => $senderEmail,
				'comment' => $message
			],
			function ($mail) use ($senderEmail, $receiverEmail) {
				$mail->from($senderEmail);
				$mail->to($receiverEmail)
					->subject('Contact Form');
			}
		);
		return redirect("info/contactsent");
	}
);


Route::get('info/features',  function(){
		return view("pages.info.features");
	}
);
Route::get('info/privacypolicy',  function(){
		return view("pages.info.privacypolicy");
	}
);
Route::get('info/termsandconditions',  function(){
		return view("pages.info.termsandconditions");
	}
);

Route::get('info/changelocale/{locale}', function ($locale) {
	app()->setlocale($locale);
	session()->put('locale', $locale);
    return redirect()->back();
})->name('info.changelocale');
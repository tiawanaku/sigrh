<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblKdSolicitudVacacionAddRequest;
use App\Http\Requests\TblKdSolicitudVacacionEditRequest;
use App\Models\TblKdSolicitudVacacion;
use Illuminate\Http\Request;
use Exception;
class TblKdSolicitudVacacionController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblkdsolicitudvacacion.list";
		$query = TblKdSolicitudVacacion::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblKdSolicitudVacacion::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_kd_solicitud_vacacion.vac_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblKdSolicitudVacacion::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblKdSolicitudVacacion::query();
		$record = $query->findOrFail($rec_id, TblKdSolicitudVacacion::viewFields());
		return $this->renderView("pages.tblkdsolicitudvacacion.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblkdsolicitudvacacion.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblKdSolicitudVacacionAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblKdSolicitudVacacion record
		$record = TblKdSolicitudVacacion::create($modeldata);
		$rec_id = $record->vac_id;
		return $this->redirect("tblkdsolicitudvacacion", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblKdSolicitudVacacionEditRequest $request, $rec_id = null){
		$query = TblKdSolicitudVacacion::query();
		$record = $query->findOrFail($rec_id, TblKdSolicitudVacacion::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblkdsolicitudvacacion", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblkdsolicitudvacacion.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = TblKdSolicitudVacacion::query();
		$query->whereIn("vac_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

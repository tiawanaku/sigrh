<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblKdAsignacionVacacionAddRequest;
use App\Http\Requests\TblKdAsignacionVacacionEditRequest;
use App\Models\TblKdAsignacionVacacion;
use Illuminate\Http\Request;
use Exception;
class TblKdAsignacionVacacionController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblkdasignacionvacacion.list";
		$query = TblKdAsignacionVacacion::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblKdAsignacionVacacion::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_kd_asignacion_vacacion.va_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblKdAsignacionVacacion::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblKdAsignacionVacacion::query();
		$record = $query->findOrFail($rec_id, TblKdAsignacionVacacion::viewFields());
		return $this->renderView("pages.tblkdasignacionvacacion.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblkdasignacionvacacion.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblKdAsignacionVacacionAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblKdAsignacionVacacion record
		$record = TblKdAsignacionVacacion::create($modeldata);
		$rec_id = $record->va_id;
		return $this->redirect("tblkdasignacionvacacion", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblKdAsignacionVacacionEditRequest $request, $rec_id = null){
		$query = TblKdAsignacionVacacion::query();
		$record = $query->findOrFail($rec_id, TblKdAsignacionVacacion::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblkdasignacionvacacion", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblkdasignacionvacacion.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblKdAsignacionVacacion::query();
		$query->whereIn("va_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblRfsTareasRecurrentesAddRequest;
use App\Http\Requests\TblRfsTareasRecurrentesEditRequest;
use App\Models\TblRfsTareasRecurrentes;
use Illuminate\Http\Request;
use Exception;
class TblRfsTareasRecurrentesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblrfstareasrecurrentes.list";
		$query = TblRfsTareasRecurrentes::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblRfsTareasRecurrentes::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_rfs_tareas_recurrentes.tr_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblRfsTareasRecurrentes::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblRfsTareasRecurrentes::query();
		$record = $query->findOrFail($rec_id, TblRfsTareasRecurrentes::viewFields());
		return $this->renderView("pages.tblrfstareasrecurrentes.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblrfstareasrecurrentes.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblRfsTareasRecurrentesAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblRfsTareasRecurrentes record
		$record = TblRfsTareasRecurrentes::create($modeldata);
		$rec_id = $record->tr_id;
		return $this->redirect("tblrfstareasrecurrentes", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblRfsTareasRecurrentesEditRequest $request, $rec_id = null){
		$query = TblRfsTareasRecurrentes::query();
		$record = $query->findOrFail($rec_id, TblRfsTareasRecurrentes::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblrfstareasrecurrentes", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblrfstareasrecurrentes.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblRfsTareasRecurrentes::query();
		$query->whereIn("tr_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

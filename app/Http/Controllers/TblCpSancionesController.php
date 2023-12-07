<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblCpSancionesAddRequest;
use App\Http\Requests\TblCpSancionesEditRequest;
use App\Models\TblCpSanciones;
use Illuminate\Http\Request;
use Exception;
class TblCpSancionesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblcpsanciones.list";
		$query = TblCpSanciones::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblCpSanciones::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_cp_sanciones.sa_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblCpSanciones::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblCpSanciones::query();
		$record = $query->findOrFail($rec_id, TblCpSanciones::viewFields());
		return $this->renderView("pages.tblcpsanciones.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblcpsanciones.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblCpSancionesAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblCpSanciones record
		$record = TblCpSanciones::create($modeldata);
		$rec_id = $record->sa_id;
		return $this->redirect("tblcpsanciones", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblCpSancionesEditRequest $request, $rec_id = null){
		$query = TblCpSanciones::query();
		$record = $query->findOrFail($rec_id, TblCpSanciones::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblcpsanciones", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblcpsanciones.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblCpSanciones::query();
		$query->whereIn("sa_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

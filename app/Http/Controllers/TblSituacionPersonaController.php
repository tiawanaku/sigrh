<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblSituacionPersonaAddRequest;
use App\Http\Requests\TblSituacionPersonaEditRequest;
use App\Models\TblSituacionPersona;
use Illuminate\Http\Request;
use Exception;
class TblSituacionPersonaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblsituacionpersona.list";
		$query = TblSituacionPersona::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblSituacionPersona::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_situacion_persona.st_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblSituacionPersona::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblSituacionPersona::query();
		$record = $query->findOrFail($rec_id, TblSituacionPersona::viewFields());
		return $this->renderView("pages.tblsituacionpersona.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblsituacionpersona.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblSituacionPersonaAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblSituacionPersona record
		$record = TblSituacionPersona::create($modeldata);
		$rec_id = $record->st_id;
		return $this->redirect("tblsituacionpersona", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblSituacionPersonaEditRequest $request, $rec_id = null){
		$query = TblSituacionPersona::query();
		$record = $query->findOrFail($rec_id, TblSituacionPersona::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblsituacionpersona", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblsituacionpersona.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblSituacionPersona::query();
		$query->whereIn("st_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpNivelSalarialAddRequest;
use App\Http\Requests\TblMpNivelSalarialEditRequest;
use App\Models\TblMpNivelSalarial;
use Illuminate\Http\Request;
use Exception;
class TblMpNivelSalarialController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpnivelsalarial.list";
		$query = TblMpNivelSalarial::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpNivelSalarial::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_nivel_salarial.ns_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpNivelSalarial::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpNivelSalarial::query();
		$record = $query->findOrFail($rec_id, TblMpNivelSalarial::viewFields());
		return $this->renderView("pages.tblmpnivelsalarial.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmpnivelsalarial.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpNivelSalarialAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpNivelSalarial record
		$record = TblMpNivelSalarial::create($modeldata);
		$rec_id = $record->ns_id;
		return $this->redirect("tblmpnivelsalarial", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpNivelSalarialEditRequest $request, $rec_id = null){
		$query = TblMpNivelSalarial::query();
		$record = $query->findOrFail($rec_id, TblMpNivelSalarial::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmpnivelsalarial", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmpnivelsalarial.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpNivelSalarial::query();
		$query->whereIn("ns_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPcFrecuenciasAddRequest;
use App\Http\Requests\TblPcFrecuenciasEditRequest;
use App\Models\TblPcFrecuencias;
use Illuminate\Http\Request;
use Exception;
class TblPcFrecuenciasController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpcfrecuencias.list";
		$query = TblPcFrecuencias::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPcFrecuencias::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_pc_frecuencias.fr_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPcFrecuencias::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPcFrecuencias::query();
		$record = $query->findOrFail($rec_id, TblPcFrecuencias::viewFields());
		return $this->renderView("pages.tblpcfrecuencias.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblpcfrecuencias.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPcFrecuenciasAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblPcFrecuencias record
		$record = TblPcFrecuencias::create($modeldata);
		$rec_id = $record->fr_id;
		return $this->redirect("tblpcfrecuencias", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPcFrecuenciasEditRequest $request, $rec_id = null){
		$query = TblPcFrecuencias::query();
		$record = $query->findOrFail($rec_id, TblPcFrecuencias::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblpcfrecuencias", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblpcfrecuencias.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPcFrecuencias::query();
		$query->whereIn("fr_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPsAisaAddRequest;
use App\Http\Requests\TblPsAisaEditRequest;
use App\Models\TblPsAisa;
use Illuminate\Http\Request;
use Exception;
class TblPsAisaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpsaisa.list";
		$query = TblPsAisa::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPsAisa::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_ps_aisa.ps_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPsAisa::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPsAisa::query();
		$record = $query->findOrFail($rec_id, TblPsAisa::viewFields());
		return $this->renderView("pages.tblpsaisa.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblpsaisa.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPsAisaAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblPsAisa record
		$record = TblPsAisa::create($modeldata);
		$rec_id = $record->ps_id;
		return $this->redirect("tblpsaisa", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPsAisaEditRequest $request, $rec_id = null){
		$query = TblPsAisa::query();
		$record = $query->findOrFail($rec_id, TblPsAisa::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblpsaisa", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblpsaisa.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPsAisa::query();
		$query->whereIn("ps_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

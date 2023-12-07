<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPcPlanillaAddRequest;
use App\Http\Requests\TblPcPlanillaEditRequest;
use App\Models\TblPcPlanilla;
use Illuminate\Http\Request;
use Exception;
class TblPcPlanillaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpcplanilla.list";
		$query = TblPcPlanilla::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPcPlanilla::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_pc_planilla.pl_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPcPlanilla::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPcPlanilla::query();
		$record = $query->findOrFail($rec_id, TblPcPlanilla::viewFields());
		return $this->renderView("pages.tblpcplanilla.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblpcplanilla.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPcPlanillaAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblPcPlanilla record
		$record = TblPcPlanilla::create($modeldata);
		$rec_id = $record->pl_id;
		return $this->redirect("tblpcplanilla", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPcPlanillaEditRequest $request, $rec_id = null){
		$query = TblPcPlanilla::query();
		$record = $query->findOrFail($rec_id, TblPcPlanilla::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblpcplanilla", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblpcplanilla.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPcPlanilla::query();
		$query->whereIn("pl_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

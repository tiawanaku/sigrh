<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPlaProcesoAddRequest;
use App\Http\Requests\TblPlaProcesoEditRequest;
use App\Models\TblPlaProceso;
use Illuminate\Http\Request;
use Exception;
class TblPlaProcesoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblplaproceso.list";
		$query = TblPlaProceso::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPlaProceso::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_pla_proceso.pc_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPlaProceso::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPlaProceso::query();
		$record = $query->findOrFail($rec_id, TblPlaProceso::viewFields());
		return $this->renderView("pages.tblplaproceso.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblplaproceso.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPlaProcesoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblPlaProceso record
		$record = TblPlaProceso::create($modeldata);
		$rec_id = $record->pc_id;
		return $this->redirect("tblplaproceso", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPlaProcesoEditRequest $request, $rec_id = null){
		$query = TblPlaProceso::query();
		$record = $query->findOrFail($rec_id, TblPlaProceso::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblplaproceso", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblplaproceso.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPlaProceso::query();
		$query->whereIn("pc_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

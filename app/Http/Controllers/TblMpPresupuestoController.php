<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpPresupuestoAddRequest;
use App\Http\Requests\TblMpPresupuestoEditRequest;
use App\Models\TblMpPresupuesto;
use Illuminate\Http\Request;
use Exception;
class TblMpPresupuestoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmppresupuesto.list";
		$query = TblMpPresupuesto::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpPresupuesto::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_presupuesto.pp_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpPresupuesto::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpPresupuesto::query();
		$record = $query->findOrFail($rec_id, TblMpPresupuesto::viewFields());
		return $this->renderView("pages.tblmppresupuesto.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmppresupuesto.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpPresupuestoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpPresupuesto record
		$record = TblMpPresupuesto::create($modeldata);
		$rec_id = $record->pp_id;
		return $this->redirect("tblmppresupuesto", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpPresupuestoEditRequest $request, $rec_id = null){
		$query = TblMpPresupuesto::query();
		$record = $query->findOrFail($rec_id, TblMpPresupuesto::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmppresupuesto", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmppresupuesto.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpPresupuesto::query();
		$query->whereIn("pp_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

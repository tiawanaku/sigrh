<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPcSeguimientoAddRequest;
use App\Http\Requests\TblPcSeguimientoEditRequest;
use App\Models\TblPcSeguimiento;
use Illuminate\Http\Request;
use Exception;
class TblPcSeguimientoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpcseguimiento.list";
		$query = TblPcSeguimiento::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPcSeguimiento::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_pc_seguimiento.seg_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPcSeguimiento::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPcSeguimiento::query();
		$record = $query->findOrFail($rec_id, TblPcSeguimiento::viewFields());
		return $this->renderView("pages.tblpcseguimiento.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblpcseguimiento.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPcSeguimientoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblPcSeguimiento record
		$record = TblPcSeguimiento::create($modeldata);
		$rec_id = $record->seg_id;
		return $this->redirect("tblpcseguimiento", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPcSeguimientoEditRequest $request, $rec_id = null){
		$query = TblPcSeguimiento::query();
		$record = $query->findOrFail($rec_id, TblPcSeguimiento::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblpcseguimiento", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblpcseguimiento.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPcSeguimiento::query();
		$query->whereIn("seg_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

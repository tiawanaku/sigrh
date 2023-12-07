<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblKdRequisitoAddRequest;
use App\Http\Requests\TblKdRequisitoEditRequest;
use App\Models\TblKdRequisito;
use Illuminate\Http\Request;
use Exception;
class TblKdRequisitoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblkdrequisito.list";
		$query = TblKdRequisito::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblKdRequisito::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_kd_requisito.rq_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblKdRequisito::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblKdRequisito::query();
		$record = $query->findOrFail($rec_id, TblKdRequisito::viewFields());
		return $this->renderView("pages.tblkdrequisito.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblkdrequisito.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblKdRequisitoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblKdRequisito record
		$record = TblKdRequisito::create($modeldata);
		$rec_id = $record->rq_id;
		return $this->redirect("tblkdrequisito", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblKdRequisitoEditRequest $request, $rec_id = null){
		$query = TblKdRequisito::query();
		$record = $query->findOrFail($rec_id, TblKdRequisito::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblkdrequisito", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblkdrequisito.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblKdRequisito::query();
		$query->whereIn("rq_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

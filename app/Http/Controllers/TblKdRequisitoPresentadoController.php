<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblKdRequisitoPresentadoAddRequest;
use App\Http\Requests\TblKdRequisitoPresentadoEditRequest;
use App\Models\TblKdRequisitoPresentado;
use Illuminate\Http\Request;
use Exception;
class TblKdRequisitoPresentadoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblkdrequisitopresentado.list";
		$query = TblKdRequisitoPresentado::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblKdRequisitoPresentado::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_kd_requisito_presentado.rp_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblKdRequisitoPresentado::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblKdRequisitoPresentado::query();
		$record = $query->findOrFail($rec_id, TblKdRequisitoPresentado::viewFields());
		return $this->renderView("pages.tblkdrequisitopresentado.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblkdrequisitopresentado.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblKdRequisitoPresentadoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblKdRequisitoPresentado record
		$record = TblKdRequisitoPresentado::create($modeldata);
		$rec_id = $record->rp_id;
		return $this->redirect("tblkdrequisitopresentado", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblKdRequisitoPresentadoEditRequest $request, $rec_id = null){
		$query = TblKdRequisitoPresentado::query();
		$record = $query->findOrFail($rec_id, TblKdRequisitoPresentado::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblkdrequisitopresentado", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblkdrequisitopresentado.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblKdRequisitoPresentado::query();
		$query->whereIn("rp_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

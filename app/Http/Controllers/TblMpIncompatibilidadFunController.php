<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpIncompatibilidadFunAddRequest;
use App\Http\Requests\TblMpIncompatibilidadFunEditRequest;
use App\Models\TblMpIncompatibilidadFun;
use Illuminate\Http\Request;
use Exception;
class TblMpIncompatibilidadFunController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpincompatibilidadfun.list";
		$query = TblMpIncompatibilidadFun::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpIncompatibilidadFun::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_incompatibilidad_fun.if_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpIncompatibilidadFun::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpIncompatibilidadFun::query();
		$record = $query->findOrFail($rec_id, TblMpIncompatibilidadFun::viewFields());
		return $this->renderView("pages.tblmpincompatibilidadfun.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmpincompatibilidadfun.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpIncompatibilidadFunAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpIncompatibilidadFun record
		$record = TblMpIncompatibilidadFun::create($modeldata);
		$rec_id = $record->if_id;
		return $this->redirect("tblmpincompatibilidadfun", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpIncompatibilidadFunEditRequest $request, $rec_id = null){
		$query = TblMpIncompatibilidadFun::query();
		$record = $query->findOrFail($rec_id, TblMpIncompatibilidadFun::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmpincompatibilidadfun", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmpincompatibilidadfun.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpIncompatibilidadFun::query();
		$query->whereIn("if_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

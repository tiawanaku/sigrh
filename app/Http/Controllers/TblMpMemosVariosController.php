<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpMemosVariosAddRequest;
use App\Http\Requests\TblMpMemosVariosEditRequest;
use App\Models\TblMpMemosVarios;
use Illuminate\Http\Request;
use Exception;
class TblMpMemosVariosController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpmemosvarios.list";
		$query = TblMpMemosVarios::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpMemosVarios::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_memos_varios.mv_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpMemosVarios::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpMemosVarios::query();
		$record = $query->findOrFail($rec_id, TblMpMemosVarios::viewFields());
		return $this->renderView("pages.tblmpmemosvarios.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmpmemosvarios.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpMemosVariosAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpMemosVarios record
		$record = TblMpMemosVarios::create($modeldata);
		$rec_id = $record->mv_id;
		return $this->redirect("tblmpmemosvarios", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpMemosVariosEditRequest $request, $rec_id = null){
		$query = TblMpMemosVarios::query();
		$record = $query->findOrFail($rec_id, TblMpMemosVarios::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmpmemosvarios", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmpmemosvarios.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpMemosVarios::query();
		$query->whereIn("mv_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

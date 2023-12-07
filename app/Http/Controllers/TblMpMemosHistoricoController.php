<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpMemosHistoricoAddRequest;
use App\Http\Requests\TblMpMemosHistoricoEditRequest;
use App\Models\TblMpMemosHistorico;
use Illuminate\Http\Request;
use Exception;
class TblMpMemosHistoricoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpmemoshistorico.list";
		$query = TblMpMemosHistorico::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpMemosHistorico::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_memos_historico.mh_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpMemosHistorico::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpMemosHistorico::query();
		$record = $query->findOrFail($rec_id, TblMpMemosHistorico::viewFields());
		return $this->renderView("pages.tblmpmemoshistorico.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmpmemoshistorico.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpMemosHistoricoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpMemosHistorico record
		$record = TblMpMemosHistorico::create($modeldata);
		$rec_id = $record->mh_id;
		return $this->redirect("tblmpmemoshistorico", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpMemosHistoricoEditRequest $request, $rec_id = null){
		$query = TblMpMemosHistorico::query();
		$record = $query->findOrFail($rec_id, TblMpMemosHistorico::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmpmemoshistorico", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmpmemoshistorico.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpMemosHistorico::query();
		$query->whereIn("mh_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

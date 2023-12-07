<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblBsAgenteInvolucradoAddRequest;
use App\Http\Requests\TblBsAgenteInvolucradoEditRequest;
use App\Models\TblBsAgenteInvolucrado;
use Illuminate\Http\Request;
use Exception;
class TblBsAgenteInvolucradoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblbsagenteinvolucrado.list";
		$query = TblBsAgenteInvolucrado::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblBsAgenteInvolucrado::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_bs_agente_involucrado.aginvexpre_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblBsAgenteInvolucrado::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblBsAgenteInvolucrado::query();
		$record = $query->findOrFail($rec_id, TblBsAgenteInvolucrado::viewFields());
		return $this->renderView("pages.tblbsagenteinvolucrado.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblbsagenteinvolucrado.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblBsAgenteInvolucradoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblBsAgenteInvolucrado record
		$record = TblBsAgenteInvolucrado::create($modeldata);
		$rec_id = $record->aginvexpre_id;
		return $this->redirect("tblbsagenteinvolucrado", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblBsAgenteInvolucradoEditRequest $request, $rec_id = null){
		$query = TblBsAgenteInvolucrado::query();
		$record = $query->findOrFail($rec_id, TblBsAgenteInvolucrado::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblbsagenteinvolucrado", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblbsagenteinvolucrado.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblBsAgenteInvolucrado::query();
		$query->whereIn("aginvexpre_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpCargoAddRequest;
use App\Http\Requests\TblMpCargoEditRequest;
use App\Models\TblMpCargo;
use Illuminate\Http\Request;
use Exception;
class TblMpCargoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpcargo.list";
		$query = TblMpCargo::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpCargo::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_cargo.ca_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpCargo::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpCargo::query();
		$record = $query->findOrFail($rec_id, TblMpCargo::viewFields());
		return $this->renderView("pages.tblmpcargo.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmpcargo.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpCargoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpCargo record
		$record = TblMpCargo::create($modeldata);
		$rec_id = $record->ca_id;
		return $this->redirect("tblmpcargo", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpCargoEditRequest $request, $rec_id = null){
		$query = TblMpCargo::query();
		$record = $query->findOrFail($rec_id, TblMpCargo::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmpcargo", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmpcargo.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpCargo::query();
		$query->whereIn("ca_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

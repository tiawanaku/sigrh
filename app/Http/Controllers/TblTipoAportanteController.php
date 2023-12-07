<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblTipoAportanteAddRequest;
use App\Http\Requests\TblTipoAportanteEditRequest;
use App\Models\TblTipoAportante;
use Illuminate\Http\Request;
use Exception;
class TblTipoAportanteController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tbltipoaportante.list";
		$query = TblTipoAportante::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblTipoAportante::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_tipo_aportante.ta_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblTipoAportante::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblTipoAportante::query();
		$record = $query->findOrFail($rec_id, TblTipoAportante::viewFields());
		return $this->renderView("pages.tbltipoaportante.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tbltipoaportante.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblTipoAportanteAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblTipoAportante record
		$record = TblTipoAportante::create($modeldata);
		$rec_id = $record->ta_id;
		return $this->redirect("tbltipoaportante", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblTipoAportanteEditRequest $request, $rec_id = null){
		$query = TblTipoAportante::query();
		$record = $query->findOrFail($rec_id, TblTipoAportante::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tbltipoaportante", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tbltipoaportante.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblTipoAportante::query();
		$query->whereIn("ta_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

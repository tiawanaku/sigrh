<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblTipoSancionAddRequest;
use App\Http\Requests\TblTipoSancionEditRequest;
use App\Models\TblTipoSancion;
use Illuminate\Http\Request;
use Exception;
class TblTipoSancionController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tbltiposancion.list";
		$query = TblTipoSancion::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblTipoSancion::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_tipo_sancion.ts_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblTipoSancion::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblTipoSancion::query();
		$record = $query->findOrFail($rec_id, TblTipoSancion::viewFields());
		return $this->renderView("pages.tbltiposancion.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tbltiposancion.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblTipoSancionAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblTipoSancion record
		$record = TblTipoSancion::create($modeldata);
		$rec_id = $record->ts_id;
		return $this->redirect("tbltiposancion", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblTipoSancionEditRequest $request, $rec_id = null){
		$query = TblTipoSancion::query();
		$record = $query->findOrFail($rec_id, TblTipoSancion::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tbltiposancion", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tbltiposancion.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblTipoSancion::query();
		$query->whereIn("ts_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

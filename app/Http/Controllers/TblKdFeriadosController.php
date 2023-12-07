<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblKdFeriadosAddRequest;
use App\Http\Requests\TblKdFeriadosEditRequest;
use App\Models\TblKdFeriados;
use Illuminate\Http\Request;
use Exception;
class TblKdFeriadosController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblkdferiados.list";
		$query = TblKdFeriados::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblKdFeriados::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_kd_feriados.fe_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblKdFeriados::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblKdFeriados::query();
		$record = $query->findOrFail($rec_id, TblKdFeriados::viewFields());
		return $this->renderView("pages.tblkdferiados.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblkdferiados.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblKdFeriadosAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblKdFeriados record
		$record = TblKdFeriados::create($modeldata);
		$rec_id = $record->fe_id;
		return $this->redirect("tblkdferiados", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblKdFeriadosEditRequest $request, $rec_id = null){
		$query = TblKdFeriados::query();
		$record = $query->findOrFail($rec_id, TblKdFeriados::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblkdferiados", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblkdferiados.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblKdFeriados::query();
		$query->whereIn("fe_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblCpCierreMensualAddRequest;
use App\Http\Requests\TblCpCierreMensualEditRequest;
use App\Models\TblCpCierreMensual;
use Illuminate\Http\Request;
use Exception;
class TblCpCierreMensualController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblcpcierremensual.list";
		$query = TblCpCierreMensual::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblCpCierreMensual::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_cp_cierre_mensual.cm_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblCpCierreMensual::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblCpCierreMensual::query();
		$record = $query->findOrFail($rec_id, TblCpCierreMensual::viewFields());
		return $this->renderView("pages.tblcpcierremensual.view", ["data" => $record]);
	}
	

	/**
     * Display Master Detail Pages
	 * @param string $rec_id //master record id
     * @return \Illuminate\View\View
     */
	function masterDetail($rec_id = null){
		return View("pages.tblcpcierremensual.detail-pages", ["masterRecordId" => $rec_id]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblcpcierremensual.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblCpCierreMensualAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblCpCierreMensual record
		$record = TblCpCierreMensual::create($modeldata);
		$rec_id = $record->cm_id;
		return $this->redirect("tblcpcierremensual", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblCpCierreMensualEditRequest $request, $rec_id = null){
		$query = TblCpCierreMensual::query();
		$record = $query->findOrFail($rec_id, TblCpCierreMensual::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblcpcierremensual", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblcpcierremensual.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblCpCierreMensual::query();
		$query->whereIn("cm_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

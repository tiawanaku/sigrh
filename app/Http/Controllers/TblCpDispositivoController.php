<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblCpDispositivoAddRequest;
use App\Http\Requests\TblCpDispositivoEditRequest;
use App\Models\TblCpDispositivo;
use Illuminate\Http\Request;
use Exception;
class TblCpDispositivoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblcpdispositivo.list";
		$query = TblCpDispositivo::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblCpDispositivo::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_cp_dispositivo.di_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblCpDispositivo::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblCpDispositivo::query();
		$record = $query->findOrFail($rec_id, TblCpDispositivo::viewFields());
		return $this->renderView("pages.tblcpdispositivo.view", ["data" => $record]);
	}
	

	/**
     * Display Master Detail Pages
	 * @param string $rec_id //master record id
     * @return \Illuminate\View\View
     */
	function masterDetail($rec_id = null){
		return View("pages.tblcpdispositivo.detail-pages", ["masterRecordId" => $rec_id]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblcpdispositivo.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblCpDispositivoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblCpDispositivo record
		$record = TblCpDispositivo::create($modeldata);
		$rec_id = $record->di_id;
		return $this->redirect("tblcpdispositivo", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblCpDispositivoEditRequest $request, $rec_id = null){
		$query = TblCpDispositivo::query();
		$record = $query->findOrFail($rec_id, TblCpDispositivo::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblcpdispositivo", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblcpdispositivo.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblCpDispositivo::query();
		$query->whereIn("di_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

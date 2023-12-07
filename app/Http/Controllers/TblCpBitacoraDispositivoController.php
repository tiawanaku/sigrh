<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblCpBitacoraDispositivoAddRequest;
use App\Http\Requests\TblCpBitacoraDispositivoEditRequest;
use App\Models\TblCpBitacoraDispositivo;
use Illuminate\Http\Request;
use Exception;
class TblCpBitacoraDispositivoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblcpbitacoradispositivo.list";
		$query = TblCpBitacoraDispositivo::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblCpBitacoraDispositivo::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_cp_bitacora_dispositivo.bd_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblCpBitacoraDispositivo::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblCpBitacoraDispositivo::query();
		$record = $query->findOrFail($rec_id, TblCpBitacoraDispositivo::viewFields());
		return $this->renderView("pages.tblcpbitacoradispositivo.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblcpbitacoradispositivo.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblCpBitacoraDispositivoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblCpBitacoraDispositivo record
		$record = TblCpBitacoraDispositivo::create($modeldata);
		$rec_id = $record->bd_id;
		return $this->redirect("tblcpbitacoradispositivo", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblCpBitacoraDispositivoEditRequest $request, $rec_id = null){
		$query = TblCpBitacoraDispositivo::query();
		$record = $query->findOrFail($rec_id, TblCpBitacoraDispositivo::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblcpbitacoradispositivo", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblcpbitacoradispositivo.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblCpBitacoraDispositivo::query();
		$query->whereIn("bd_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

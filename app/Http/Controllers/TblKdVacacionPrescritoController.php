<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblKdVacacionPrescritoAddRequest;
use App\Http\Requests\TblKdVacacionPrescritoEditRequest;
use App\Models\TblKdVacacionPrescrito;
use Illuminate\Http\Request;
use Exception;
class TblKdVacacionPrescritoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblkdvacacionprescrito.list";
		$query = TblKdVacacionPrescrito::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblKdVacacionPrescrito::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_kd_vacacion_prescrito.vpre_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblKdVacacionPrescrito::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblKdVacacionPrescrito::query();
		$record = $query->findOrFail($rec_id, TblKdVacacionPrescrito::viewFields());
		return $this->renderView("pages.tblkdvacacionprescrito.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblkdvacacionprescrito.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblKdVacacionPrescritoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblKdVacacionPrescrito record
		$record = TblKdVacacionPrescrito::create($modeldata);
		$rec_id = $record->vpre_id;
		return $this->redirect("tblkdvacacionprescrito", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblKdVacacionPrescritoEditRequest $request, $rec_id = null){
		$query = TblKdVacacionPrescrito::query();
		$record = $query->findOrFail($rec_id, TblKdVacacionPrescrito::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblkdvacacionprescrito", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblkdvacacionprescrito.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblKdVacacionPrescrito::query();
		$query->whereIn("vpre_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

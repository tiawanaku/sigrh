<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPlaSuplenciaAsistenciaAddRequest;
use App\Http\Requests\TblPlaSuplenciaAsistenciaEditRequest;
use App\Models\TblPlaSuplenciaAsistencia;
use Illuminate\Http\Request;
use Exception;
class TblPlaSuplenciaAsistenciaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblplasuplenciaasistencia.list";
		$query = TblPlaSuplenciaAsistencia::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPlaSuplenciaAsistencia::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_pla_suplencia_asistencia.plasupasist_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPlaSuplenciaAsistencia::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPlaSuplenciaAsistencia::query();
		$record = $query->findOrFail($rec_id, TblPlaSuplenciaAsistencia::viewFields());
		return $this->renderView("pages.tblplasuplenciaasistencia.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblplasuplenciaasistencia.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPlaSuplenciaAsistenciaAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblPlaSuplenciaAsistencia record
		$record = TblPlaSuplenciaAsistencia::create($modeldata);
		$rec_id = $record->plasupasist_id;
		return $this->redirect("tblplasuplenciaasistencia", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPlaSuplenciaAsistenciaEditRequest $request, $rec_id = null){
		$query = TblPlaSuplenciaAsistencia::query();
		$record = $query->findOrFail($rec_id, TblPlaSuplenciaAsistencia::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblplasuplenciaasistencia", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblplasuplenciaasistencia.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPlaSuplenciaAsistencia::query();
		$query->whereIn("plasupasist_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

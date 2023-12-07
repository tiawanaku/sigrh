<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPsProccoactfiscAddRequest;
use App\Http\Requests\TblPsProccoactfiscEditRequest;
use App\Models\TblPsProccoactfisc;
use Illuminate\Http\Request;
use Exception;
class TblPsProccoactfiscController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpsproccoactfisc.list";
		$query = TblPsProccoactfisc::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPsProccoactfisc::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_ps_proccoactfisc.pca_id_proccoactfisc";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPsProccoactfisc::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPsProccoactfisc::query();
		$record = $query->findOrFail($rec_id, TblPsProccoactfisc::viewFields());
		return $this->renderView("pages.tblpsproccoactfisc.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblpsproccoactfisc.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPsProccoactfiscAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblPsProccoactfisc record
		$record = TblPsProccoactfisc::create($modeldata);
		$rec_id = $record->pca_id_proccoactfisc;
		return $this->redirect("tblpsproccoactfisc", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPsProccoactfiscEditRequest $request, $rec_id = null){
		$query = TblPsProccoactfisc::query();
		$record = $query->findOrFail($rec_id, TblPsProccoactfisc::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblpsproccoactfisc", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblpsproccoactfisc.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPsProccoactfisc::query();
		$query->whereIn("pca_id_proccoactfisc", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

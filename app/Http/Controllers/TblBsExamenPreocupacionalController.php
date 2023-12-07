<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblBsExamenPreocupacionalAddRequest;
use App\Http\Requests\TblBsExamenPreocupacionalEditRequest;
use App\Models\TblBsExamenPreocupacional;
use Illuminate\Http\Request;
use Exception;
class TblBsExamenPreocupacionalController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblbsexamenpreocupacional.list";
		$query = TblBsExamenPreocupacional::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblBsExamenPreocupacional::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_bs_examen_preocupacional.exp_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblBsExamenPreocupacional::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblBsExamenPreocupacional::query();
		$record = $query->findOrFail($rec_id, TblBsExamenPreocupacional::viewFields());
		return $this->renderView("pages.tblbsexamenpreocupacional.view", ["data" => $record]);
	}
	

	/**
     * Display Master Detail Pages
	 * @param string $rec_id //master record id
     * @return \Illuminate\View\View
     */
	function masterDetail($rec_id = null){
		return View("pages.tblbsexamenpreocupacional.detail-pages", ["masterRecordId" => $rec_id]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblbsexamenpreocupacional.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblBsExamenPreocupacionalAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblBsExamenPreocupacional record
		$record = TblBsExamenPreocupacional::create($modeldata);
		$rec_id = $record->exp_id;
		return $this->redirect("tblbsexamenpreocupacional", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblBsExamenPreocupacionalEditRequest $request, $rec_id = null){
		$query = TblBsExamenPreocupacional::query();
		$record = $query->findOrFail($rec_id, TblBsExamenPreocupacional::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblbsexamenpreocupacional", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblbsexamenpreocupacional.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblBsExamenPreocupacional::query();
		$query->whereIn("exp_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpEcategProgItemAddRequest;
use App\Http\Requests\TblMpEcategProgItemEditRequest;
use App\Models\TblMpEcategProgItem;
use Illuminate\Http\Request;
use Exception;
class TblMpEcategProgItemController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpecategprogitem.list";
		$query = TblMpEcategProgItem::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpEcategProgItem::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_ecateg_prog_item.eoi_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpEcategProgItem::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpEcategProgItem::query();
		$record = $query->findOrFail($rec_id, TblMpEcategProgItem::viewFields());
		return $this->renderView("pages.tblmpecategprogitem.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmpecategprogitem.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpEcategProgItemAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpEcategProgItem record
		$record = TblMpEcategProgItem::create($modeldata);
		$rec_id = $record->eoi_id;
		return $this->redirect("tblmpecategprogitem", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpEcategProgItemEditRequest $request, $rec_id = null){
		$query = TblMpEcategProgItem::query();
		$record = $query->findOrFail($rec_id, TblMpEcategProgItem::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmpecategprogitem", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmpecategprogitem.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpEcategProgItem::query();
		$query->whereIn("eoi_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

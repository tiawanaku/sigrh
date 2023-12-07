<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpTipoItemAddRequest;
use App\Http\Requests\TblMpTipoItemEditRequest;
use App\Models\TblMpTipoItem;
use Illuminate\Http\Request;
use Exception;
class TblMpTipoItemController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmptipoitem.list";
		$query = TblMpTipoItem::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpTipoItem::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_tipo_item.ti_item";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpTipoItem::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpTipoItem::query();
		$record = $query->findOrFail($rec_id, TblMpTipoItem::viewFields());
		return $this->renderView("pages.tblmptipoitem.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmptipoitem.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpTipoItemAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpTipoItem record
		$record = TblMpTipoItem::create($modeldata);
		$rec_id = $record->ti_item;
		return $this->redirect("tblmptipoitem", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpTipoItemEditRequest $request, $rec_id = null){
		$query = TblMpTipoItem::query();
		$record = $query->findOrFail($rec_id, TblMpTipoItem::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmptipoitem", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmptipoitem.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpTipoItem::query();
		$query->whereIn("ti_item", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

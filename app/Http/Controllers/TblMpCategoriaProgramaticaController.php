<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpCategoriaProgramaticaAddRequest;
use App\Http\Requests\TblMpCategoriaProgramaticaEditRequest;
use App\Models\TblMpCategoriaProgramatica;
use Illuminate\Http\Request;
use Exception;
class TblMpCategoriaProgramaticaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpcategoriaprogramatica.list";
		$query = TblMpCategoriaProgramatica::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpCategoriaProgramatica::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_categoria_programatica.cp_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpCategoriaProgramatica::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblMpCategoriaProgramatica::query();
		$record = $query->findOrFail($rec_id, TblMpCategoriaProgramatica::viewFields());
		return $this->renderView("pages.tblmpcategoriaprogramatica.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblmpcategoriaprogramatica.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblMpCategoriaProgramaticaAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblMpCategoriaProgramatica record
		$record = TblMpCategoriaProgramatica::create($modeldata);
		$rec_id = $record->cp_id;
		return $this->redirect("tblmpcategoriaprogramatica", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblMpCategoriaProgramaticaEditRequest $request, $rec_id = null){
		$query = TblMpCategoriaProgramatica::query();
		$record = $query->findOrFail($rec_id, TblMpCategoriaProgramatica::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblmpcategoriaprogramatica", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblmpcategoriaprogramatica.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblMpCategoriaProgramatica::query();
		$query->whereIn("cp_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPersonaFotoAddRequest;
use App\Http\Requests\TblPersonaFotoEditRequest;
use App\Models\TblPersonaFoto;
use Illuminate\Http\Request;
use Exception;
class TblPersonaFotoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpersonafoto.list";
		$query = TblPersonaFoto::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPersonaFoto::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_persona_foto.fp_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPersonaFoto::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblPersonaFoto::query();
		$record = $query->findOrFail($rec_id, TblPersonaFoto::viewFields());
		return $this->renderView("pages.tblpersonafoto.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblpersonafoto.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblPersonaFotoAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("fp_foto", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['fp_foto'], "fp_foto");
			$modeldata['fp_foto'] = $fileInfo['filepath'];
		}
		
		//save TblPersonaFoto record
		$record = TblPersonaFoto::create($modeldata);
		$rec_id = $record->fp_id;
		return $this->redirect("tblpersonafoto", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblPersonaFotoEditRequest $request, $rec_id = null){
		$query = TblPersonaFoto::query();
		$record = $query->findOrFail($rec_id, TblPersonaFoto::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("fp_foto", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['fp_foto'], "fp_foto");
			$modeldata['fp_foto'] = $fileInfo['filepath'];
		}
			$record->update($modeldata);
			return $this->redirect("tblpersonafoto", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblpersonafoto.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblPersonaFoto::query();
		$query->whereIn("fp_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

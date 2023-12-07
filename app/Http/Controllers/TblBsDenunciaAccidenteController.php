<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblBsDenunciaAccidenteAddRequest;
use App\Http\Requests\TblBsDenunciaAccidenteEditRequest;
use App\Models\TblBsDenunciaAccidente;
use Illuminate\Http\Request;
use Exception;
class TblBsDenunciaAccidenteController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblbsdenunciaaccidente.list";
		$query = TblBsDenunciaAccidente::query();
		$limit = $request->limit ?? 10;
		$this->beforeList($fieldname, $fieldvalue);
		if($request->search){
			$search = trim($request->search);
			TblBsDenunciaAccidente::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_bs_denuncia_accidente.denacc_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblBsDenunciaAccidente::listFields());
		return $this->renderView($view, compact("records"));
	}
    /**
     * Before page list record
     * @param string $fieldname //filter records by table field
     * @param string $fieldvalue //filter value
     */
    private function beforeList($fieldname = null, $fieldvalue = null){
        //enter statement here
    }
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TblBsDenunciaAccidente::query();
		$record = $query->findOrFail($rec_id, TblBsDenunciaAccidente::viewFields());
		return $this->renderView("pages.tblbsdenunciaaccidente.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.tblbsdenunciaaccidente.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(TblBsDenunciaAccidenteAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save TblBsDenunciaAccidente record
		$record = TblBsDenunciaAccidente::create($modeldata);
		$rec_id = $record->denacc_id;
		return $this->redirect("tblbsdenunciaaccidente", "Grabar agregado exitosamente");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TblBsDenunciaAccidenteEditRequest $request, $rec_id = null){
		$query = TblBsDenunciaAccidente::query();
		$record = $query->findOrFail($rec_id, TblBsDenunciaAccidente::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("tblbsdenunciaaccidente", "Registro actualizado con éxito");
		}
		return $this->renderView("pages.tblbsdenunciaaccidente.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = TblBsDenunciaAccidente::query();
		$query->whereIn("denacc_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Grabar eliminado con éxito");
	}
}

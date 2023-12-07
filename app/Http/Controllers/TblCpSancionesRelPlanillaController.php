<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblCpSancionesRelPlanillaAddRequest;
use App\Models\TblCpSancionesRelPlanilla;
use Illuminate\Http\Request;
use Exception;
class TblCpSancionesRelPlanillaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblcpsancionesrelplanilla.list";
		$query = TblCpSancionesRelPlanilla::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblCpSancionesRelPlanilla::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_cp_sanciones_rel_planilla.src_sa_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblCpSancionesRelPlanilla::listFields());
		return $this->renderView($view, compact("records"));
	}
}

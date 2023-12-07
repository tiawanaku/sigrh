<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpPuestoAddRequest;
use App\Models\TblMpPuesto;
use Illuminate\Http\Request;
use Exception;
class TblMpPuestoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmppuesto.list";
		$query = TblMpPuesto::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpPuesto::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_puesto.pu_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpPuesto::listFields());
		return $this->renderView($view, compact("records"));
	}
}

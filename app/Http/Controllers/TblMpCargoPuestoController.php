<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblMpCargoPuestoAddRequest;
use App\Models\TblMpCargoPuesto;
use Illuminate\Http\Request;
use Exception;
class TblMpCargoPuestoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblmpcargopuesto.list";
		$query = TblMpCargoPuesto::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblMpCargoPuesto::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_mp_cargo_puesto.cap_ca_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblMpCargoPuesto::listFields());
		return $this->renderView($view, compact("records"));
	}
}

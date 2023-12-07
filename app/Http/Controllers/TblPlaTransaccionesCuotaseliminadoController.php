<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPlaTransaccionesCuotaseliminadoAddRequest;
use App\Models\TblPlaTransaccionesCuotaseliminado;
use Illuminate\Http\Request;
use Exception;
class TblPlaTransaccionesCuotaseliminadoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblplatransaccionescuotaseliminado.list";
		$query = TblPlaTransaccionesCuotaseliminado::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPlaTransaccionesCuotaseliminado::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_pla_transacciones_cuotaseliminado.tc_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPlaTransaccionesCuotaseliminado::listFields());
		return $this->renderView($view, compact("records"));
	}
}

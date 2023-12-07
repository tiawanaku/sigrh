<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPcMpAsignacionRelPcPrecontratadoAddRequest;
use App\Models\TblPcMpAsignacionRelPcPrecontratado;
use Illuminate\Http\Request;
use Exception;
class TblPcMpAsignacionRelPcPrecontratadoController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpcmpasignacionrelpcprecontratado.list";
		$query = TblPcMpAsignacionRelPcPrecontratado::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPcMpAsignacionRelPcPrecontratado::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_pc_mp_asignacion_rel_pc_precontratado.rap_as_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPcMpAsignacionRelPcPrecontratado::listFields());
		return $this->renderView($view, compact("records"));
	}
}

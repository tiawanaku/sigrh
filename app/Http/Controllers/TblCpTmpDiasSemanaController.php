<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblCpTmpDiasSemanaAddRequest;
use App\Models\TblCpTmpDiasSemana;
use Illuminate\Http\Request;
use Exception;
class TblCpTmpDiasSemanaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblcptmpdiassemana.list";
		$query = TblCpTmpDiasSemana::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblCpTmpDiasSemana::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_cp_tmp_dias_semana.tds_per_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblCpTmpDiasSemana::listFields());
		return $this->renderView($view, compact("records"));
	}
}

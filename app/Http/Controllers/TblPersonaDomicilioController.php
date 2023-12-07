<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblPersonaDomicilioAddRequest;
use App\Models\TblPersonaDomicilio;
use Illuminate\Http\Request;
use Exception;
class TblPersonaDomicilioController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblpersonadomicilio.list";
		$query = TblPersonaDomicilio::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblPersonaDomicilio::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_persona_domicilio.perd_per_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblPersonaDomicilio::listFields());
		return $this->renderView($view, compact("records"));
	}
}

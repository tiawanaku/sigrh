<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SgSecuencialAddRequest;
use App\Models\SgSecuencial;
use Illuminate\Http\Request;
use Exception;
class SgSecuencialController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.sgsecuencial.list";
		$query = SgSecuencial::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			SgSecuencial::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "sg_secuencial.se_tabla";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, SgSecuencial::listFields());
		return $this->renderView($view, compact("records"));
	}
}

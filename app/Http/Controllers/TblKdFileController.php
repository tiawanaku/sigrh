<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TblKdFileAddRequest;
use App\Models\TblKdFile;
use Illuminate\Http\Request;
use Exception;
class TblKdFileController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.tblkdfile.list";
		$query = TblKdFile::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			TblKdFile::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "tbl_kd_file.file_id_cod";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, TblKdFile::listFields());
		return $this->renderView($view, compact("records"));
	}
}

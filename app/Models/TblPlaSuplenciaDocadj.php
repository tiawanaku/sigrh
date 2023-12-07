<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaSuplenciaDocadj extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_suplencia_docadj';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'plasupdocadj_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'plasupdocadj_id','plasupdocadj_plasup_id','plasupdocadj_doc','plasupdocadj_estado'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				CAST(plasupdocadj_id AS TEXT) LIKE ?  OR 
				plasupdocadj_doc LIKE ?  OR 
				plasupdocadj_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"plasupdocadj_id",
			"plasupdocadj_plasup_id",
			"plasupdocadj_doc",
			"plasupdocadj_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"plasupdocadj_id",
			"plasupdocadj_plasup_id",
			"plasupdocadj_doc",
			"plasupdocadj_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"plasupdocadj_id",
			"plasupdocadj_plasup_id",
			"plasupdocadj_doc",
			"plasupdocadj_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"plasupdocadj_id",
			"plasupdocadj_plasup_id",
			"plasupdocadj_doc",
			"plasupdocadj_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"plasupdocadj_id",
			"plasupdocadj_plasup_id",
			"plasupdocadj_doc",
			"plasupdocadj_estado" 
		];
	}
}

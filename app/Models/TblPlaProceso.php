<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaProceso extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_proceso';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'pc_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pc_id','pc_pr_id','pc_titulo','pc_fecha_inicio','pc_fecha_fin','pc_mn_id','pc_ufv','pc_ufv_fecha','pc_estado','pc_prefijo'
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
				CAST(pc_id AS TEXT) LIKE ?  OR 
				pc_titulo LIKE ?  OR 
				pc_estado LIKE ?  OR 
				pc_prefijo LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"pc_id",
			"pc_pr_id",
			"pc_titulo",
			"pc_fecha_inicio",
			"pc_fecha_fin",
			"pc_mn_id",
			"pc_ufv",
			"pc_ufv_fecha",
			"pc_estado",
			"pc_prefijo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"pc_id",
			"pc_pr_id",
			"pc_titulo",
			"pc_fecha_inicio",
			"pc_fecha_fin",
			"pc_mn_id",
			"pc_ufv",
			"pc_ufv_fecha",
			"pc_estado",
			"pc_prefijo" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"pc_id",
			"pc_pr_id",
			"pc_titulo",
			"pc_fecha_inicio",
			"pc_fecha_fin",
			"pc_mn_id",
			"pc_ufv",
			"pc_ufv_fecha",
			"pc_estado",
			"pc_prefijo" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"pc_id",
			"pc_pr_id",
			"pc_titulo",
			"pc_fecha_inicio",
			"pc_fecha_fin",
			"pc_mn_id",
			"pc_ufv",
			"pc_ufv_fecha",
			"pc_estado",
			"pc_prefijo" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"pc_id",
			"pc_pr_id",
			"pc_titulo",
			"pc_fecha_inicio",
			"pc_fecha_fin",
			"pc_mn_id",
			"pc_ufv",
			"pc_ufv_fecha",
			"pc_estado",
			"pc_prefijo" 
		];
	}
}

<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpMarcaciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_marcaciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ma_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ma_id','ma_per_id','ma_fecha','ma_di_id','ma_hora','ma_estado','ma_tipo'
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
				CAST(ma_id AS TEXT) LIKE ?  OR 
				ma_estado LIKE ?  OR 
				ma_tipo LIKE ? 
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
			"ma_id",
			"ma_per_id",
			"ma_fecha",
			"ma_di_id",
			"ma_hora",
			"ma_estado",
			"ma_tipo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ma_id",
			"ma_per_id",
			"ma_fecha",
			"ma_di_id",
			"ma_hora",
			"ma_estado",
			"ma_tipo" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ma_id",
			"ma_per_id",
			"ma_fecha",
			"ma_di_id",
			"ma_hora",
			"ma_estado",
			"ma_tipo" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ma_id",
			"ma_per_id",
			"ma_fecha",
			"ma_di_id",
			"ma_hora",
			"ma_estado",
			"ma_tipo" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ma_id",
			"ma_per_id",
			"ma_fecha",
			"ma_di_id",
			"ma_hora",
			"ma_estado",
			"ma_tipo" 
		];
	}
}

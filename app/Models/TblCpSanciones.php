<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpSanciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_sanciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'sa_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'sa_id','sa_per_id','sa_factor','sa_minutos','sa_fecha_inicio','sa_fecha_fin','sa_tipo_sancion','sa_dias_sancion','sa_estado'
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
				CAST(sa_id AS TEXT) LIKE ?  OR 
				sa_tipo_sancion LIKE ?  OR 
				sa_estado LIKE ? 
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
			"sa_id",
			"sa_per_id",
			"sa_factor",
			"sa_minutos",
			"sa_fecha_inicio",
			"sa_fecha_fin",
			"sa_tipo_sancion",
			"sa_dias_sancion",
			"sa_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"sa_id",
			"sa_per_id",
			"sa_factor",
			"sa_minutos",
			"sa_fecha_inicio",
			"sa_fecha_fin",
			"sa_tipo_sancion",
			"sa_dias_sancion",
			"sa_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"sa_id",
			"sa_per_id",
			"sa_factor",
			"sa_minutos",
			"sa_fecha_inicio",
			"sa_fecha_fin",
			"sa_tipo_sancion",
			"sa_dias_sancion",
			"sa_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"sa_id",
			"sa_per_id",
			"sa_factor",
			"sa_minutos",
			"sa_fecha_inicio",
			"sa_fecha_fin",
			"sa_tipo_sancion",
			"sa_dias_sancion",
			"sa_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"sa_id",
			"sa_per_id",
			"sa_factor",
			"sa_minutos",
			"sa_fecha_inicio",
			"sa_fecha_fin",
			"sa_tipo_sancion",
			"sa_dias_sancion",
			"sa_estado" 
		];
	}
}

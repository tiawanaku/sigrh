<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaTransacciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_transacciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'tr_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'tr_pc_id','tr_per_id','tr_fa_id','tr_fecha_inicio','tr_fecha_fin','tr_monto','tr_estado','tr_usuario_creacion','tr_fecha_creacion'
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
				CAST(tr_id AS TEXT) LIKE ?  OR 
				tr_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%"
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
			"tr_id",
			"tr_pc_id",
			"tr_per_id",
			"tr_fa_id",
			"tr_fecha_inicio",
			"tr_fecha_fin",
			"tr_monto",
			"tr_estado",
			"tr_usuario_creacion",
			"tr_fecha_creacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"tr_id",
			"tr_pc_id",
			"tr_per_id",
			"tr_fa_id",
			"tr_fecha_inicio",
			"tr_fecha_fin",
			"tr_monto",
			"tr_estado",
			"tr_usuario_creacion",
			"tr_fecha_creacion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"tr_id",
			"tr_pc_id",
			"tr_per_id",
			"tr_fa_id",
			"tr_fecha_inicio",
			"tr_fecha_fin",
			"tr_monto",
			"tr_estado",
			"tr_usuario_creacion",
			"tr_fecha_creacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"tr_id",
			"tr_pc_id",
			"tr_per_id",
			"tr_fa_id",
			"tr_fecha_inicio",
			"tr_fecha_fin",
			"tr_monto",
			"tr_estado",
			"tr_usuario_creacion",
			"tr_fecha_creacion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"tr_id",
			"tr_pc_id",
			"tr_per_id",
			"tr_fa_id",
			"tr_fecha_inicio",
			"tr_fecha_fin",
			"tr_monto",
			"tr_estado",
			"tr_usuario_creacion",
			"tr_fecha_creacion" 
		];
	}
}

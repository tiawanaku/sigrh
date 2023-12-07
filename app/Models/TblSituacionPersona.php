<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblSituacionPersona extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_situacion_persona';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'st_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'st_id','st_per_id','st_tipo_situacion','st_fecha_inicio','st_fecha_fin','st_estado','st_usuario_creacion','st_fecha_creacion'
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
				CAST(st_id AS TEXT) LIKE ?  OR 
				st_tipo_situacion LIKE ?  OR 
				st_estado LIKE ? 
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
			"st_id",
			"st_per_id",
			"st_tipo_situacion",
			"st_fecha_inicio",
			"st_fecha_fin",
			"st_estado",
			"st_usuario_creacion",
			"st_fecha_creacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"st_id",
			"st_per_id",
			"st_tipo_situacion",
			"st_fecha_inicio",
			"st_fecha_fin",
			"st_estado",
			"st_usuario_creacion",
			"st_fecha_creacion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"st_id",
			"st_per_id",
			"st_tipo_situacion",
			"st_fecha_inicio",
			"st_fecha_fin",
			"st_estado",
			"st_usuario_creacion",
			"st_fecha_creacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"st_id",
			"st_per_id",
			"st_tipo_situacion",
			"st_fecha_inicio",
			"st_fecha_fin",
			"st_estado",
			"st_usuario_creacion",
			"st_fecha_creacion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"st_id",
			"st_per_id",
			"st_tipo_situacion",
			"st_fecha_inicio",
			"st_fecha_fin",
			"st_estado",
			"st_usuario_creacion",
			"st_fecha_creacion" 
		];
	}
}

<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpLicenciaJustificada extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_licencia_justificada';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'lj_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'lj_per_id','lj_tipo_licencia','lj_fecha_inicial','lj_fecha_final','lj_fecha_emision','lj_hora_salida','lj_hora_retorno','lj_motivo','lj_lugar','lj_per_id_autoriza','lj_estado'
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
				CAST(lj_id AS TEXT) LIKE ?  OR 
				lj_motivo LIKE ?  OR 
				lj_lugar LIKE ?  OR 
				lj_per_id_autoriza LIKE ?  OR 
				lj_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"lj_id",
			"lj_per_id",
			"lj_tipo_licencia",
			"lj_fecha_inicial",
			"lj_fecha_final",
			"lj_fecha_emision",
			"lj_hora_salida",
			"lj_hora_retorno",
			"lj_motivo",
			"lj_lugar",
			"lj_per_id_autoriza",
			"lj_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"lj_id",
			"lj_per_id",
			"lj_tipo_licencia",
			"lj_fecha_inicial",
			"lj_fecha_final",
			"lj_fecha_emision",
			"lj_hora_salida",
			"lj_hora_retorno",
			"lj_motivo",
			"lj_lugar",
			"lj_per_id_autoriza",
			"lj_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"lj_id",
			"lj_per_id",
			"lj_tipo_licencia",
			"lj_fecha_inicial",
			"lj_fecha_final",
			"lj_fecha_emision",
			"lj_hora_salida",
			"lj_hora_retorno",
			"lj_motivo",
			"lj_lugar",
			"lj_per_id_autoriza",
			"lj_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"lj_id",
			"lj_per_id",
			"lj_tipo_licencia",
			"lj_fecha_inicial",
			"lj_fecha_final",
			"lj_fecha_emision",
			"lj_hora_salida",
			"lj_hora_retorno",
			"lj_motivo",
			"lj_lugar",
			"lj_per_id_autoriza",
			"lj_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"lj_id",
			"lj_per_id",
			"lj_tipo_licencia",
			"lj_fecha_inicial",
			"lj_fecha_final",
			"lj_fecha_emision",
			"lj_hora_salida",
			"lj_hora_retorno",
			"lj_motivo",
			"lj_lugar",
			"lj_per_id_autoriza",
			"lj_estado" 
		];
	}
}

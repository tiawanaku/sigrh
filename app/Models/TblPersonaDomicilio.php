<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPersonaDomicilio extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_persona_domicilio';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = '';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'perd_per_id','perd_ciudad_residencia','perd_zona','perd_tipo_via','perd_descripcion_via','perd_numero','perd_edificio','perd_bloque','perd_piso','perd_dpto','perd_telefono','perd_celular','perd_email_trabajo','perd_email_personal','perd_fam_emergencia','perd_dir_emergencia','perd_tel_emergencia','perd_coordenadas','perd_estado','perd_usuario_creacion','perd_fecha_creacion'
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
				CAST(perd_id AS TEXT) LIKE ?  OR 
				perd_descripcion_via LIKE ?  OR 
				perd_numero LIKE ?  OR 
				perd_edificio LIKE ?  OR 
				perd_bloque LIKE ?  OR 
				perd_piso LIKE ?  OR 
				perd_dpto LIKE ?  OR 
				perd_telefono LIKE ?  OR 
				perd_celular LIKE ?  OR 
				perd_email_trabajo LIKE ?  OR 
				perd_email_personal LIKE ?  OR 
				perd_fam_emergencia LIKE ?  OR 
				perd_dir_emergencia LIKE ?  OR 
				perd_tel_emergencia LIKE ?  OR 
				perd_coordenadas LIKE ?  OR 
				perd_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"perd_id",
			"perd_per_id",
			"perd_ciudad_residencia",
			"perd_zona",
			"perd_tipo_via",
			"perd_descripcion_via",
			"perd_numero",
			"perd_edificio",
			"perd_bloque",
			"perd_piso",
			"perd_dpto",
			"perd_telefono",
			"perd_celular",
			"perd_email_trabajo",
			"perd_email_personal",
			"perd_fam_emergencia",
			"perd_dir_emergencia",
			"perd_tel_emergencia",
			"perd_coordenadas",
			"perd_estado",
			"perd_usuario_creacion",
			"perd_fecha_creacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"perd_id",
			"perd_per_id",
			"perd_ciudad_residencia",
			"perd_zona",
			"perd_tipo_via",
			"perd_descripcion_via",
			"perd_numero",
			"perd_edificio",
			"perd_bloque",
			"perd_piso",
			"perd_dpto",
			"perd_telefono",
			"perd_celular",
			"perd_email_trabajo",
			"perd_email_personal",
			"perd_fam_emergencia",
			"perd_dir_emergencia",
			"perd_tel_emergencia",
			"perd_coordenadas",
			"perd_estado",
			"perd_usuario_creacion",
			"perd_fecha_creacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
		];
	}
}

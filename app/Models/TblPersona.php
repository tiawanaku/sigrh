<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPersona extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_persona';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'per_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'per_tipo_doc','per_num_doc','per_lugar_exp','per_ap_paterno','per_ap_materno','per_nombres','per_ap_casada','per_sexo','per_fecha_nac','per_procedencia','per_serie_libreta_militar','per_lugar_nac','per_estado_civil','per_fecha_registro'
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
				CAST(per_id AS TEXT) LIKE ?  OR 
				per_num_doc LIKE ?  OR 
				per_ap_paterno LIKE ?  OR 
				per_ap_materno LIKE ?  OR 
				per_nombres LIKE ?  OR 
				per_ap_casada LIKE ?  OR 
				per_sexo LIKE ?  OR 
				per_serie_libreta_militar LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"per_id",
			"per_tipo_doc",
			"per_num_doc",
			"per_lugar_exp",
			"per_ap_paterno",
			"per_ap_materno",
			"per_nombres",
			"per_ap_casada",
			"per_sexo",
			"per_fecha_nac",
			"per_procedencia",
			"per_serie_libreta_militar",
			"per_lugar_nac",
			"per_estado_civil",
			"per_fecha_registro" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"per_id",
			"per_tipo_doc",
			"per_num_doc",
			"per_lugar_exp",
			"per_ap_paterno",
			"per_ap_materno",
			"per_nombres",
			"per_ap_casada",
			"per_sexo",
			"per_fecha_nac",
			"per_procedencia",
			"per_serie_libreta_militar",
			"per_lugar_nac",
			"per_estado_civil",
			"per_fecha_registro" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"per_id",
			"per_tipo_doc",
			"per_num_doc",
			"per_lugar_exp",
			"per_ap_paterno",
			"per_ap_materno",
			"per_nombres",
			"per_ap_casada",
			"per_sexo",
			"per_fecha_nac",
			"per_procedencia",
			"per_serie_libreta_militar",
			"per_lugar_nac",
			"per_estado_civil",
			"per_fecha_registro" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"per_id",
			"per_tipo_doc",
			"per_num_doc",
			"per_lugar_exp",
			"per_ap_paterno",
			"per_ap_materno",
			"per_nombres",
			"per_ap_casada",
			"per_sexo",
			"per_fecha_nac",
			"per_procedencia",
			"per_serie_libreta_militar",
			"per_lugar_nac",
			"per_estado_civil",
			"per_fecha_registro" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"per_id",
			"per_tipo_doc",
			"per_num_doc",
			"per_lugar_exp",
			"per_ap_paterno",
			"per_ap_materno",
			"per_nombres",
			"per_ap_casada",
			"per_sexo",
			"per_fecha_nac",
			"per_procedencia",
			"per_serie_libreta_militar",
			"per_lugar_nac",
			"per_estado_civil",
			"per_fecha_registro" 
		];
	}
}

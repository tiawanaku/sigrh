<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsExamenPreocupacional extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_examen_preocupacional';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'exp_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'exp_id','exp_per_id','exp_fecha_elab','exp_carts_puesto','exp_fecha_examen','exp_estado','exp_diagnostico','exp_comentario','exp_recomendaciones','exp_fecha_recep_funcionario','exp_n_historia_clinica','exp_medico','exp_n_autorizacion','exp_convenio','exp_fecha_prog','exp_tel_of_fun','exp_tel_dom_fun','exp_obsaut','exp_importe','exp_tipo_sangre','exp_correlativo_gestion_n_autorizacion','exp_correlativo_fecha_registro_n_autorizacion','exp_as_id'
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
				CAST(exp_id AS TEXT) LIKE ?  OR 
				exp_carts_puesto LIKE ?  OR 
				exp_estado LIKE ?  OR 
				exp_diagnostico LIKE ?  OR 
				exp_comentario LIKE ?  OR 
				exp_recomendaciones LIKE ?  OR 
				exp_medico LIKE ?  OR 
				exp_tel_of_fun LIKE ?  OR 
				exp_tel_dom_fun LIKE ?  OR 
				exp_obsaut LIKE ?  OR 
				exp_tipo_sangre LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"exp_id",
			"exp_per_id",
			"exp_fecha_elab",
			"exp_carts_puesto",
			"exp_fecha_examen",
			"exp_estado",
			"exp_diagnostico",
			"exp_comentario",
			"exp_recomendaciones",
			"exp_fecha_recep_funcionario",
			"exp_n_historia_clinica",
			"exp_medico",
			"exp_n_autorizacion",
			"exp_convenio",
			"exp_fecha_prog",
			"exp_tel_of_fun",
			"exp_tel_dom_fun",
			"exp_obsaut",
			"exp_importe",
			"exp_tipo_sangre",
			"exp_correlativo_gestion_n_autorizacion",
			"exp_correlativo_fecha_registro_n_autorizacion",
			"exp_as_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"exp_id",
			"exp_per_id",
			"exp_fecha_elab",
			"exp_carts_puesto",
			"exp_fecha_examen",
			"exp_estado",
			"exp_diagnostico",
			"exp_comentario",
			"exp_recomendaciones",
			"exp_fecha_recep_funcionario",
			"exp_n_historia_clinica",
			"exp_medico",
			"exp_n_autorizacion",
			"exp_convenio",
			"exp_fecha_prog",
			"exp_tel_of_fun",
			"exp_tel_dom_fun",
			"exp_obsaut",
			"exp_importe",
			"exp_tipo_sangre",
			"exp_correlativo_gestion_n_autorizacion",
			"exp_correlativo_fecha_registro_n_autorizacion",
			"exp_as_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"exp_id",
			"exp_per_id",
			"exp_fecha_elab",
			"exp_carts_puesto",
			"exp_fecha_examen",
			"exp_estado",
			"exp_diagnostico",
			"exp_comentario",
			"exp_recomendaciones",
			"exp_fecha_recep_funcionario",
			"exp_n_historia_clinica",
			"exp_medico",
			"exp_n_autorizacion",
			"exp_convenio",
			"exp_fecha_prog",
			"exp_tel_of_fun",
			"exp_tel_dom_fun",
			"exp_obsaut",
			"exp_importe",
			"exp_tipo_sangre",
			"exp_correlativo_gestion_n_autorizacion",
			"exp_correlativo_fecha_registro_n_autorizacion",
			"exp_as_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"exp_id",
			"exp_per_id",
			"exp_fecha_elab",
			"exp_carts_puesto",
			"exp_fecha_examen",
			"exp_estado",
			"exp_diagnostico",
			"exp_comentario",
			"exp_recomendaciones",
			"exp_fecha_recep_funcionario",
			"exp_n_historia_clinica",
			"exp_medico",
			"exp_n_autorizacion",
			"exp_convenio",
			"exp_fecha_prog",
			"exp_tel_of_fun",
			"exp_tel_dom_fun",
			"exp_obsaut",
			"exp_importe",
			"exp_tipo_sangre",
			"exp_correlativo_gestion_n_autorizacion",
			"exp_correlativo_fecha_registro_n_autorizacion",
			"exp_as_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"exp_id",
			"exp_per_id",
			"exp_fecha_elab",
			"exp_carts_puesto",
			"exp_fecha_examen",
			"exp_estado",
			"exp_diagnostico",
			"exp_comentario",
			"exp_recomendaciones",
			"exp_fecha_recep_funcionario",
			"exp_n_historia_clinica",
			"exp_medico",
			"exp_n_autorizacion",
			"exp_convenio",
			"exp_fecha_prog",
			"exp_tel_of_fun",
			"exp_tel_dom_fun",
			"exp_obsaut",
			"exp_importe",
			"exp_tipo_sangre",
			"exp_correlativo_gestion_n_autorizacion",
			"exp_correlativo_fecha_registro_n_autorizacion",
			"exp_as_id" 
		];
	}
}

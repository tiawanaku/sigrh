<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPsProccoactfisc extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_ps_proccoactfisc';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'pca_id_proccoactfisc';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pca_id_proccoactfisc','pca_per_id','pca_secuencial','pca_sujeto_procesal','pca_nota_cargo','pca_monto_act','pca_total_rec','pca_estado_proceso','pca_juzgado','pca_tipo','pca_estado','pca_fecha_registro'
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
				CAST(pca_id_proccoactfisc AS TEXT) LIKE ?  OR 
				pca_sujeto_procesal LIKE ?  OR 
				pca_nota_cargo LIKE ?  OR 
				pca_estado_proceso LIKE ?  OR 
				pca_juzgado LIKE ?  OR 
				pca_tipo LIKE ?  OR 
				pca_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"pca_id_proccoactfisc",
			"pca_per_id",
			"pca_secuencial",
			"pca_sujeto_procesal",
			"pca_nota_cargo",
			"pca_monto_act",
			"pca_total_rec",
			"pca_estado_proceso",
			"pca_juzgado",
			"pca_tipo",
			"pca_estado",
			"pca_fecha_registro" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"pca_id_proccoactfisc",
			"pca_per_id",
			"pca_secuencial",
			"pca_sujeto_procesal",
			"pca_nota_cargo",
			"pca_monto_act",
			"pca_total_rec",
			"pca_estado_proceso",
			"pca_juzgado",
			"pca_tipo",
			"pca_estado",
			"pca_fecha_registro" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"pca_id_proccoactfisc",
			"pca_per_id",
			"pca_secuencial",
			"pca_sujeto_procesal",
			"pca_nota_cargo",
			"pca_monto_act",
			"pca_total_rec",
			"pca_estado_proceso",
			"pca_juzgado",
			"pca_tipo",
			"pca_estado",
			"pca_fecha_registro" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"pca_id_proccoactfisc",
			"pca_per_id",
			"pca_secuencial",
			"pca_sujeto_procesal",
			"pca_nota_cargo",
			"pca_monto_act",
			"pca_total_rec",
			"pca_estado_proceso",
			"pca_juzgado",
			"pca_tipo",
			"pca_estado",
			"pca_fecha_registro" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"pca_id_proccoactfisc",
			"pca_per_id",
			"pca_secuencial",
			"pca_sujeto_procesal",
			"pca_nota_cargo",
			"pca_monto_act",
			"pca_total_rec",
			"pca_estado_proceso",
			"pca_juzgado",
			"pca_tipo",
			"pca_estado",
			"pca_fecha_registro" 
		];
	}
}

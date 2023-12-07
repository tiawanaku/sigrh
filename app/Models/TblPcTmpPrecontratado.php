<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPcTmpPrecontratado extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pc_tmp_precontratado';
	

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
		'tmp_pre_id','tmp_ci','tmp_paterno','tmp_materno','tmp_nombres','tmp_ap_casada','tmp_sexo','tmp_mostrar_materno','tmp_estado'
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
				CAST(tmp_id AS TEXT) LIKE ?  OR 
				tmp_ci LIKE ?  OR 
				tmp_paterno LIKE ?  OR 
				tmp_materno LIKE ?  OR 
				tmp_nombres LIKE ?  OR 
				tmp_ap_casada LIKE ?  OR 
				tmp_sexo LIKE ?  OR 
				tmp_estado LIKE ? 
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
			"tmp_id",
			"tmp_pre_id",
			"tmp_ci",
			"tmp_paterno",
			"tmp_materno",
			"tmp_nombres",
			"tmp_ap_casada",
			"tmp_sexo",
			"tmp_mostrar_materno",
			"tmp_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"tmp_id",
			"tmp_pre_id",
			"tmp_ci",
			"tmp_paterno",
			"tmp_materno",
			"tmp_nombres",
			"tmp_ap_casada",
			"tmp_sexo",
			"tmp_mostrar_materno",
			"tmp_estado" 
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

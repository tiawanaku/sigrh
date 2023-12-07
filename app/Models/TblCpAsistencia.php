<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpAsistencia extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_asistencia';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'att_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'att_id','att_per_id','att_fecha','att_dia','att_ing1','att_sal1','att_ing2','att_sal2','att_id_lic_ing1','att_id_lic_sal1','att_id_lic_ing2','att_id_lic_sal2','att_min_atraso','att_min_atraso_mayor30','att_min_salio_antes','att_min_extras','att_tipo_observado','att_id_horario','att_id_horario_esp','att_edificio'
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
				CAST(att_id AS TEXT) LIKE ?  OR 
				att_dia LIKE ?  OR 
				att_tipo_observado LIKE ? 
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
			"att_id",
			"att_per_id",
			"att_fecha",
			"att_dia",
			"att_ing1",
			"att_sal1",
			"att_ing2",
			"att_sal2",
			"att_id_lic_ing1",
			"att_id_lic_sal1",
			"att_id_lic_ing2",
			"att_id_lic_sal2",
			"att_min_atraso",
			"att_min_atraso_mayor30",
			"att_min_salio_antes",
			"att_min_extras",
			"att_tipo_observado",
			"att_id_horario",
			"att_id_horario_esp",
			"att_edificio" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"att_id",
			"att_per_id",
			"att_fecha",
			"att_dia",
			"att_ing1",
			"att_sal1",
			"att_ing2",
			"att_sal2",
			"att_id_lic_ing1",
			"att_id_lic_sal1",
			"att_id_lic_ing2",
			"att_id_lic_sal2",
			"att_min_atraso",
			"att_min_atraso_mayor30",
			"att_min_salio_antes",
			"att_min_extras",
			"att_tipo_observado",
			"att_id_horario",
			"att_id_horario_esp",
			"att_edificio" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"att_id",
			"att_per_id",
			"att_fecha",
			"att_dia",
			"att_ing1",
			"att_sal1",
			"att_ing2",
			"att_sal2",
			"att_id_lic_ing1",
			"att_id_lic_sal1",
			"att_id_lic_ing2",
			"att_id_lic_sal2",
			"att_min_atraso",
			"att_min_atraso_mayor30",
			"att_min_salio_antes",
			"att_min_extras",
			"att_tipo_observado",
			"att_id_horario",
			"att_id_horario_esp",
			"att_edificio" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"att_id",
			"att_per_id",
			"att_fecha",
			"att_dia",
			"att_ing1",
			"att_sal1",
			"att_ing2",
			"att_sal2",
			"att_id_lic_ing1",
			"att_id_lic_sal1",
			"att_id_lic_ing2",
			"att_id_lic_sal2",
			"att_min_atraso",
			"att_min_atraso_mayor30",
			"att_min_salio_antes",
			"att_min_extras",
			"att_tipo_observado",
			"att_id_horario",
			"att_id_horario_esp",
			"att_edificio" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"att_id",
			"att_per_id",
			"att_fecha",
			"att_dia",
			"att_ing1",
			"att_sal1",
			"att_ing2",
			"att_sal2",
			"att_id_lic_ing1",
			"att_id_lic_sal1",
			"att_id_lic_ing2",
			"att_id_lic_sal2",
			"att_min_atraso",
			"att_min_atraso_mayor30",
			"att_min_salio_antes",
			"att_min_extras",
			"att_tipo_observado",
			"att_id_horario",
			"att_id_horario_esp",
			"att_edificio" 
		];
	}
}

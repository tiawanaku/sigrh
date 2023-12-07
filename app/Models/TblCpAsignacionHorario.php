<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpAsignacionHorario extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_asignacion_horario';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ah_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ah_per_id','ah_tipo_horario','ah_fecha_inicial','ah_fecha_final','ah_lun_ing1','ah_lun_sal1','ah_lun_ing2','ah_lun_sal2','ah_mar_ing1','ah_mar_sal1','ah_mar_ing2','ah_mar_sal2','ah_mie_ing1','ah_mie_sal1','ah_mie_ing2','ah_mie_sal2','ah_jue_ing1','ah_jue_sal1','ah_jue_ing2','ah_jue_sal2','ah_vie_ing1','ah_vie_sal1','ah_vie_ing2','ah_vie_sal2','ah_sab_ing1','ah_sab_sal1','ah_sab_ing2','ah_sab_sal2','ah_dom_ing1','ah_dom_sal1','ah_dom_ing2','ah_dom_sal2','ah_autorizado','ah_json','ah_estado'
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
				CAST(ah_id AS TEXT) LIKE ?  OR 
				ah_autorizado LIKE ?  OR 
				ah_json LIKE ?  OR 
				ah_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"ah_id",
			"ah_per_id",
			"ah_tipo_horario",
			"ah_fecha_inicial",
			"ah_fecha_final",
			"ah_lun_ing1",
			"ah_lun_sal1",
			"ah_lun_ing2",
			"ah_lun_sal2",
			"ah_mar_ing1",
			"ah_mar_sal1",
			"ah_mar_ing2",
			"ah_mar_sal2",
			"ah_mie_ing1",
			"ah_mie_sal1",
			"ah_mie_ing2",
			"ah_mie_sal2",
			"ah_jue_ing1",
			"ah_jue_sal1",
			"ah_jue_ing2",
			"ah_jue_sal2",
			"ah_vie_ing1",
			"ah_vie_sal1",
			"ah_vie_ing2",
			"ah_vie_sal2",
			"ah_sab_ing1",
			"ah_sab_sal1",
			"ah_sab_ing2",
			"ah_sab_sal2",
			"ah_dom_ing1",
			"ah_dom_sal1",
			"ah_dom_ing2",
			"ah_dom_sal2",
			"ah_autorizado",
			"ah_json",
			"ah_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ah_id",
			"ah_per_id",
			"ah_tipo_horario",
			"ah_fecha_inicial",
			"ah_fecha_final",
			"ah_lun_ing1",
			"ah_lun_sal1",
			"ah_lun_ing2",
			"ah_lun_sal2",
			"ah_mar_ing1",
			"ah_mar_sal1",
			"ah_mar_ing2",
			"ah_mar_sal2",
			"ah_mie_ing1",
			"ah_mie_sal1",
			"ah_mie_ing2",
			"ah_mie_sal2",
			"ah_jue_ing1",
			"ah_jue_sal1",
			"ah_jue_ing2",
			"ah_jue_sal2",
			"ah_vie_ing1",
			"ah_vie_sal1",
			"ah_vie_ing2",
			"ah_vie_sal2",
			"ah_sab_ing1",
			"ah_sab_sal1",
			"ah_sab_ing2",
			"ah_sab_sal2",
			"ah_dom_ing1",
			"ah_dom_sal1",
			"ah_dom_ing2",
			"ah_dom_sal2",
			"ah_autorizado",
			"ah_json",
			"ah_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ah_id",
			"ah_per_id",
			"ah_tipo_horario",
			"ah_fecha_inicial",
			"ah_fecha_final",
			"ah_lun_ing1",
			"ah_lun_sal1",
			"ah_lun_ing2",
			"ah_lun_sal2",
			"ah_mar_ing1",
			"ah_mar_sal1",
			"ah_mar_ing2",
			"ah_mar_sal2",
			"ah_mie_ing1",
			"ah_mie_sal1",
			"ah_mie_ing2",
			"ah_mie_sal2",
			"ah_jue_ing1",
			"ah_jue_sal1",
			"ah_jue_ing2",
			"ah_jue_sal2",
			"ah_vie_ing1",
			"ah_vie_sal1",
			"ah_vie_ing2",
			"ah_vie_sal2",
			"ah_sab_ing1",
			"ah_sab_sal1",
			"ah_sab_ing2",
			"ah_sab_sal2",
			"ah_dom_ing1",
			"ah_dom_sal1",
			"ah_dom_ing2",
			"ah_dom_sal2",
			"ah_autorizado",
			"ah_json",
			"ah_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ah_id",
			"ah_per_id",
			"ah_tipo_horario",
			"ah_fecha_inicial",
			"ah_fecha_final",
			"ah_lun_ing1",
			"ah_lun_sal1",
			"ah_lun_ing2",
			"ah_lun_sal2",
			"ah_mar_ing1",
			"ah_mar_sal1",
			"ah_mar_ing2",
			"ah_mar_sal2",
			"ah_mie_ing1",
			"ah_mie_sal1",
			"ah_mie_ing2",
			"ah_mie_sal2",
			"ah_jue_ing1",
			"ah_jue_sal1",
			"ah_jue_ing2",
			"ah_jue_sal2",
			"ah_vie_ing1",
			"ah_vie_sal1",
			"ah_vie_ing2",
			"ah_vie_sal2",
			"ah_sab_ing1",
			"ah_sab_sal1",
			"ah_sab_ing2",
			"ah_sab_sal2",
			"ah_dom_ing1",
			"ah_dom_sal1",
			"ah_dom_ing2",
			"ah_dom_sal2",
			"ah_autorizado",
			"ah_json",
			"ah_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ah_id",
			"ah_per_id",
			"ah_tipo_horario",
			"ah_fecha_inicial",
			"ah_fecha_final",
			"ah_lun_ing1",
			"ah_lun_sal1",
			"ah_lun_ing2",
			"ah_lun_sal2",
			"ah_mar_ing1",
			"ah_mar_sal1",
			"ah_mar_ing2",
			"ah_mar_sal2",
			"ah_mie_ing1",
			"ah_mie_sal1",
			"ah_mie_ing2",
			"ah_mie_sal2",
			"ah_jue_ing1",
			"ah_jue_sal1",
			"ah_jue_ing2",
			"ah_jue_sal2",
			"ah_vie_ing1",
			"ah_vie_sal1",
			"ah_vie_ing2",
			"ah_vie_sal2",
			"ah_sab_ing1",
			"ah_sab_sal1",
			"ah_sab_ing2",
			"ah_sab_sal2",
			"ah_dom_ing1",
			"ah_dom_sal1",
			"ah_dom_ing2",
			"ah_dom_sal2",
			"ah_autorizado",
			"ah_json",
			"ah_estado" 
		];
	}
}

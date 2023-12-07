<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpTmpHorario extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_tmp_horario';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = '';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'th_per_id','th_semana','th_dia','th_ing1','th_sal1','th_ing2','th_sal2','th_nro_dia','th_tipo'
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
				CAST(th_per_id AS TEXT) LIKE ?  OR 
				th_tipo LIKE ? 
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
			"th_per_id",
			"th_semana",
			"th_dia",
			"th_ing1",
			"th_sal1",
			"th_ing2",
			"th_sal2",
			"th_nro_dia",
			"th_tipo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"th_per_id",
			"th_semana",
			"th_dia",
			"th_ing1",
			"th_sal1",
			"th_ing2",
			"th_sal2",
			"th_nro_dia",
			"th_tipo" 
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

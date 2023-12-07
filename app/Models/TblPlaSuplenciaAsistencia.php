<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaSuplenciaAsistencia extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_suplencia_asistencia';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'plasupasist_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'plasupasist_id','plasupasist_dias_trabajados','plasupasist_mes','plasupasist_gestion','plasupasist_per_id_control_personal','plasupasist_per_id','plasupasist_per_id_responsable'
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
				CAST(plasupasist_id AS TEXT) LIKE ? 
		)';
		$search_params = [
			"%$text%"
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
			"plasupasist_id",
			"plasupasist_dias_trabajados",
			"plasupasist_mes",
			"plasupasist_gestion",
			"plasupasist_per_id_control_personal",
			"plasupasist_per_id",
			"plasupasist_per_id_responsable" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"plasupasist_id",
			"plasupasist_dias_trabajados",
			"plasupasist_mes",
			"plasupasist_gestion",
			"plasupasist_per_id_control_personal",
			"plasupasist_per_id",
			"plasupasist_per_id_responsable" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"plasupasist_id",
			"plasupasist_dias_trabajados",
			"plasupasist_mes",
			"plasupasist_gestion",
			"plasupasist_per_id_control_personal",
			"plasupasist_per_id",
			"plasupasist_per_id_responsable" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"plasupasist_id",
			"plasupasist_dias_trabajados",
			"plasupasist_mes",
			"plasupasist_gestion",
			"plasupasist_per_id_control_personal",
			"plasupasist_per_id",
			"plasupasist_per_id_responsable" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"plasupasist_id",
			"plasupasist_dias_trabajados",
			"plasupasist_mes",
			"plasupasist_gestion",
			"plasupasist_per_id_control_personal",
			"plasupasist_per_id",
			"plasupasist_per_id_responsable" 
		];
	}
}

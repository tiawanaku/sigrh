<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpHorarioEspecial extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_horario_especial';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'he_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'he_id','he_per_id','he_tipo_horario','he_fecha','he_ing1','he_sal1','he_ing2','he_sal2','he_autoriza','he_documento','he_descripcion','he_estado'
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
				CAST(he_id AS TEXT) LIKE ?  OR 
				he_autoriza LIKE ?  OR 
				he_documento LIKE ?  OR 
				he_descripcion LIKE ?  OR 
				he_estado LIKE ? 
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
			"he_id",
			"he_per_id",
			"he_tipo_horario",
			"he_fecha",
			"he_ing1",
			"he_sal1",
			"he_ing2",
			"he_sal2",
			"he_autoriza",
			"he_documento",
			"he_descripcion",
			"he_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"he_id",
			"he_per_id",
			"he_tipo_horario",
			"he_fecha",
			"he_ing1",
			"he_sal1",
			"he_ing2",
			"he_sal2",
			"he_autoriza",
			"he_documento",
			"he_descripcion",
			"he_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"he_id",
			"he_per_id",
			"he_tipo_horario",
			"he_fecha",
			"he_ing1",
			"he_sal1",
			"he_ing2",
			"he_sal2",
			"he_autoriza",
			"he_documento",
			"he_descripcion",
			"he_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"he_id",
			"he_per_id",
			"he_tipo_horario",
			"he_fecha",
			"he_ing1",
			"he_sal1",
			"he_ing2",
			"he_sal2",
			"he_autoriza",
			"he_documento",
			"he_descripcion",
			"he_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"he_id",
			"he_per_id",
			"he_tipo_horario",
			"he_fecha",
			"he_ing1",
			"he_sal1",
			"he_ing2",
			"he_sal2",
			"he_autoriza",
			"he_documento",
			"he_descripcion",
			"he_estado" 
		];
	}
}

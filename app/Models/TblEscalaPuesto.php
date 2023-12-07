<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblEscalaPuesto extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_escala_puesto';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'epu_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'epu_id','epu_es_id','epu_p_id','epu_tipo','epu_estado'
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
				CAST(epu_id AS TEXT) LIKE ?  OR 
				epu_tipo LIKE ?  OR 
				epu_estado LIKE ? 
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
			"epu_id",
			"epu_es_id",
			"epu_p_id",
			"epu_tipo",
			"epu_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"epu_id",
			"epu_es_id",
			"epu_p_id",
			"epu_tipo",
			"epu_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"epu_id",
			"epu_es_id",
			"epu_p_id",
			"epu_tipo",
			"epu_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"epu_id",
			"epu_es_id",
			"epu_p_id",
			"epu_tipo",
			"epu_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"epu_id",
			"epu_es_id",
			"epu_p_id",
			"epu_tipo",
			"epu_estado" 
		];
	}
}

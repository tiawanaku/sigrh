<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblTipoSancion extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_tipo_sancion';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ts_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ts_id','ts_tiempominimo','ts_tiempomaximo','ts_fa_id','ts_sanciondias','ts_descripcion','ts_estado'
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
				CAST(ts_id AS TEXT) LIKE ?  OR 
				ts_descripcion LIKE ?  OR 
				ts_estado LIKE ? 
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
			"ts_id",
			"ts_tiempominimo",
			"ts_tiempomaximo",
			"ts_fa_id",
			"ts_sanciondias",
			"ts_descripcion",
			"ts_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ts_id",
			"ts_tiempominimo",
			"ts_tiempomaximo",
			"ts_fa_id",
			"ts_sanciondias",
			"ts_descripcion",
			"ts_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ts_id",
			"ts_tiempominimo",
			"ts_tiempomaximo",
			"ts_fa_id",
			"ts_sanciondias",
			"ts_descripcion",
			"ts_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ts_id",
			"ts_tiempominimo",
			"ts_tiempomaximo",
			"ts_fa_id",
			"ts_sanciondias",
			"ts_descripcion",
			"ts_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ts_id",
			"ts_tiempominimo",
			"ts_tiempomaximo",
			"ts_fa_id",
			"ts_sanciondias",
			"ts_descripcion",
			"ts_estado" 
		];
	}
}

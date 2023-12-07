<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblRfsResultadosEspecificos extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_rfs_resultados_especificos';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 're_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		're_poai_id','re_descripcion','re_puntaje','re_indicador','re_estado'
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
				CAST(re_id AS TEXT) LIKE ?  OR 
				re_descripcion LIKE ?  OR 
				re_puntaje LIKE ?  OR 
				re_indicador LIKE ?  OR 
				re_estado LIKE ? 
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
			"re_id",
			"re_poai_id",
			"re_descripcion",
			"re_puntaje",
			"re_indicador",
			"re_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"re_id",
			"re_poai_id",
			"re_descripcion",
			"re_puntaje",
			"re_indicador",
			"re_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"re_id",
			"re_poai_id",
			"re_descripcion",
			"re_puntaje",
			"re_indicador",
			"re_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"re_id",
			"re_poai_id",
			"re_descripcion",
			"re_puntaje",
			"re_indicador",
			"re_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"re_id",
			"re_poai_id",
			"re_descripcion",
			"re_puntaje",
			"re_indicador",
			"re_estado" 
		];
	}
}

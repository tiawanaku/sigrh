<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaSuplenciaAdicionarAsistencia extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_suplencia_adicionar_asistencia';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'plasupadasist_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'plasupadasist_id','plasupadasist_plasup_id','plasupadasist_plasupasist_id','plasupadasist_fecha_recep_plaasist','plasupadasist_estado'
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
				CAST(plasupadasist_id AS TEXT) LIKE ?  OR 
				plasupadasist_estado LIKE ? 
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
			"plasupadasist_id",
			"plasupadasist_plasup_id",
			"plasupadasist_plasupasist_id",
			"plasupadasist_fecha_recep_plaasist",
			"plasupadasist_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"plasupadasist_id",
			"plasupadasist_plasup_id",
			"plasupadasist_plasupasist_id",
			"plasupadasist_fecha_recep_plaasist",
			"plasupadasist_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"plasupadasist_id",
			"plasupadasist_plasup_id",
			"plasupadasist_plasupasist_id",
			"plasupadasist_fecha_recep_plaasist",
			"plasupadasist_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"plasupadasist_id",
			"plasupadasist_plasup_id",
			"plasupadasist_plasupasist_id",
			"plasupadasist_fecha_recep_plaasist",
			"plasupadasist_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"plasupadasist_id",
			"plasupadasist_plasup_id",
			"plasupadasist_plasupasist_id",
			"plasupadasist_fecha_recep_plaasist",
			"plasupadasist_estado" 
		];
	}
}

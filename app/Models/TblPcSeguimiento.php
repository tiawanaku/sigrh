<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPcSeguimiento extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pc_seguimiento';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'seg_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'seg_pk_id','seg_us_id_remitente','seg_accion','seg_us_id_recepcion','seg_observaciones','seg_tabla','seg_fecha'
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
				CAST(seg_id AS TEXT) LIKE ?  OR 
				seg_accion LIKE ?  OR 
				seg_observaciones LIKE ?  OR 
				seg_tabla LIKE ? 
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
			"seg_id",
			"seg_pk_id",
			"seg_us_id_remitente",
			"seg_accion",
			"seg_us_id_recepcion",
			"seg_observaciones",
			"seg_tabla",
			"seg_fecha" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"seg_id",
			"seg_pk_id",
			"seg_us_id_remitente",
			"seg_accion",
			"seg_us_id_recepcion",
			"seg_observaciones",
			"seg_tabla",
			"seg_fecha" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"seg_id",
			"seg_pk_id",
			"seg_us_id_remitente",
			"seg_accion",
			"seg_us_id_recepcion",
			"seg_observaciones",
			"seg_tabla",
			"seg_fecha" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"seg_id",
			"seg_pk_id",
			"seg_us_id_remitente",
			"seg_accion",
			"seg_us_id_recepcion",
			"seg_observaciones",
			"seg_tabla",
			"seg_fecha" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"seg_id",
			"seg_pk_id",
			"seg_us_id_remitente",
			"seg_accion",
			"seg_us_id_recepcion",
			"seg_observaciones",
			"seg_tabla",
			"seg_fecha" 
		];
	}
}

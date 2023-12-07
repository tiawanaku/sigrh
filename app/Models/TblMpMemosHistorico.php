<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpMemosHistorico extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_memos_historico';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'mh_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'mh_id','mh_qr','mh_per_id','mh_te_id','mh_nro_memo','mh_contenido','mh_validacion','mh_fecha_validacion','mh_usuario_creacion','mh_fecha_creacion','mh_pr_id'
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
				CAST(mh_id AS TEXT) LIKE ?  OR 
				mh_qr LIKE ?  OR 
				mh_contenido LIKE ?  OR 
				mh_validacion LIKE ? 
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
			"mh_id",
			"mh_qr",
			"mh_per_id",
			"mh_te_id",
			"mh_nro_memo",
			"mh_contenido",
			"mh_validacion",
			"mh_fecha_validacion",
			"mh_usuario_creacion",
			"mh_fecha_creacion",
			"mh_pr_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"mh_id",
			"mh_qr",
			"mh_per_id",
			"mh_te_id",
			"mh_nro_memo",
			"mh_contenido",
			"mh_validacion",
			"mh_fecha_validacion",
			"mh_usuario_creacion",
			"mh_fecha_creacion",
			"mh_pr_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"mh_id",
			"mh_qr",
			"mh_per_id",
			"mh_te_id",
			"mh_nro_memo",
			"mh_contenido",
			"mh_validacion",
			"mh_fecha_validacion",
			"mh_usuario_creacion",
			"mh_fecha_creacion",
			"mh_pr_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"mh_id",
			"mh_qr",
			"mh_per_id",
			"mh_te_id",
			"mh_nro_memo",
			"mh_contenido",
			"mh_validacion",
			"mh_fecha_validacion",
			"mh_usuario_creacion",
			"mh_fecha_creacion",
			"mh_pr_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"mh_id",
			"mh_qr",
			"mh_per_id",
			"mh_te_id",
			"mh_nro_memo",
			"mh_contenido",
			"mh_validacion",
			"mh_fecha_validacion",
			"mh_usuario_creacion",
			"mh_fecha_creacion",
			"mh_pr_id" 
		];
	}
}

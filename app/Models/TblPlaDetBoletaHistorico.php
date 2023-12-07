<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaDetBoletaHistorico extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_det_boleta_historico';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'dbh_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'dbh_id','dbh_cb_id','dbh_fa_id','dbh_valor','dbh_estado','dbh_tr_id','dbh_cs_id'
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
				CAST(dbh_id AS TEXT) LIKE ?  OR 
				dbh_estado LIKE ? 
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
			"dbh_id",
			"dbh_cb_id",
			"dbh_fa_id",
			"dbh_valor",
			"dbh_estado",
			"dbh_tr_id",
			"dbh_cs_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"dbh_id",
			"dbh_cb_id",
			"dbh_fa_id",
			"dbh_valor",
			"dbh_estado",
			"dbh_tr_id",
			"dbh_cs_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"dbh_id",
			"dbh_cb_id",
			"dbh_fa_id",
			"dbh_valor",
			"dbh_estado",
			"dbh_tr_id",
			"dbh_cs_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"dbh_id",
			"dbh_cb_id",
			"dbh_fa_id",
			"dbh_valor",
			"dbh_estado",
			"dbh_tr_id",
			"dbh_cs_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"dbh_id",
			"dbh_cb_id",
			"dbh_fa_id",
			"dbh_valor",
			"dbh_estado",
			"dbh_tr_id",
			"dbh_cs_id" 
		];
	}
}

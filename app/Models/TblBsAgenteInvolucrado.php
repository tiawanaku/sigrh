<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsAgenteInvolucrado extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_agente_involucrado';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'aginvexpre_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'aginvexpre_id','aginvexpre_exp_id','aginvexpre_aginv_id','aginvexpre_estado','aginvexpre_fechamod'
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
				CAST(aginvexpre_id AS TEXT) LIKE ?  OR 
				aginvexpre_estado LIKE ? 
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
			"aginvexpre_id",
			"aginvexpre_exp_id",
			"aginvexpre_aginv_id",
			"aginvexpre_estado",
			"aginvexpre_fechamod" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"aginvexpre_id",
			"aginvexpre_exp_id",
			"aginvexpre_aginv_id",
			"aginvexpre_estado",
			"aginvexpre_fechamod" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"aginvexpre_id",
			"aginvexpre_exp_id",
			"aginvexpre_aginv_id",
			"aginvexpre_estado",
			"aginvexpre_fechamod" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"aginvexpre_id",
			"aginvexpre_exp_id",
			"aginvexpre_aginv_id",
			"aginvexpre_estado",
			"aginvexpre_fechamod" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"aginvexpre_id",
			"aginvexpre_exp_id",
			"aginvexpre_aginv_id",
			"aginvexpre_estado",
			"aginvexpre_fechamod" 
		];
	}
}

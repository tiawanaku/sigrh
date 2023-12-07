<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsEnfermedadesRecurrentes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_enfermedades_recurrentes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'enfrec_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'enfrec_id','enfrec_exp_id','enfrec_enf_id','enfrec_tipo','enfrec_estado'
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
				CAST(enfrec_id AS TEXT) LIKE ?  OR 
				enfrec_tipo LIKE ?  OR 
				enfrec_estado LIKE ? 
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
			"enfrec_id",
			"enfrec_exp_id",
			"enfrec_enf_id",
			"enfrec_tipo",
			"enfrec_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"enfrec_id",
			"enfrec_exp_id",
			"enfrec_enf_id",
			"enfrec_tipo",
			"enfrec_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"enfrec_id",
			"enfrec_exp_id",
			"enfrec_enf_id",
			"enfrec_tipo",
			"enfrec_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"enfrec_id",
			"enfrec_exp_id",
			"enfrec_enf_id",
			"enfrec_tipo",
			"enfrec_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"enfrec_id",
			"enfrec_exp_id",
			"enfrec_enf_id",
			"enfrec_tipo",
			"enfrec_estado" 
		];
	}
}

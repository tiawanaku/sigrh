<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsAfiliacionEgsBeneficiario extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_afiliacion_egs_beneficiario';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'aeb_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'aeb_ae_id','aeb_pf_id','aeb_fecha_afi','aeb_afi_por','aeb_estado'
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
				CAST(aeb_id AS TEXT) LIKE ?  OR 
				aeb_afi_por LIKE ?  OR 
				aeb_estado LIKE ? 
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
			"aeb_id",
			"aeb_ae_id",
			"aeb_pf_id",
			"aeb_fecha_afi",
			"aeb_afi_por",
			"aeb_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"aeb_id",
			"aeb_ae_id",
			"aeb_pf_id",
			"aeb_fecha_afi",
			"aeb_afi_por",
			"aeb_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"aeb_id",
			"aeb_ae_id",
			"aeb_pf_id",
			"aeb_fecha_afi",
			"aeb_afi_por",
			"aeb_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"aeb_id",
			"aeb_ae_id",
			"aeb_pf_id",
			"aeb_fecha_afi",
			"aeb_afi_por",
			"aeb_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"aeb_id",
			"aeb_ae_id",
			"aeb_pf_id",
			"aeb_fecha_afi",
			"aeb_afi_por",
			"aeb_estado" 
		];
	}
}

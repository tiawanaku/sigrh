<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblDjbrAcreditacion extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_djbr_acreditacion';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'djbracred_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'djbracred_id','djbracred_cd','djbracred_fecha_declaracion','djbracred_motivo','djbracred_fecha_acreditacion','djbracred_cumplimiento','djbracred_tipo_acreditacion','djbracred_proxima_acreditacion','djbracred_per_id','djbracred_as_id','djbracred_gestion'
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
				CAST(djbracred_id AS TEXT) LIKE ?  OR 
				djbracred_cd LIKE ?  OR 
				djbracred_motivo LIKE ?  OR 
				djbracred_cumplimiento LIKE ?  OR 
				djbracred_tipo_acreditacion LIKE ? 
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
			"djbracred_id",
			"djbracred_cd",
			"djbracred_fecha_declaracion",
			"djbracred_motivo",
			"djbracred_fecha_acreditacion",
			"djbracred_cumplimiento",
			"djbracred_tipo_acreditacion",
			"djbracred_proxima_acreditacion",
			"djbracred_per_id",
			"djbracred_as_id",
			"djbracred_gestion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"djbracred_id",
			"djbracred_cd",
			"djbracred_fecha_declaracion",
			"djbracred_motivo",
			"djbracred_fecha_acreditacion",
			"djbracred_cumplimiento",
			"djbracred_tipo_acreditacion",
			"djbracred_proxima_acreditacion",
			"djbracred_per_id",
			"djbracred_as_id",
			"djbracred_gestion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"djbracred_id",
			"djbracred_cd",
			"djbracred_fecha_declaracion",
			"djbracred_motivo",
			"djbracred_fecha_acreditacion",
			"djbracred_cumplimiento",
			"djbracred_tipo_acreditacion",
			"djbracred_proxima_acreditacion",
			"djbracred_per_id",
			"djbracred_as_id",
			"djbracred_gestion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"djbracred_id",
			"djbracred_cd",
			"djbracred_fecha_declaracion",
			"djbracred_motivo",
			"djbracred_fecha_acreditacion",
			"djbracred_cumplimiento",
			"djbracred_tipo_acreditacion",
			"djbracred_proxima_acreditacion",
			"djbracred_per_id",
			"djbracred_as_id",
			"djbracred_gestion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"djbracred_id",
			"djbracred_cd",
			"djbracred_fecha_declaracion",
			"djbracred_motivo",
			"djbracred_fecha_acreditacion",
			"djbracred_cumplimiento",
			"djbracred_tipo_acreditacion",
			"djbracred_proxima_acreditacion",
			"djbracred_per_id",
			"djbracred_as_id",
			"djbracred_gestion" 
		];
	}
}

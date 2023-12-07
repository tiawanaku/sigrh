<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpBitacoraDispositivo extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_bitacora_dispositivo';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'bd_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'bd_id','bd_di_id','bd_fecha','bd_estado_com_abrir','bd_estado_exp_archivo','bd_marcas_leidas','bd_marcas_descargadas','bd_estado_com_cerrar','bd_estado_exito','bd_observaciones'
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
				CAST(bd_id AS TEXT) LIKE ?  OR 
				bd_estado_com_abrir LIKE ?  OR 
				bd_estado_exp_archivo LIKE ?  OR 
				bd_estado_com_cerrar LIKE ?  OR 
				bd_estado_exito LIKE ?  OR 
				bd_observaciones LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"bd_id",
			"bd_di_id",
			"bd_fecha",
			"bd_estado_com_abrir",
			"bd_estado_exp_archivo",
			"bd_marcas_leidas",
			"bd_marcas_descargadas",
			"bd_estado_com_cerrar",
			"bd_estado_exito",
			"bd_observaciones" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"bd_id",
			"bd_di_id",
			"bd_fecha",
			"bd_estado_com_abrir",
			"bd_estado_exp_archivo",
			"bd_marcas_leidas",
			"bd_marcas_descargadas",
			"bd_estado_com_cerrar",
			"bd_estado_exito",
			"bd_observaciones" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"bd_id",
			"bd_di_id",
			"bd_fecha",
			"bd_estado_com_abrir",
			"bd_estado_exp_archivo",
			"bd_marcas_leidas",
			"bd_marcas_descargadas",
			"bd_estado_com_cerrar",
			"bd_estado_exito",
			"bd_observaciones" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"bd_id",
			"bd_di_id",
			"bd_fecha",
			"bd_estado_com_abrir",
			"bd_estado_exp_archivo",
			"bd_marcas_leidas",
			"bd_marcas_descargadas",
			"bd_estado_com_cerrar",
			"bd_estado_exito",
			"bd_observaciones" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"bd_id",
			"bd_di_id",
			"bd_fecha",
			"bd_estado_com_abrir",
			"bd_estado_exp_archivo",
			"bd_marcas_leidas",
			"bd_marcas_descargadas",
			"bd_estado_com_cerrar",
			"bd_estado_exito",
			"bd_observaciones" 
		];
	}
}

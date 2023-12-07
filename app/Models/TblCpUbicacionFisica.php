<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpUbicacionFisica extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_ubicacion_fisica';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'uf_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'uf_id','uf_per_id','uf_edificio','uf_piso','uf_bloque','uf_telefono_interno','uf_telefono_oficina','uf_nombre_oficina','uf_fecha_inicio','uf_fecha_final','uf_estado'
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
				CAST(uf_id AS TEXT) LIKE ?  OR 
				uf_piso LIKE ?  OR 
				uf_bloque LIKE ?  OR 
				uf_nombre_oficina LIKE ?  OR 
				uf_estado LIKE ? 
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
			"uf_id",
			"uf_per_id",
			"uf_edificio",
			"uf_piso",
			"uf_bloque",
			"uf_telefono_interno",
			"uf_telefono_oficina",
			"uf_nombre_oficina",
			"uf_fecha_inicio",
			"uf_fecha_final",
			"uf_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"uf_id",
			"uf_per_id",
			"uf_edificio",
			"uf_piso",
			"uf_bloque",
			"uf_telefono_interno",
			"uf_telefono_oficina",
			"uf_nombre_oficina",
			"uf_fecha_inicio",
			"uf_fecha_final",
			"uf_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"uf_id",
			"uf_per_id",
			"uf_edificio",
			"uf_piso",
			"uf_bloque",
			"uf_telefono_interno",
			"uf_telefono_oficina",
			"uf_nombre_oficina",
			"uf_fecha_inicio",
			"uf_fecha_final",
			"uf_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"uf_id",
			"uf_per_id",
			"uf_edificio",
			"uf_piso",
			"uf_bloque",
			"uf_telefono_interno",
			"uf_telefono_oficina",
			"uf_nombre_oficina",
			"uf_fecha_inicio",
			"uf_fecha_final",
			"uf_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"uf_id",
			"uf_per_id",
			"uf_edificio",
			"uf_piso",
			"uf_bloque",
			"uf_telefono_interno",
			"uf_telefono_oficina",
			"uf_nombre_oficina",
			"uf_fecha_inicio",
			"uf_fecha_final",
			"uf_estado" 
		];
	}
}

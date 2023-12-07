<?php 
namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Components data Model
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Model
 */
class ComponentsData{
	

	/**
     * afp_per_id_option_list Model Action
     * @return array
     */
	function afp_per_id_option_list(){
		$sqltext = "SELECT per_id as value, per_id as label FROM tbl_persona";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * aginvexpre_exp_id_option_list Model Action
     * @return array
     */
	function aginvexpre_exp_id_option_list(){
		$sqltext = "SELECT exp_id as value, exp_id as label FROM tbl_bs_examen_preocupacional";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * bd_di_id_option_list Model Action
     * @return array
     */
	function bd_di_id_option_list(){
		$sqltext = "SELECT di_id as value, di_id as label FROM tbl_cp_dispositivo";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * ps_cm_id_option_list Model Action
     * @return array
     */
	function ps_cm_id_option_list(){
		$sqltext = "SELECT cm_id as value, cm_id as label FROM tbl_cp_cierre_mensual";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
}

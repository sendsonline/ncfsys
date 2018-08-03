<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-07-05 15:17
 */
interface MissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Mission 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param mission primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Mission mission
 	 */
	public function insert($mission);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Mission mission
 	 */
	public function update($mission);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMissionDate($value);

	public function queryByMissionPlace($value);

	public function queryByMissionNum($value);


	public function deleteByMissionDate($value);

	public function deleteByMissionPlace($value);

	public function deleteByMissionNum($value);


}
?>
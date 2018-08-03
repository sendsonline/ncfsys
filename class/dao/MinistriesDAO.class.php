<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-07-05 15:17
 */
interface MinistriesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Ministries 
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
 	 * @param ministrie primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Ministries ministrie
 	 */
	public function insert($ministrie);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Ministries ministrie
 	 */
	public function update($ministrie);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMinistryName($value);

	public function queryByMinistryDesc($value);

	public function queryByMainMinistry($value);

	public function queryByMinistryAddress($value);


	public function deleteByMinistryName($value);

	public function deleteByMinistryDesc($value);

	public function deleteByMainMinistry($value);

	public function deleteByMinistryAddress($value);


}
?>
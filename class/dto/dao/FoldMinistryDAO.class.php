<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-07-05 15:17
 */
interface FoldMinistryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FoldMinistry 
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
 	 * @param foldMinistry primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FoldMinistry foldMinistry
 	 */
	public function insert($foldMinistry);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FoldMinistry foldMinistry
 	 */
	public function update($foldMinistry);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMinistryName($value);

	public function queryByMinistryRole($value);


	public function deleteByMinistryName($value);

	public function deleteByMinistryRole($value);


}
?>
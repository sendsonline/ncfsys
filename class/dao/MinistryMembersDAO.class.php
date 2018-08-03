<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-07-05 15:17
 */
interface MinistryMembersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MinistryMembers 
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
 	 * @param ministryMember primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MinistryMembers ministryMember
 	 */
	public function insert($ministryMember);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MinistryMembers ministryMember
 	 */
	public function update($ministryMember);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMinistryId($value);

	public function queryByMemberId($value);

	public function queryByPosition($value);

	public function queryByDateFrom($value);

	public function queryByStatus($value);


	public function deleteByMinistryId($value);

	public function deleteByMemberId($value);

	public function deleteByPosition($value);

	public function deleteByDateFrom($value);

	public function deleteByStatus($value);


}
?>
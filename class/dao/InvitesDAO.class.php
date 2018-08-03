<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-07-05 15:17
 */
interface InvitesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Invites 
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
 	 * @param invite primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Invites invite
 	 */
	public function insert($invite);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Invites invite
 	 */
	public function update($invite);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByInviteById($value);

	public function queryByInvitedId($value);


	public function deleteByInviteById($value);

	public function deleteByInvitedId($value);


}
?>
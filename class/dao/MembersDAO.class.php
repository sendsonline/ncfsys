<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2018-07-05 15:17
 */
interface MembersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Members 
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
 	 * @param member primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Members member
 	 */
	public function insert($member);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Members member
 	 */
	public function update($member);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLastname($value);

	public function queryByFirstname($value);

	public function queryByMiddlename($value);

	public function queryByAge($value);

	public function queryByBirthday($value);

	public function queryByAddress($value);

	public function queryByWaterBap($value);

	public function queryByHgBap($value);

	public function queryByGender($value);

	public function queryByProfPic($value);

	public function queryByAddDate($value);

	public function queryByLifeVerse($value);


	public function deleteByLastname($value);

	public function deleteByFirstname($value);

	public function deleteByMiddlename($value);

	public function deleteByAge($value);

	public function deleteByBirthday($value);

	public function deleteByAddress($value);

	public function deleteByWaterBap($value);

	public function deleteByHgBap($value);

	public function deleteByGender($value);

	public function deleteByProfPic($value);

	public function deleteByAddDate($value);

	public function deleteByLifeVerse($value);


}
?>
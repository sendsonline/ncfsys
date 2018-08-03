<?php
/**
 * Class that operate on table 'ministry_members'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-29 12:58
 */
class MinistryMembersMySqlDAO implements MinistryMembersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MinistryMembersMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM ministry_members WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM ministry_members';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM ministry_members ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param ministryMember primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM ministry_members WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MinistryMembersMySql ministryMember
 	 */
	public function insert($ministryMember){
		$sql = 'INSERT INTO ministry_members (ministry_id, member_id, position, date_from, status) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($ministryMember->ministryId);
		$sqlQuery->setNumber($ministryMember->memberId);
		$sqlQuery->set($ministryMember->position);
		$sqlQuery->set($ministryMember->dateFrom);
		$sqlQuery->set($ministryMember->status);

		$id = $this->executeInsert($sqlQuery);	
		$ministryMember->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MinistryMembersMySql ministryMember
 	 */
	public function update($ministryMember){
		$sql = 'UPDATE ministry_members SET ministry_id = ?, member_id = ?, position = ?, date_from = ?, status = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($ministryMember->ministryId);
		$sqlQuery->setNumber($ministryMember->memberId);
		$sqlQuery->set($ministryMember->position);
		$sqlQuery->set($ministryMember->dateFrom);
		$sqlQuery->set($ministryMember->status);

		$sqlQuery->setNumber($ministryMember->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM ministry_members';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMinistryId($value){
		$sql = 'SELECT * FROM ministry_members WHERE ministry_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMemberId($value){
		$sql = 'SELECT * FROM ministry_members WHERE member_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPosition($value){
		$sql = 'SELECT * FROM ministry_members WHERE position = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateFrom($value){
		$sql = 'SELECT * FROM ministry_members WHERE date_from = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM ministry_members WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMinistryId($value){
		$sql = 'DELETE FROM ministry_members WHERE ministry_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMemberId($value){
		$sql = 'DELETE FROM ministry_members WHERE member_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPosition($value){
		$sql = 'DELETE FROM ministry_members WHERE position = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateFrom($value){
		$sql = 'DELETE FROM ministry_members WHERE date_from = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM ministry_members WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MinistryMembersMySql 
	 */
	protected function readRow($row){
		$ministryMember = new MinistryMember();
		
		$ministryMember->id = $row['id'];
		$ministryMember->ministryId = $row['ministry_id'];
		$ministryMember->memberId = $row['member_id'];
		$ministryMember->position = $row['position'];
		$ministryMember->dateFrom = $row['date_from'];
		$ministryMember->status = $row['status'];

		return $ministryMember;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return MinistryMembersMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>
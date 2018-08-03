<?php
/**
 * Class that operate on table 'invites'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-29 12:58
 */
class InvitesMySqlDAO implements InvitesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return InvitesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM invites WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM invites';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM invites ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param invite primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM invites WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param InvitesMySql invite
 	 */
	public function insert($invite){
		$sql = 'INSERT INTO invites (invite_by_id, invited_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($invite->inviteById);
		$sqlQuery->setNumber($invite->invitedId);

		$id = $this->executeInsert($sqlQuery);	
		$invite->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param InvitesMySql invite
 	 */
	public function update($invite){
		$sql = 'UPDATE invites SET invite_by_id = ?, invited_id = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($invite->inviteById);
		$sqlQuery->setNumber($invite->invitedId);

		$sqlQuery->setNumber($invite->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM invites';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByInviteById($value){
		$sql = 'SELECT * FROM invites WHERE invite_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInvitedId($value){
		$sql = 'SELECT * FROM invites WHERE invited_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByInviteById($value){
		$sql = 'DELETE FROM invites WHERE invite_by_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInvitedId($value){
		$sql = 'DELETE FROM invites WHERE invited_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return InvitesMySql 
	 */
	protected function readRow($row){
		$invite = new Invite();
		
		$invite->id = $row['id'];
		$invite->inviteById = $row['invite_by_id'];
		$invite->invitedId = $row['invited_id'];

		return $invite;
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
	 * @return InvitesMySql 
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
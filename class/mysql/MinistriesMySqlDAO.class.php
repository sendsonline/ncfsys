<?php
/**
 * Class that operate on table 'ministries'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-29 12:58
 */
class MinistriesMySqlDAO implements MinistriesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MinistriesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM ministries WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM ministries';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM ministries ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param ministrie primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM ministries WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MinistriesMySql ministrie
 	 */
	public function insert($ministrie){
		$sql = 'INSERT INTO ministries (ministry_name, ministry_desc, main_ministry, ministry_address) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($ministrie->ministryName);
		$sqlQuery->set($ministrie->ministryDesc);
		$sqlQuery->setNumber($ministrie->mainMinistry);
		$sqlQuery->set($ministrie->ministryAddress);

		$id = $this->executeInsert($sqlQuery);	
		$ministrie->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MinistriesMySql ministrie
 	 */
	public function update($ministrie){
		$sql = 'UPDATE ministries SET ministry_name = ?, ministry_desc = ?, main_ministry = ?, ministry_address = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($ministrie->ministryName);
		$sqlQuery->set($ministrie->ministryDesc);
		$sqlQuery->setNumber($ministrie->mainMinistry);
		$sqlQuery->set($ministrie->ministryAddress);

		$sqlQuery->setNumber($ministrie->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM ministries';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMinistryName($value){
		$sql = 'SELECT * FROM ministries WHERE ministry_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMinistryDesc($value){
		$sql = 'SELECT * FROM ministries WHERE ministry_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMainMinistry($value){
		$sql = 'SELECT * FROM ministries WHERE main_ministry = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMinistryAddress($value){
		$sql = 'SELECT * FROM ministries WHERE ministry_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMinistryName($value){
		$sql = 'DELETE FROM ministries WHERE ministry_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMinistryDesc($value){
		$sql = 'DELETE FROM ministries WHERE ministry_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMainMinistry($value){
		$sql = 'DELETE FROM ministries WHERE main_ministry = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMinistryAddress($value){
		$sql = 'DELETE FROM ministries WHERE ministry_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MinistriesMySql 
	 */
	protected function readRow($row){
		$ministrie = new Ministrie();
		
		$ministrie->id = $row['id'];
		$ministrie->ministryName = $row['ministry_name'];
		$ministrie->ministryDesc = $row['ministry_desc'];
		$ministrie->mainMinistry = $row['main_ministry'];
		$ministrie->ministryAddress = $row['ministry_address'];

		return $ministrie;
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
	 * @return MinistriesMySql 
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
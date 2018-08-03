<?php
/**
 * Class that operate on table 'fold_ministry'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-29 12:58
 */
class FoldMinistryMySqlDAO implements FoldMinistryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FoldMinistryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM fold_ministry WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM fold_ministry';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM fold_ministry ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param foldMinistry primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM fold_ministry WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FoldMinistryMySql foldMinistry
 	 */
	public function insert($foldMinistry){
		$sql = 'INSERT INTO fold_ministry (ministry_name, ministry_role) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($foldMinistry->ministryName);
		$sqlQuery->set($foldMinistry->ministryRole);

		$id = $this->executeInsert($sqlQuery);	
		$foldMinistry->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FoldMinistryMySql foldMinistry
 	 */
	public function update($foldMinistry){
		$sql = 'UPDATE fold_ministry SET ministry_name = ?, ministry_role = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($foldMinistry->ministryName);
		$sqlQuery->set($foldMinistry->ministryRole);

		$sqlQuery->setNumber($foldMinistry->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM fold_ministry';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMinistryName($value){
		$sql = 'SELECT * FROM fold_ministry WHERE ministry_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMinistryRole($value){
		$sql = 'SELECT * FROM fold_ministry WHERE ministry_role = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMinistryName($value){
		$sql = 'DELETE FROM fold_ministry WHERE ministry_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMinistryRole($value){
		$sql = 'DELETE FROM fold_ministry WHERE ministry_role = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FoldMinistryMySql 
	 */
	protected function readRow($row){
		$foldMinistry = new FoldMinistry();
		
		$foldMinistry->id = $row['id'];
		$foldMinistry->ministryName = $row['ministry_name'];
		$foldMinistry->ministryRole = $row['ministry_role'];

		return $foldMinistry;
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
	 * @return FoldMinistryMySql 
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
<?php
/**
 * Class that operate on table 'mission'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2018-07-05 15:17
 */
class MissionMySqlDAO implements MissionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MissionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM mission WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM mission';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM mission ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param mission primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM mission WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MissionMySql mission
 	 */
	public function insert($mission){
		$sql = 'INSERT INTO mission (mission_date, mission_place, mission_num) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($mission->missionDate);
		$sqlQuery->set($mission->missionPlace);
		$sqlQuery->setNumber($mission->missionNum);

		$id = $this->executeInsert($sqlQuery);	
		$mission->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MissionMySql mission
 	 */
	public function update($mission){
		$sql = 'UPDATE mission SET mission_date = ?, mission_place = ?, mission_num = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($mission->missionDate);
		$sqlQuery->set($mission->missionPlace);
		$sqlQuery->setNumber($mission->missionNum);

		$sqlQuery->setNumber($mission->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM mission';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMissionDate($value){
		$sql = 'SELECT * FROM mission WHERE mission_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMissionPlace($value){
		$sql = 'SELECT * FROM mission WHERE mission_place = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMissionNum($value){
		$sql = 'SELECT * FROM mission WHERE mission_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMissionDate($value){
		$sql = 'DELETE FROM mission WHERE mission_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMissionPlace($value){
		$sql = 'DELETE FROM mission WHERE mission_place = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMissionNum($value){
		$sql = 'DELETE FROM mission WHERE mission_num = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MissionMySql 
	 */
	protected function readRow($row){
		$mission = new Mission();
		
		$mission->id = $row['id'];
		$mission->missionDate = $row['mission_date'];
		$mission->missionPlace = $row['mission_place'];
		$mission->missionNum = $row['mission_num'];

		return $mission;
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
	 * @return MissionMySql 
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
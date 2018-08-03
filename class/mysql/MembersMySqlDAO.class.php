<?php
/**
 * Class that operate on table 'members'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-29 12:58
 */
class MembersMySqlDAO implements MembersDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MembersMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM members WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM members';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM members ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param member primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM members WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MembersMySql member
 	 */
	public function insert($member){
		$sql = 'INSERT INTO members (lastname, firstname, middlename, age, birthday, address, water_bap, hg_bap, gender, prof_pic, add_date, life_verse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($member->lastname);
		$sqlQuery->set($member->firstname);
		$sqlQuery->set($member->middlename);
		$sqlQuery->setNumber($member->age);
		$sqlQuery->set($member->birthday);
		$sqlQuery->set($member->address);
		$sqlQuery->set($member->waterBap);
		$sqlQuery->set($member->hgBap);
		$sqlQuery->set($member->gender);
		$sqlQuery->set($member->profPic);
		$sqlQuery->set($member->addDate);
		$sqlQuery->set($member->lifeVerse);

		$id = $this->executeInsert($sqlQuery);	
		$member->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MembersMySql member
 	 */
	public function update($member){
		$sql = 'UPDATE members SET lastname = ?, firstname = ?, middlename = ?, age = ?, birthday = ?, address = ?, water_bap = ?, hg_bap = ?, gender = ?, prof_pic = ?, add_date = ?, life_verse = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($member->lastname);
		$sqlQuery->set($member->firstname);
		$sqlQuery->set($member->middlename);
		$sqlQuery->setNumber($member->age);
		$sqlQuery->set($member->birthday);
		$sqlQuery->set($member->address);
		$sqlQuery->set($member->waterBap);
		$sqlQuery->set($member->hgBap);
		$sqlQuery->set($member->gender);
		$sqlQuery->set($member->profPic);
		$sqlQuery->set($member->addDate);
		$sqlQuery->set($member->lifeVerse);

		$sqlQuery->setNumber($member->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM members';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByLastname($value){
		$sql = 'SELECT * FROM members WHERE lastname = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFirstname($value){
		$sql = 'SELECT * FROM members WHERE firstname = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMiddlename($value){
		$sql = 'SELECT * FROM members WHERE middlename = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAge($value){
		$sql = 'SELECT * FROM members WHERE age = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBirthday($value){
		$sql = 'SELECT * FROM members WHERE birthday = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddress($value){
		$sql = 'SELECT * FROM members WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWaterBap($value){
		$sql = 'SELECT * FROM members WHERE water_bap = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHgBap($value){
		$sql = 'SELECT * FROM members WHERE hg_bap = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGender($value){
		$sql = 'SELECT * FROM members WHERE gender = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProfPic($value){
		$sql = 'SELECT * FROM members WHERE prof_pic = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddDate($value){
		$sql = 'SELECT * FROM members WHERE add_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLifeVerse($value){
		$sql = 'SELECT * FROM members WHERE life_verse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByLastname($value){
		$sql = 'DELETE FROM members WHERE lastname = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFirstname($value){
		$sql = 'DELETE FROM members WHERE firstname = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMiddlename($value){
		$sql = 'DELETE FROM members WHERE middlename = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAge($value){
		$sql = 'DELETE FROM members WHERE age = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBirthday($value){
		$sql = 'DELETE FROM members WHERE birthday = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddress($value){
		$sql = 'DELETE FROM members WHERE address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWaterBap($value){
		$sql = 'DELETE FROM members WHERE water_bap = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHgBap($value){
		$sql = 'DELETE FROM members WHERE hg_bap = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGender($value){
		$sql = 'DELETE FROM members WHERE gender = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProfPic($value){
		$sql = 'DELETE FROM members WHERE prof_pic = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddDate($value){
		$sql = 'DELETE FROM members WHERE add_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLifeVerse($value){
		$sql = 'DELETE FROM members WHERE life_verse = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MembersMySql 
	 */
	protected function readRow($row){
		$member = new Member();
		
		$member->id = $row['id'];
		$member->lastname = $row['lastname'];
		$member->firstname = $row['firstname'];
		$member->middlename = $row['middlename'];
		$member->age = $row['age'];
		$member->birthday = $row['birthday'];
		$member->address = $row['address'];
		$member->waterBap = $row['water_bap'];
		$member->hgBap = $row['hg_bap'];
		$member->gender = $row['gender'];
		$member->profPic = $row['prof_pic'];
		$member->addDate = $row['add_date'];
		$member->lifeVerse = $row['life_verse'];

		return $member;
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
	 * @return MembersMySql 
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
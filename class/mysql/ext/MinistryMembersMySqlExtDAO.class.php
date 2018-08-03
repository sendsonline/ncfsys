<?php
/**
 * Class that operate on table 'ministry_members'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-05 16:30
 */
class MinistryMembersMySqlExtDAO extends MinistryMembersMySqlDAO{
	public function loadMembers($id){
		$sql = 'SELECT * FROM ministry_members AS a LEFT JOIN members AS b ON a.member_id = b.id WHERE a.ministry_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getReturn($sqlQuery);
	}


	static protected function getReturn($sqlQuery){
			$tab = QueryExecutor::execute($sqlQuery);

			if(empty($tab)) return false;

			$returns = array();

			foreach($tab as $each){
					$array = array();
					foreach($each as $var=>$val){
							$array[$var] = $val;
					}
					$returns[] = $array;
			}

			return $returns;
	}
	
}
?>
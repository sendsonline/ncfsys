<?php
/**
 * Class that operate on table 'members'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-05 16:30
 */
class MembersMySqlExtDAO extends MembersMySqlDAO{
	public function updatePicture($pic,$id){
			$sql = 'UPDATE members SET prof_pic = ? WHERE id = ?';
			$sqlQuery = new SqlQuery($sql);

			$sqlQuery->set($pic);
			$sqlQuery->setNumber($id);
			return $this->executeUpdate($sqlQuery);
		}

	public function queryAllRecent(){
		$sql = 'SELECT * FROM members ORDER BY add_date DESC LIMIT 10';
		$sqlQuery = new SqlQuery($sql);
		return $this->getReturn($sqlQuery);
	}
	public function queryAllWithPage($from,$to){
		$sql = 'SELECT * FROM members ORDER BY id DESC LIMIT '.$from.','.$to.'';
		$sqlQuery = new SqlQuery($sql);
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
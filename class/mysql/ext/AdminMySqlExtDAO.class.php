<?php
/**
 * Class that operate on table 'admin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-08-05 16:30
 */
class AdminMySqlExtDAO extends AdminMySqlDAO{
	public function queryByUsernameAndPassword($value,$pass){
		$sql = 'SELECT * FROM admin WHERE username = ? AND password = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		$sqlQuery->set($pass);
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
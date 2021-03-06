<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AdminDAO.class.php');
	require_once('class/dto/Admin.class.php');
	require_once('class/mysql/AdminMySqlDAO.class.php');
	require_once('class/mysql/ext/AdminMySqlExtDAO.class.php');
	require_once('class/dao/FoldMinistryDAO.class.php');
	require_once('class/dto/FoldMinistry.class.php');
	require_once('class/mysql/FoldMinistryMySqlDAO.class.php');
	require_once('class/mysql/ext/FoldMinistryMySqlExtDAO.class.php');
	require_once('class/dao/InvitesDAO.class.php');
	require_once('class/dto/Invite.class.php');
	require_once('class/mysql/InvitesMySqlDAO.class.php');
	require_once('class/mysql/ext/InvitesMySqlExtDAO.class.php');
	require_once('class/dao/MembersDAO.class.php');
	require_once('class/dto/Member.class.php');
	require_once('class/mysql/MembersMySqlDAO.class.php');
	require_once('class/mysql/ext/MembersMySqlExtDAO.class.php');
	require_once('class/dao/MinistriesDAO.class.php');
	require_once('class/dto/Ministrie.class.php');
	require_once('class/mysql/MinistriesMySqlDAO.class.php');
	require_once('class/mysql/ext/MinistriesMySqlExtDAO.class.php');
	require_once('class/dao/MinistryMembersDAO.class.php');
	require_once('class/dto/MinistryMember.class.php');
	require_once('class/mysql/MinistryMembersMySqlDAO.class.php');
	require_once('class/mysql/ext/MinistryMembersMySqlExtDAO.class.php');
	require_once('class/dao/MissionDAO.class.php');
	require_once('class/dto/Mission.class.php');
	require_once('class/mysql/MissionMySqlDAO.class.php');
	require_once('class/mysql/ext/MissionMySqlExtDAO.class.php');

?>
<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AdminDAO
	 */
	public static function getAdminDAO(){
		return new AdminMySqlExtDAO();
	}

	/**
	 * @return FoldMinistryDAO
	 */
	public static function getFoldMinistryDAO(){
		return new FoldMinistryMySqlExtDAO();
	}

	/**
	 * @return InvitesDAO
	 */
	public static function getInvitesDAO(){
		return new InvitesMySqlExtDAO();
	}

	/**
	 * @return MembersDAO
	 */
	public static function getMembersDAO(){
		return new MembersMySqlExtDAO();
	}

	/**
	 * @return MinistriesDAO
	 */
	public static function getMinistriesDAO(){
		return new MinistriesMySqlExtDAO();
	}

	/**
	 * @return MinistryMembersDAO
	 */
	public static function getMinistryMembersDAO(){
		return new MinistryMembersMySqlExtDAO();
	}

	/**
	 * @return MissionDAO
	 */
	public static function getMissionDAO(){
		return new MissionMySqlExtDAO();
	}


}
?>
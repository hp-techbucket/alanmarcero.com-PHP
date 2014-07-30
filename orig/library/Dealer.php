<?php

class Dealer {
	
	var $db;
	var $smarty;
	var $user;
	var $sendMail;
	
	var $content;
	
	function Dealer() {
		$this->db = &$GLOBALS['db'];
		$this->smarty = &$GLOBALS['smarty'];
		$this->user = new User();
		$this->sendMail = &$GLOBALS['sendMail'];
			
		$this->show_dealer();
			
		$this->user->echo_template($this->content);
	}
	
	function show_dealer() {
		$items = $this->db->getAll('select * from store_entries order by display_position');
		$this->smarty->assign('items', $items);
		$this->content = $this->smarty->fetch(PATH_TEMPLATES . 'dealer.html');
	}
}
?>
<?php
error_reporting('e_all');
class person {
	var $lastname;
	var $firstname;
	var $names;
	var $result;
	var $content;
	var $filename;
	var $_handle;
	var $_log;
	
	function person($lastname, $firstname, $filename) {
		$this->lastname = $lastname;
		$this->firstname = $firstname;
		$this->filename = $filename;
		require($this->filename);
		$this->names = $names;
	}
	function check_student() {
		$this->result = (stripos($this->names, $this->lastname.','.$this->firstname) === false) ? 0 : 1;
		return($this->result);
	}
	function add_student() {
		if ($this->check_student() == 1) {
			return($this->firstname.' '.$this->lastname.' already bought a ticket');
		} else {
			$this->backup();
			$this->names .= $this->lastname.','.$this->firstname.',FALSE,;';
			$this->content();
			$this->_write();
			$this->_log = $this->firstname.' '.$this->lastname.' has been added to the list';
			$this->_log();
			return($this->firstname.' '.$this->lastname.' has been added to the list');
		}
	}
	function backup() {
		$hash = substr(md5(rand()), rand(0, 27), 4);
		copy($this->filename, 'backups/'.date('n-j-Y_G:i:s').'$'.$hash.'$backup.php');
	}
	function _write() {
		$this->_handle = fopen($this->filename, 'w');
		fwrite($this->_handle, $this->content) or die ('Cannot write '.$this->content.' to '.$this->filename);
	}
	function add_guest() {
		if ($this->check_student() == 0) {
			return($this->firstname.' '.$this->lastname.' needs to buy a ticket first.');
		} else {
			if($this->check_guest() == 0) {
				$this->backup();
				$this->names = str_replace($this->lastname.','.$this->firstname.',FALSE,', $this->lastname.','.$this->firstname.',TRUE,', $this->names);
				$this->content();
				$this->_write();
				$this->_log = $this->firstname.' '.$this->lastname.'\'s guest has been added';
				$this->_log();
				return($this->firstname.' '.$this->lastname.'\'s guest has been added');
			} else {
				return($this->firstname.' '.$this->lastname.' already has a guest');
			}
		}
	}
	function check_guest() {
		$this->result = (stripos($this->names, $this->lastname.','.$this->firstname.',TRUE,') === false) ? 0 : 1;
		return($this->result);
	}
	function content() {
		$this->content = '<?php $names=\''.$this->names.'\'; ?>';
	}
	function add_both() {
		if($this->check_student() == 0) {
			$this->add_student();
			$this->add_guest();
			$this->_log = $this->firstname.' '.$this->lastname.' and guest have been added.';
			$this->_log();
			return($this->firstname.' '.$this->lastname.' and guest have been added.');
		} else {
			return($this->firstname.' '.$this->lastname.' has already bought a ticket.');
		}
	}
	function _log() {
		$handle = fopen('log.txt', 'a') or die ('Cannot open log');
		fwrite($handle, "\r\n".date('n-j-Y_g:i:s ** ').$this->_log) or die ('cannot write to log');
	}
	function make_csv($filename) {
		$this->content = "Lastname,Firstname,Guest\r\n";
		$person = explode(";", $this->names);
		foreach ($person as $a_person) {
			$parts = explode(",", $a_person);
			$lastname = $parts[0];
			$firstname = $parts[1];
			$guest = ($parts[2] == "TRUE") ? "PAID" : "";
			$this->content .= $lastname.",".$firstname.",".$guest."\r\n";
		}
		$this->filename = $filename;
		$this->_write();
		$this->_log = "Excel Spreadsheet Updated";
		$this->_log();
	}	
}
?>
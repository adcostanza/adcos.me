<?php
class login {
	var $username;
	var $filename;
	var $users;
	var $result;
	var $password;
	var $content;
	var $_mail;
	var $_hash;
	var $email;
	var $new_user;
	var $_log;
	var $school_list;
	
	function login($username, $password, $filename) {
		$this->username = $username;
		$this->filename = $filename;
		$this->password = md5($password);
		require($this->filename);
		$this->users = $users;
	}
	function check() {
		$this->result = (stripos($this->users, $this->username.':'.$this->password) === false) ? 0 : 1;
		return($this->result);
		$this->_log = $this->username.' logged in';
		$this->_log();
	}
	function user_level() {
		$this->result = (stripos($this->users, $this->username.':'.$this->password.':0;') === false) ? 1 : 0;
		return($this->result);
	}
	function add_user($new_user) {
		$this->new_user = $new_user;
		$this->result = (stripos($this->users, $this->new_user.':') === false) ? 1 : 0;
		if ($this->result == 1) {
			$this->email = $email;
			$this->_hash = '$dTEMP';
			$this->content = $this->new_user.':'.md5($this->_hash).':1;';
			$this->content = '<?php $users=\''.$this->users.$this->content.'\'; ?>';
			$this->_write();
			$this->_log = $this->username.' added the user '.$this->new_user;
			$this->_log();
			return('The account '.$this->new_user.' has been added with temp password <b>$dTEMP</b>');
		} else return('The account '.$this->new_user.' already exists');
	}
	function _write() {
		$this->_handle = fopen($this->filename, 'w');
		fwrite($this->_handle, $this->content) or die ('Cannot write '.$this->content.' to '.$this->filename);
	}
	function _mail() {
		$message = "An account has been created for you to sell tickets.\n\nUsername: " .
					$this->new_user . "\nPassword: " . $this->_hash . "\n\nThanks!";
		$to = $this->email;
		$header = "From: Ticket Sales <noreply@scienceandtech.org>\r\n";
		mail($to, "Ticket Sales: Account", $message, $header) or die ('Cannot email message to '.$to);
	}
	function delete_user($user) {
		$this->result = (stripos($this->users, $user.':') === false) ? 0 : 1;
		if ($this->result == 0) return('The user '.$user.' does not exist.');
		else {
			$start = stripos($this->users, $user.":");
			$end = stripos($this->users, ';', $start)+1;
			$replace = substr($this->users, $start, $end-$start);
			$this->content = str_replace($replace, '', $this->users);
			$this->content = '<?php $users=\''.$this->content.'\'; ?>';
			$this->_write();
			$this->_log = $this->username.' deleted the user '.$user;
			$this->_log();
			return('The account '.$user.' has been deleted');
		}
	}
	function _log() {
		$handle = fopen('log.txt', 'a') or die ('Cannot open log');
		fwrite($handle, "\r\n".date('n-j-Y_g:i:s ** ').$this->_log) or die ('cannot write to log');
	}
	function search_list($query) {
		$query = explode(" ", $query);
		$query = implode("", $query);
		$handle = fopen('school.php', 'r') or die ('cannot open school.php');
		$read = fread($handle, filesize('school.php')) or die ('cannot read school.php');
		$read = strtolower($read);
		$read = explode("\r\n", $read);
		$this->result = "";
		foreach($read as $num=>$person) {
			$name = explode(".", $person);
			$lastname = $name[0];
			$firstname = $name[1];
			$lastname = strtoupper(substr($lastname, 0, 1)).substr($lastname, 1, strlen($lastname)-1);
			$firstname = strtoupper(substr($firstname, 0, 1)).substr($firstname, 1, strlen($firstname)-1);
			if ((stripos($lastname.$firstname, $query) !== false) || (stripos($firstname.$lastname, $query) !== false)) {
				$this->result .= "<div class=\"name\" onclick=\"show('$lastname', '$firstname');\">$firstname $lastname</div>\n"
					."<div id=\"extra_$lastname$firstname\" style=\"display:none\"><br />\n"
					."<input type='button' onclick=\"top.window.page('if.php?login=add_student&lastname=$lastname&firstname=$firstname');\" value='Add Student' />\n"
					."<input type='button' onclick=\"top.window.page('if.php?login=add_guest_form&lastname=$lastname&firstname=$firstname');\" value='Add Outside Guest' />"
					."<input type='button' onclick=\"top.window.page('if.php?login=add_both&lastname=$lastname&firstname=$firstname');\" value='Add Both' /><br /><br />\n"
					."</div>\n\n";
			}
		}
		return("<br />".$this->result);
	}
	function change_password() {
		$this->_log = $this->username.' changed password';
		$this->_log();
		$start = stripos($this->users, $this->username.':')+strlen($this->username.':');
		$end = stripos($this->users, ':', $start+5);
		$oldpass = substr($this->users, $start, $end-$start);
		$replaced = str_replace($oldpass, md5($this->password), $this->users);
		$this->content = '<?php $users=\''.$replaced.'\'; ?>';
		$this->_write();
		return(1);
	}
	function list_users($type) {
		$this->result = "";
		$explode = explode(";", $this->users);
		foreach($explode as $result) {
			$more_explode = explode(":", $result);
			$this->result .= "<div class='link' onclick=\"page('if.php?login=$type&username=$more_explode[0]');\">$more_explode[0]</div><br />";
		}
		return($this->result);
	}
}
?>
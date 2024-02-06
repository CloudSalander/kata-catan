<?php 
class City extends Resource {
	public function __construct() {
		$this->costs['wheat'] = 1;
		$this->costs['wood'] = 1;
		$this->costs['wool'] = 1;
		$this->costs['clay'] = 1;
	}
}

?>

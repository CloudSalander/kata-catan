<?php 
class City extends Resource {
	public function __construct() {
		$this->costs['wheat'] = 1;
		$this->costs['wood'] = 1;
		$this->costs['wool'] = 1;
		$this->costs['clay'] = 1;
	}

	protected function canPay(array $resources): bool {
		if($resources['wood'] < $this->costs['wheat'] || $resources['clay'] < $this->costs['clay']
			|| $resources['wool'] < $this->costs['wool'] || $resources['wheat'] < $this->costs['wheat']) return false;
		return true; 
	}
}

?>

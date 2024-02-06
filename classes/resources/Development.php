<?php 
class Development extends Resource {
	public function __construct() {
		$this->costs['wheat'] = 1;
		$this->costs['wool'] = 1;
		$this->costs['metal'] = 1;
	}

	protected function canPay(array $resources): bool {
		if($resources['wool'] < 1 || $resources['metal'] < 1
				|| $resources['wheat'] < 1) return false;
		return true; 
	}

}

?>

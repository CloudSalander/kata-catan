<?php 
class Town extends Resource {
	public function __construct() {
		$this->costs['wheat'] = 2;
		$this->costs['metal'] = 3;
	}

	protected function canPay(array $resources): bool {
		var_dump($this->costs);
		if($resources['wheat'] < $this->costs['wheat'] || $resources['metal'] < $this->costs['metal']) return false;
		return true; 
	}
}

?>

<?php 
class Road extends Resource {
	public function __construct() {
		$this->costs['wood'] = 1;
		$this->costs['clay'] = 1;
	}

	protected function canPay(array $resources): bool {
		if($resources['wood'] < $this->costs['wood'] || $this->costs['clay'] < 1) return false;
		return true; 
	}

}

?>

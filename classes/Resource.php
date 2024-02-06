<?php 
abstract class Resource {
	protected array $costs;

	protected abstract function canPay(array $resources): bool;
	public function pay(array $resources): bool | array {
		if($this->canPay($resources)) {
			return $this->costs;
		}
		return false;
	}
}




?>
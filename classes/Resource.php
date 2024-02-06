<?php 
abstract class Resource {
	protected array $costs;

	protected abstract function canPay(array $resources): bool;
	public abstract function pay(array $resources): bool | array;
}




?>
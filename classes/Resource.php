<?php 
abstract class Resource {
	protected int $woodCost;
	protected int $woolCost;
	protected int $clayCost;
	protected int $wheatCost;
	protected int $metalCost;

	public abstract function canPay(){}
	public function getWoodCost(): int {
		return $this->woodCost;
	}

	public function getWoolCost(): int {
		return $this->woolCost;
	}

	public function getClayCost(): int {
		return $this->clayCost;
	}

	public function getWheatCost(): int {
		return $this->wheatCost;
	}

	public function getMetalCost(): int {
		return $this->metalCost;
	}
}




?>
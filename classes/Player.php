<?php
class Player{
	private int $wood;
	private int $wool;
	private int $clay;
	private int $wheat;
	private int $metal;

	public function __construct(int $wood, int $wool, int $clay, int $wheat, int $metal) {
		$this->wood = $wood;
		$this->wool = $wool;
		$this->metal = $metal;
		$this->clay = $clay;
		$this->wheat = $wheat;
	}

	public function getWood(): int {
		return $this->wood;
	}

	public function getWool(): int {
		return $this->wool;
	}

	public function getClay(): int {
		return $this->clay;
	}

	public function getWheat(): int {
		return $this->wheat;
	}

	public function getMetal(): int {
		return $this->metal;
	}

	public function setWood(int $units): void {
		$this->wood += $units;
	}

	public function setWool(int $units): void {
		$this->wool += $units;
	}

	public function setClay(int $units): void {
		$this->clay += $units;
	}

	public function setWheat(int $units): void {
		$this->wheat += $units;
	}

	public function setMetal(int $units): void {
		$this->metal += $units;
	}


}


?>
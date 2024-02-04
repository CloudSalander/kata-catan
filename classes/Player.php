<?php
class Player{
	private string $name;
	private array $resources;

	public function __construct(array $resources) {
		$this->resources = $resources;
	}

	public function getWood(): int {
		return $this->resources['wood'];
	}

	public function getWool(): int {
		return $this->resources['wool'];
	}

	public function getClay(): int {
		return $this->resources['clay'];
	}

	public function getWheat(): int {
		return $this->resources['wheat'];
	}

	public function getMetal(): int {
		return $this->resources['metal'];
	}

	public function setWood(int $units): void {
		$this->resources['wood'] += $units;
	}

	public function setWool(int $units): void {
		$this->resources['wool'] += $units;
	}

	public function setClay(int $units): void {
		$this->resources['clay'] += $units;
	}

	public function setWheat(int $units): void {
		$this->resources['wheat'] += $units;
	}

	public function setMetal(int $units): void {
		$this->resources['metal'] += $units;
	}


}


?>
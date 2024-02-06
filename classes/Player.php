<?php
/*
TODO: Decouple specific resources from Player.
TODO: Maybe separate "Menu" features from player?
*/

include_once 'Resource.php';
include_once 'resources/Road.php';
include_once 'resources/Development.php';
include_once 'resources/Town.php';
include_once 'resources/City.php';


class Player{

	private string $name;
	private array $resources;
	const BUYING_MSGS = ['Please,select the number of the option you want to select(1 to 4)',
						  '1- Road',
						  '2- Town',
						  '3- City',
						  '4- Development'];

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

	/*TO-DO: Refactor this method*/
	public function buy(): bool {
		$this->showBuyingOptions();
		$option = $this->getBuyingOption();
		if($option) {
			$buy_result = $this->pay($option);
		}
		if($buy_result) {
			$this->updateResources($buy_result);
			return true;				
		}
		return false;
	}

	private function showBuyingOptions(): void {
		foreach(Player::BUYING_MSGS as $buying_msg) {
			echo $buying_msg.PHP_EOL;
		}
	}

	private function getBuyingOption(): bool | int {
		$option = readline();
		if (is_numeric($option) && $option > 0 && $option <= 4) return intval($option);
		return false;
	}

	private function pay(int $option): bool | array {
		$resource = $this->getResource($option);
		return $resource->pay($this->resources);		
	}

	private function getResource(int $option): Resource {
		switch ($option) {
			case 1:
				$resource = new Road();
				break;
			case 2: 
				$resource = new Town();
				break;
			case 3: 
				$resource = new City();
				break;
			case 4:
				$resource = new Development();
				break;
			default:
				break;
		}
		return $resource;
	}

	private function updateResources(array $buy_result): void {
		foreach($buy_result as $key=>$resource_cost) {
			$this->resources[$key] -= $resource_cost;
		}
	}
}


?>
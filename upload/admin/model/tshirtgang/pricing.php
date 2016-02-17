<?php
class ModelTshirtgangPricing extends Model {
	public function add($data) {
	}
	public function edit($data) {
		if(isset($data['code']) && isset($data['price'])){
			$this->db->query("UPDATE " . DB_PREFIX . "tshirtgang_pricing SET price=".(float)$data['price']." WHERE code='". $data['code'] ."'");
		}
	}
	public function delete($code) {
	}
	
	public function get($data) {
		$returnval = 0;
		$pricing_data = array();
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "tshirtgang_pricing");
		foreach ($query->rows as $row) {
			$pricing_data[$row['code']] = $row;
		}
		if(isset($data['code'])){
			return $pricing_data[$data['code']]['price'];
		} elseif( isset($data['style']) && isset($data['color']) && isset($data['size']) && isset($data['shipping']) ){
			return 300.00;
		} elseif( isset($data['style']) && isset($data['color']) && isset($data['size']) ){
			return 200.00;
		} elseif( isset($data['style']) && isset($data['color']) ){ // assume regular size
			if($data['color'] == "White"){
				$returnval = $pricing_data['WhiteShirt']['price'];
			} elseif(strpos($data['color'], 'Ringer') !== false){
				$returnval = $pricing_data['RingerShirt']['price'];
			} else {
				$returnval = $pricing_data['ColorShirt']['price'];
			}
			
			if($data['style']       == "Mens Fitted"){
				$returnval += $pricing_data['MensFittedIncremental']['price'];
			} elseif($data['style'] == "Ladies"){
				$returnval += $pricing_data['LadiesIncremental']['price'];
			} elseif($data['style'] == "Hooded Pullover"){
				$returnval += $pricing_data['HoodieIncremental']['price'];
			} elseif($data['style'] == "Apron"){
				$returnval += $pricing_data['ApronIncremental']['price'];
			} elseif($data['style'] == "Vneck"){
				$returnval += $pricing_data['VneckIncremental']['price'];
			} elseif($data['style'] == "Tanktop"){
				$returnval += $pricing_data['TanktopIncremental']['price'];
			} elseif($data['style'] == "Baby One Piece"){
				$returnval += $pricing_data['BabyOnePieceIncremental']['price'];
			}
			
			return $returnval;
		} else {
			return 500.00;
		}
	}
	public function getAll() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "tshirtgang_pricing");
		foreach ($query->rows as $row) {
			$pricing_data[$row['code']] = $row['price'];
		}
		return $pricing_data;
	}
	public function getAllCodes() {
	}
}
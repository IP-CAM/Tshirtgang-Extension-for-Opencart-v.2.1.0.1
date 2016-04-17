<?php
class ModelTshirtgangProducts extends Model {
	
	//private $apparel_options;
	
	//function __construct() {
		//parent::__construct();
		//$this->apparel_options = array();
        //
		//$this->apparel_options['style'] = array();
		//$this->apparel_options['color'] = array();
		//$this->apparel_options['size'] = array();
        //
		//$this->apparel_options['style_color'] = array();
		//$this->apparel_options['style_size']  = array();
		//$this->apparel_options['color_style'] = array();
		//$this->apparel_options['color_size']  = array();
		//$this->apparel_options['size_style']  = array();
		//$this->apparel_options['size_color']  = array();
        //
		//$this->apparel_options['style_color_size']
		//$this->apparel_options['style_size_color'] = array();
		//$this->apparel_options['color_style_size'] = array();
		//$this->apparel_options['color_size_style'] = array();
		//$this->apparel_options['size_style_color'] = array();
		//$this->apparel_options['size_color_style'] = array();

		/*
		// main data
		$this->apparel_options['style_color_size'] = [
			'Standard' => [
				'Black' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
					'6 X-Large',
				],
				'White' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
					'6 X-Large',
				],
				'Charcoal Grey' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Daisy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Dark Chocolate' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Forest Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Gold' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Irish Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Light Blue' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Light Pink' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Military Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Navy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Orange' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Purple' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Red' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Royal Blue' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Sport Grey' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Tan' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Burgundy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Navy Ringer' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Black Ringer' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Red Ringer' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
			],
			'Mens Fitted' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Charcoal Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Daisy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Dark Chocolate' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Irish Green' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Light Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Military Green' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Orange' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Purple' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Ladies' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Irish Green' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Light Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Light Pink' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Hooded Pullover' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Apron' => [
				'Black' => [
					'Large',
				],
				'White' => [
					'Large',
				],
			],
			'Vneck' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Charcoal Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
			],
			'Tanktop' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Charcoal Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Kids' => [
				'Black' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'White' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Charcoal Grey' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Daisy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Dark Chocolate' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Forest Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Gold' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Irish Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Light Blue' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Light Pink' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Military Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Navy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Orange' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Purple' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Red' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Royal Blue' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Sport Grey' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Tan' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Burgundy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
			],
			'Baby One Piece' => [
				'White' => [
					'6 Months',
					'12 Months',
					'18 Months',
				],
			],
		];

		// style
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			$this->apparel_options['style'][] = $key1;
		}







		// color
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				$this->apparel_options['color'][] = $key2;
			}
		}
		$this->apparel_options['color'] = array_unique($this->apparel_options['color']);

		// size
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){
					$this->apparel_options['size'][] = $value3;
				}
			}
		}
		$this->apparel_options['size'] = array_unique($this->apparel_options['size']);

		// style-color
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			$this->apparel_options['style_color'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$this->apparel_options['style_color'][$key1][] = $key2;
				//echo "$key1 - $key2 <br>\n";
			}
		}

		// style-size
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			$this->apparel_options['style_size'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){ // $key3 is numberical, auto generated and auto increment
					$this->apparel_options['style_size'][$key1][] = $value3;
				}
			}
			$this->apparel_options['style_size'][$key1] = array_unique($this->apparel_options['style_size'][$key1]);
		}

		// color-style
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				if(!isset($this->apparel_options['color_style'][$key2])){
					$this->apparel_options['color_style'][$key2] = array();
				}
				$this->apparel_options['color_style'][$key2][] = $key1;
			}
		}

		// color-size
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				if(!isset($this->apparel_options['color_size'][$key2])){
					$this->apparel_options['color_size'][$key2] = array();
				}
				foreach($value2 as $key3 => $value3){ // $key3 is numberical, auto generated and auto increment
					$this->apparel_options['color_size'][$key2][] = $value3;
				}
				$this->apparel_options['color_size'][$key2] = array_unique($this->apparel_options['color_size'][$key2]);
			}
		}

		// size-style
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){ // $key3 is numberical, auto generated and auto increment
					if(!isset($this->apparel_options['size_style'][$value3])){
						$this->apparel_options['size_style'][$value3] = array();
					}
					$this->apparel_options['size_style'][$value3][] = $key1;
				}
			}
		}
		foreach($this->apparel_options['size_style'] as $key => $value){
			$this->apparel_options['size_style'][$key] = array_unique($this->apparel_options['size_style'][$key]);
		}

		// size-color
		foreach($this->apparel_options['style_color_size'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){ // $key3 is numberical, auto generated and auto increment
					if(!isset($this->apparel_options['size_color'][$value3])){
						$this->apparel_options['size_color'][$value3] = array();
					}
					$this->apparel_options['size_color'][$value3][] = $key2;
				}
			}
		}
		foreach($this->apparel_options['size_color'] as $key => $value){
			$this->apparel_options['size_color'][$key] = array_unique($this->apparel_options['size_color'][$key]);
		}

		//style-size-color
		foreach($this->apparel_options['style_size'] as $key1 => $value1){
			$this->apparel_options['style_size_color'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$this->apparel_options['style_size_color'][$key1][$value2] = array();
				foreach($this->apparel_options['color'] as $key3 => $value3){
					if(in_array($value2, $this->apparel_options['style_color_size'][$key1][$value3])){ // note: style_color_size
						$this->apparel_options['style_size_color'][$key1][$value2][]=$value3;
					}
				}
			}
		}


		//color-style-size
		foreach($this->apparel_options['color_style'] as $key1 => $value1){
			$this->apparel_options['color_style_size'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$this->apparel_options['color_style_size'][$key1][$value2] = array();
				foreach($this->apparel_options['size'] as $key3 => $value3){
					if(in_array($value3, $this->apparel_options['style_color_size'][$value2][$key1])){
						$this->apparel_options['color_style_size'][$key1][$value2][] = $value3;
					}
				}
			}
		}

		//color-size-style
		foreach($this->apparel_options['color_size'] as $key1 => $value1){
			$this->apparel_options['color_size_style'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$this->apparel_options['color_size_style'][$key1][$value2] = array();
				foreach($this->apparel_options['style'] as $key3 => $value3){
					if(isset($this->apparel_options['style_color_size'][$value3][$key1]) && in_array($value2, $this->apparel_options['style_color_size'][$value3][$key1])){
						$this->apparel_options['color_size_style'][$key1][$value2][] = $value3;
					}
				}
			}
		}

		//size-style-color
		foreach($this->apparel_options['size_style'] as $key1 => $value1){
			$this->apparel_options['size_style_color'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$this->apparel_options['size_style_color'][$key1][$value2] = array();
				foreach($this->apparel_options['color'] as $key3 => $value3){
					if(isset($this->apparel_options['style_color_size'][$value2][$value3]) && in_array($key1, $this->apparel_options['style_color_size'][$value2][$value3])){
						$this->apparel_options['size_style_color'][$key1][$value2][] = $value3;
					}
				}
			}
		}

		//size-color-style
		foreach($this->apparel_options['size_color'] as $key1 => $value1){
			$this->apparel_options['size_color_style'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$this->apparel_options['size_color_style'][$key1][$value2] = array();
				foreach($this->apparel_options['style'] as $key3 => $value3){
					if(isset($this->apparel_options['style_color_size'][$value3][$value2]) && in_array($key1, $this->apparel_options['style_color_size'][$value3][$value2])){
						$this->apparel_options['size_color_style'][$key1][$value2][] = $value3;
					}
				}
			}
		}
		
		**/
	//}

	public function isTsg($product_id = 0){
		$product_data = $this->get($product_id);
		if(isset($product_data['id'])) {
			return true;
		} else {
			return false;
		}
	}

	public function get($product_id = 0) {
		$product_data = array();
		$sql  = "SELECT ";
		$sql .= " tsgp.id,    ";
		$sql .= " tsgp.title, ";
		$sql .= " tsgp.color, ";
		$sql .= " tsgp.style, ";
		$sql .= " tsgp.datetime_retrieved, ";
		$sql .= " ocp.product_id, ";
		$sql .= " ocp.status ";
		$sql .= "FROM ";
		$sql .= " " . DB_PREFIX . "tshirtgang_products tsgp ";
		$sql .= " LEFT JOIN " . DB_PREFIX . "product ocp ON ";
		$sql .= " tsgp.product_id = ocp.product_id ";
		$sql .= "WHERE ocp.product_id=".$product_id;
		$query = $this->db->query($sql);
		$product_data = $query->rows;
		if(isset($product_data[0])){
			return $product_data[0];
		} else {
			return array();
		}
	}

	public function optionIds($product_id = 0) {
		$option_ids = array();
		$option_descriptions = array();

		$sql  = "SELECT ";
		$sql .= "  ocpo.product_option_id, ";
		$sql .= "  ocod.name ";
		$sql .= "FROM " . DB_PREFIX . "product_option ocpo ";
		$sql .= "LEFT JOIN " . DB_PREFIX . "option_description ocod ";
		$sql .= "  ON ocod.option_id = ocpo.option_id ";
		$sql .= "WHERE ";
		$sql .= "    ocod.language_id=1 ";
		$sql .= "  AND ";
		$sql .= "    ocpo.product_id=".$product_id." "; 
		$sql .= "  AND ";
		$sql .= "    ocod.name IN ('Tshirt Size', 'Tshirt Color', 'Tshirt Style') ";
		$query = $this->db->query($sql);
		foreach ($query->rows as $result) {
			$option_ids[$result['name']] = (int)$result['product_option_id'];
		}
		//$option_ids['sql'] = $sql;
		return $option_ids;
		
	}

	public function options(){
		$apparel_options = array();
        
		$apparel_options['styles'] = array();
		$apparel_options['colors'] = array();
		$apparel_options['sizes'] = array();
        
		$apparel_options['styles_colors'] = array();
		$apparel_options['styles_sizes']  = array();
		$apparel_options['colors_styles'] = array();
		$apparel_options['colors_sizes']  = array();
		$apparel_options['sizes_styles']  = array();
		$apparel_options['sizes_colors']  = array();
        
		$apparel_options['styles_colors_sizes'] = array();
		$apparel_options['styles_sizes_colors'] = array();
		$apparel_options['colors_styles_sizes'] = array();
		$apparel_options['colors_sizes_styles'] = array();
		$apparel_options['sizes_styles_colors'] = array();
		$apparel_options['sizes_colors_styles'] = array();

		// main data
		$apparel_options['styles_colors_sizes'] = [
			'Standard' => [
				'Black' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
					'6 X-Large',
				],
				'White' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
					'6 X-Large',
				],
				'Charcoal Grey' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Daisy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Dark Chocolate' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Forest Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Gold' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Irish Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Light Blue' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Light Pink' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Military Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Navy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Orange' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Purple' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Red' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Royal Blue' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Sport Grey' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
					'4 X-Large',
					'5 X-Large',
				],
				'Tan' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Burgundy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Navy Ringer' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Black Ringer' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Red Ringer' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
			],
			'Mens Fitted' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Charcoal Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Daisy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Dark Chocolate' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Irish Green' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Light Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Military Green' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Orange' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Purple' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Ladies' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Irish Green' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Light Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Light Pink' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Hooded Pullover' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Apron' => [
				'Black' => [
					'Large',
				],
				'White' => [
					'Large',
				],
			],
			'Vneck' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Charcoal Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
					'3 X-Large',
				],
			],
			'Tanktop' => [
				'Black' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'White' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Charcoal Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Navy' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Red' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Royal Blue' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
				'Sport Grey' => [
					'Small',
					'Medium',
					'Large',
					'X-Large',
					'2 X-Large',
				],
			],
			'Kids' => [
				'Black' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'White' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Charcoal Grey' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Daisy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Dark Chocolate' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Forest Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Gold' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Irish Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Light Blue' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Light Pink' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Military Green' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Navy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Orange' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Purple' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Red' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Royal Blue' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Sport Grey' => [
					'2T',
					'3T',
					'4T',
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Tan' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
				'Burgundy' => [
					'X-Small (Youth)',
					'Small (Youth)',
					'Medium (Youth)',
				],
			],
			'Baby One Piece' => [
				'White' => [
					'6 Months',
					'12 Months',
					'18 Months',
				],
			],
		];

		// style
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			$apparel_options['styles'][] = $key1;
		}
        
		// color
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				$apparel_options['colors'][] = $key2;
			}
		}
		$apparel_options['colors'] = array_unique($apparel_options['colors']);
        
		// size
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){
					$apparel_options['sizes'][] = $value3;
				}
			}
		}
		$apparel_options['sizes'] = array_unique($apparel_options['sizes']);
        
		// style-color
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			$apparel_options['styles_colors'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$apparel_options['styles_colors'][$key1][] = $key2;
			}
		}
        
		// style-size
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			$apparel_options['styles_sizes'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){
					$apparel_options['styles_sizes'][$key1][] = $value3;
				}
			}
			$apparel_options['styles_sizes'][$key1] = array_unique($apparel_options['styles_sizes'][$key1]);
		}
        
		// color-style
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				if(!isset($apparel_options['colors_styles'][$key2])){
					$apparel_options['colors_styles'][$key2] = array();
				}
				$apparel_options['colors_styles'][$key2][] = $key1;
			}
		}
        
		// color-size
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				if(!isset($apparel_options['colors_sizes'][$key2])){
					$apparel_options['colors_sizes'][$key2] = array();
				}
				foreach($value2 as $key3 => $value3){ 
					$apparel_options['colors_sizes'][$key2][] = $value3;
				}
				$apparel_options['colors_sizes'][$key2] = array_unique($apparel_options['colors_sizes'][$key2]);
			}
		}
        
		// size-style
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){
					if(!isset($apparel_options['sizes_styles'][$value3])){
						$apparel_options['sizes_styles'][$value3] = array();
					}
					$apparel_options['sizes_styles'][$value3][] = $key1;
				}
			}
		}
		foreach($apparel_options['sizes_styles'] as $key => $value){
			$apparel_options['sizes_styles'][$key] = array_unique($apparel_options['sizes_styles'][$key]);
		}
        
		// size-color
		foreach($apparel_options['styles_colors_sizes'] as $key1 => $value1){
			foreach($value1 as $key2 => $value2){
				foreach($value2 as $key3 => $value3){
					if(!isset($apparel_options['sizes_colors'][$value3])){
						$apparel_options['sizes_colors'][$value3] = array();
					}
					$apparel_options['sizes_colors'][$value3][] = $key2;
				}
			}
		}
		foreach($apparel_options['sizes_colors'] as $key => $value){
			$apparel_options['sizes_colors'][$key] = array_unique($apparel_options['sizes_colors'][$key]);
		}
        
		//style-size-color
		foreach($apparel_options['styles_sizes'] as $key1 => $value1){
			$apparel_options['styles_sizes_colors'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$apparel_options['styles_sizes_colors'][$key1][$value2] = array();
				foreach($apparel_options['colors'] as $key3 => $value3){
					if(isset($apparel_options['styles_colors_sizes'][$key1][$value3]) && in_array($value2, $apparel_options['styles_colors_sizes'][$key1][$value3])){
						$apparel_options['styles_sizes_colors'][$key1][$value2][]=$value3;
					}
				}
			}
		}
        
		//color-style-size
		foreach($apparel_options['colors_styles'] as $key1 => $value1){
			$apparel_options['colors_styles_sizes'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$apparel_options['colors_styles_sizes'][$key1][$value2] = array();
				foreach($apparel_options['sizes'] as $key3 => $value3){
					if(in_array($value3, $apparel_options['styles_colors_sizes'][$value2][$key1])){
						$apparel_options['colors_styles_sizes'][$key1][$value2][] = $value3;
					}
				}
			}
		}
        
		//color-size-style
		foreach($apparel_options['colors_sizes'] as $key1 => $value1){
			$apparel_options['colors_sizes_styles'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$apparel_options['colors_sizes_styles'][$key1][$value2] = array();
				foreach($apparel_options['styles'] as $key3 => $value3){
					if(isset($apparel_options['styles_colors_sizes'][$value3][$key1]) && in_array($value2, $apparel_options['styles_colors_sizes'][$value3][$key1])){
						$apparel_options['colors_sizes_styles'][$key1][$value2][] = $value3;
					}
				}
			}
		}
        
		//size-style-color
		foreach($apparel_options['sizes_styles'] as $key1 => $value1){
			$apparel_options['sizes_styles_colors'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$apparel_options['sizes_styles_colors'][$key1][$value2] = array();
				foreach($apparel_options['colors'] as $key3 => $value3){
					if(isset($apparel_options['styles_colors_sizes'][$value2][$value3]) && in_array($key1, $apparel_options['styles_colors_sizes'][$value2][$value3])){
						$apparel_options['sizes_styles_colors'][$key1][$value2][] = $value3;
					}
				}
			}
		}
        
		//size-color-style
		foreach($apparel_options['sizes_colors'] as $key1 => $value1){
			$apparel_options['sizes_colors_styles'][$key1] = array();
			foreach($value1 as $key2 => $value2){
				$apparel_options['sizes_colors_styles'][$key1][$value2] = array();
				foreach($apparel_options['styles'] as $key3 => $value3){
					if(isset($apparel_options['styles_colors_sizes'][$value3][$value2]) && in_array($key1, $apparel_options['styles_colors_sizes'][$value3][$value2])){
						$apparel_options['sizes_colors_styles'][$key1][$value2][] = $value3;
					}
				}
			}
		}
		return $apparel_options;
	}

	
	//public function colorOptions(){
	//	return array(
	//	'White',
	//	'Black',
	//	'Royal Blue',
	//	'Sport Grey',
	//	'Navy',
	//	'Daisy',
	//	'Gold',
	//	'Irish Green',
	//	'Tan',
	//	'Charcoal Grey',
	//	'Dark Chocolate',
	//	'Forest Green',
	//	'Military Green',
	//	'Orange',
	//	'Purple',
	//	'Red',
	//	'Burgundy',
	//	'Light Blue',
	//	'Light Pink',
	//	//'Navy Ringer',
	//	//'Black Ringer',
	//	//'Red Ringer'
	//	);
	//}

	//public function styleOptions(){
	//	return array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies',
	//		'Hooded Pullover',
	//		'Apron',
	//		'Vneck',
	//		'Tanktop',
	//		//'Kids',
	//		'Baby One Piece'
	//	);
	//}

	//public function sizeOptions(){
	//	return array(
	//	'X-Small (Youth)',
	//	'Small (Youth)',
	//	'Medium (Youth)',
	//	'Small',
	//	'Medium',
	//	'Large',
	//	'X-Large',
	//	'2 X-Large',
	//	'3 X-Large',
	//	//'4 X-Large',
	//	//'5 X-Large',
	//	//'6 X-Large',
	//	//'2T',
	//	//'3T',
	//	//'4T',
	//	'6 Months',
	//	'12 Months',
	//	'18 Months'
	//	);
	//}

	//public function options(){
	//	$all_options = array();
	//	$colors = $this->colorOptions();
	//	$styles = $this->styleOptions();
	//	$sizes  = $this->sizeOptions();
	//	
	//	$all_options['styles_colors']  = array();
	//	$all_options['styles_sizes']   = array();
	//	$all_options['colors_styles'] = array();
	//	//$all_options['all'] = $this->apparel_options;
	//	/////////
	//	$all_options['styles_colors']['Standard'] = array(
	//		'White',
	//		'Black',
	//		'Royal Blue',
	//		'Sport Grey',
	//		'Navy',
	//		'Daisy',
	//		'Gold',
	//		'Irish Green',
	//		'Tan',
	//		'Charcoal Grey',
	//		'Dark Chocolate',
	//		'Forest Green',
	//		'Military Green',
	//		'Orange',
	//		'Purple',
	//		'Red',
	//		'Burgundy',
	//		'Light Blue',
	//		'Light Pink',
	//		//'Navy Ringer',
	//		//'Black Ringer',
	//		//'Red Ringer'
	//	);
    //
	//	$all_options['styles_colors']['Mens Fitted'] = array(
	//		'White',
	//		'Black',
	//		'Royal Blue',
	//		'Sport Grey',
	//		'Navy',
	//		'Daisy',
	//		'Irish Green',
	//		'Charcoal Grey',
	//		'Dark Chocolate',
	//		'Military Green',
	//		'Orange',
	//		'Purple',
	//		'Red',
	//		'Light Blue',
	//	);
    //
	//	$all_options['styles_colors']['Ladies'] = array(
	//		'White',
	//		'Black',
	//		'Royal Blue',
	//		'Sport Grey',
	//		'Navy',
	//		'Irish Green',
	//		'Red',
	//		'Light Blue',
	//		'Light Pink'
	//	);
    //
	//	$all_options['styles_colors']['Hooded Pullover'] = array(
	//		'White',
	//		'Black',
	//		'Royal Blue',
	//		'Sport Grey',
	//		'Navy',
	//		'Red'
	//	);
    //
	//	$all_options['styles_colors']['Apron'] = array(
	//		'White',
	//		'Black'
	//	);
    //
	//	$all_options['styles_colors']['Vneck'] = array(
	//		'White',
	//		'Black',
	//		'Sport Grey',
	//		'Navy',
	//		'Charcoal Grey',
	//		'Red'
	//	);
    //
	//	$all_options['styles_colors']['Tanktop'] = array(
	//		'White',
	//		'Black',
	//		'Royal Blue',
	//		'Sport Grey',
	//		'Navy',
	//		'Red'
	//	);
    //
	//	//$all_options['styles_colors']['Kids'] = array(
	//	//	'White',
	//	//	'Black',
	//	//	'Royal Blue',
	//	//	'Sport Grey',
	//	//	'Red'
	//	//);
    //
	//	$all_options['styles_colors']['Baby One Piece'] = array(
	//		'White'
	//	);
    //
	//	///////
	//	$all_options['styles_sizes']['Standard'] = array(
	//		'X-Small (Youth)',
	//		'Small (Youth)',
	//		'Medium (Youth)',
	//		'Small',
	//		'Medium',
	//		'Large',
	//		'X-Large',
	//		'2 X-Large',
	//		'3 X-Large',
	//		//'4 X-Large',
	//		//'5 X-Large',
	//		//'6 X-Large'
	//	);
    //
	//	$all_options['styles_sizes']['Mens Fitted'] = array(
	//		'Small',
	//		'Medium',
	//		'Large',
	//		'X-Large',
	//		'2 X-Large'
	//	);
    //
	//	$all_options['styles_sizes']['Ladies'] = array(
	//		'Small',
	//		'Medium',
	//		'Large',
	//		'X-Large',
	//		'2 X-Large'
	//	);
    //
	//	$all_options['styles_sizes']['Hooded Pullover'] = array(
	//		'Small',
	//		'Medium',
	//		'Large',
	//		'X-Large',
	//		'2 X-Large'
	//	);
    //
	//	$all_options['styles_sizes']['Vneck'] = array(
	//		'Small',
	//		'Medium',
	//		'Large',
	//		'X-Large',
	//		'2 X-Large'
	//	);
    //
	//	$all_options['styles_sizes']['Tanktop'] = array(
	//		'Small',
	//		'Medium',
	//		'Large',
	//		'X-Large',
	//		'2 X-Large'
	//	);
    //
	//	$all_options['styles_sizes']['Apron'] = array(
	//		'Large'
	//	);
    //
	//	//$all_options['styles_sizes']['Kids'] = array(
	//	//	'2T',
	//	//	'3T',
	//	//	'4T'
	//	//);
    //
	//	$all_options['styles_sizes']['Baby One Piece'] = array(
	//		'6 Months',
	//		'12 Months',
	//		'18 Months'
	//	);
	//	////////
	//	$all_options['colors_styles']['White'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies',
	//		'Hooded Pullover',
	//		'Apron',
	//		'Vneck',
	//		'Tanktop',
	//		//'Kids',
	//		'Baby One Piece'
	//	);
	//	
	//	$all_options['colors_styles']['Black'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies',
	//		'Hooded Pullover',
	//		'Apron',
	//		'Vneck',
	//		'Tanktop',
	//		//'Kids'
	//	);
    //
	//	$all_options['colors_styles']['Red'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies',
	//		'Hooded Pullover',
	//		'Vneck',
	//		'Tanktop',
	//		//'Kids'
	//	);
    //
	//	$all_options['colors_styles']['Sport Grey'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies',
	//		'Hooded Pullover',
	//		'Vneck',
	//		'Tanktop',
	//		//'Kids'
	//	);
    //
	//	$all_options['colors_styles']['Royal Blue'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies',
	//		'Hooded Pullover',
	//		'Tanktop',
	//		//'Kids'
	//	);
    //
	//	$all_options['colors_styles']['Navy'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies',
	//		'Hooded Pullover',
	//		'Vneck',
	//		'Tanktop'
	//	);
    //
	//	$all_options['colors_styles']['Charcoal Grey'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Vneck',
	//		'Tanktop'
	//	);
    //
	//	$all_options['colors_styles']['Irish Green'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies'
	//	);
    //
	//	$all_options['colors_styles']['Light Blue'] = array(
	//		'Standard',
	//		'Mens Fitted',
	//		'Ladies'
	//	);
    //
	//	$all_options['colors_styles']['Daisy'] = array(
	//		'Standard',
	//		'Mens Fitted'
	//	);
    //
	//	$all_options['colors_styles']['Dark Chocolate'] = array(
	//		'Standard',
	//		'Mens Fitted'
	//	);
    //
	//	$all_options['colors_styles']['Military Green'] = array(
	//		'Standard',
	//		'Mens Fitted'
	//	);
    //
	//	$all_options['colors_styles']['Orange'] = array(
	//		'Standard',
	//		'Mens Fitted'
	//	);
    //
	//	$all_options['colors_styles']['Purple'] = array(
	//		'Standard',
	//		'Mens Fitted'
	//	);
    //
	//	$all_options['colors_styles']['Light Pink'] = array(
	//		'Standard',
	//		'Ladies'
	//	);
    //
	//	$all_options['colors_styles']['Gold'] = array(
	//		'Standard'
	//	);
    //
	//	$all_options['colors_styles']['Tan'] = array(
	//		'Standard'
	//	);
    //
	//	$all_options['colors_styles']['Forest Green'] = array(
	//		'Standard'
	//	);
    //
	//	$all_options['colors_styles']['Burgundy'] = array(
	//		'Standard'
	//	);
    //
	//	//$all_options['colors_styles']['Navy Ringer'] = array(
	//	//	'Standard'
	//	//);
    //
	//	//$all_options['colors_styles']['Black Ringer'] = array(
	//	//	'Standard'
	//	//);
    //
	//	//$all_options['colors_styles']['Red Ringer'] = array(
	//	//	'Standard'
	//	//);
    //
	//	return $all_options;
	//}

}
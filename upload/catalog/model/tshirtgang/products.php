<?php
class ModelTshirtgangProducts extends Model {
	
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
		$sql .= " CONCAT('tsg_', tsgp.id) = ocp.mpn ";
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
	
	public function colorOptions(){
		return array(
		'White',
		'Black',
		'Royal Blue',
		'Sport Grey',
		'Navy',
		'Daisy',
		'Gold',
		'Irish Green',
		'Tan',
		'Charcoal Grey',
		'Dark Chocolate',
		'Forest Green',
		'Military Green',
		'Orange',
		'Purple',
		'Red',
		'Burgundy',
		'Light Blue',
		'Light Pink',
		//'Navy Ringer',
		//'Black Ringer',
		//'Red Ringer'
		);
	}

	public function styleOptions(){
		return array(
			'Standard',
			'Mens Fitted',
			'Ladies',
			'Hooded Pullover',
			'Apron',
			'Vneck',
			'Tanktop',
			//'Kids',
			'Baby One Piece'
		);
	}

	public function sizeOptions(){
		return array(
		'X-Small (Youth)',
		'Small (Youth)',
		'Medium (Youth)',
		'Small',
		'Medium',
		'Large',
		'X-Large',
		'2 X-Large',
		'3 X-Large',
		//'4 X-Large',
		//'5 X-Large',
		//'6 X-Large',
		//'2T',
		//'3T',
		//'4T',
		'6 Months',
		'12 Months',
		'18 Months'
		);
	}

	public function options(){
		$all_options = array();
		$colors = $this->colorOptions();
		$styles = $this->styleOptions();
		$sizes  = $this->sizeOptions();
		
		$all_options['styles_colors']  = array();
		$all_options['styles_sizes']   = array();
		$all_options['colors_styles'] = array();
		/////////
		$all_options['styles_colors']['Standard'] = array(
			'White',
			'Black',
			'Royal Blue',
			'Sport Grey',
			'Navy',
			'Daisy',
			'Gold',
			'Irish Green',
			'Tan',
			'Charcoal Grey',
			'Dark Chocolate',
			'Forest Green',
			'Military Green',
			'Orange',
			'Purple',
			'Red',
			'Burgundy',
			'Light Blue',
			'Light Pink',
			//'Navy Ringer',
			//'Black Ringer',
			//'Red Ringer'
		);

		$all_options['styles_colors']['Mens Fitted'] = array(
			'White',
			'Black',
			'Royal Blue',
			'Sport Grey',
			'Navy',
			'Daisy',
			'Irish Green',
			'Charcoal Grey',
			'Dark Chocolate',
			'Military Green',
			'Orange',
			'Purple',
			'Red',
			'Light Blue',
		);

		$all_options['styles_colors']['Ladies'] = array(
			'White',
			'Black',
			'Royal Blue',
			'Sport Grey',
			'Navy',
			'Irish Green',
			'Red',
			'Light Blue',
			'Light Pink'
		);

		$all_options['styles_colors']['Hooded Pullover'] = array(
			'White',
			'Black',
			'Royal Blue',
			'Sport Grey',
			'Navy',
			'Red'
		);

		$all_options['styles_colors']['Apron'] = array(
			'White',
			'Black'
		);

		$all_options['styles_colors']['Vneck'] = array(
			'White',
			'Black',
			'Sport Grey',
			'Navy',
			'Charcoal Grey',
			'Red'
		);

		$all_options['styles_colors']['Tanktop'] = array(
			'White',
			'Black',
			'Royal Blue',
			'Sport Grey',
			'Navy',
			'Red'
		);

		//$all_options['styles_colors']['Kids'] = array(
		//	'White',
		//	'Black',
		//	'Royal Blue',
		//	'Sport Grey',
		//	'Red'
		//);

		$all_options['styles_colors']['Baby One Piece'] = array(
			'White'
		);

		///////
		$all_options['styles_sizes']['Standard'] = array(
			'X-Small (Youth)',
			'Small (Youth)',
			'Medium (Youth)',
			'Small',
			'Medium',
			'Large',
			'X-Large',
			'2 X-Large',
			'3 X-Large',
			//'4 X-Large',
			//'5 X-Large',
			//'6 X-Large'
		);

		$all_options['styles_sizes']['Mens Fitted'] = array(
			'Small',
			'Medium',
			'Large',
			'X-Large',
			'2 X-Large'
		);

		$all_options['styles_sizes']['Ladies'] = array(
			'Small',
			'Medium',
			'Large',
			'X-Large',
			'2 X-Large'
		);

		$all_options['styles_sizes']['Hooded Pullover'] = array(
			'Small',
			'Medium',
			'Large',
			'X-Large',
			'2 X-Large'
		);

		$all_options['styles_sizes']['Vneck'] = array(
			'Small',
			'Medium',
			'Large',
			'X-Large',
			'2 X-Large'
		);

		$all_options['styles_sizes']['Tanktop'] = array(
			'Small',
			'Medium',
			'Large',
			'X-Large',
			'2 X-Large'
		);

		$all_options['styles_sizes']['Apron'] = array(
			'Large'
		);

		//$all_options['styles_sizes']['Kids'] = array(
		//	'2T',
		//	'3T',
		//	'4T'
		//);

		$all_options['styles_sizes']['Baby One Piece'] = array(
			'6 Months',
			'12 Months',
			'18 Months'
		);
		////////
		$all_options['colors_styles']['White'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies',
			'Hooded Pullover',
			'Apron',
			'Vneck',
			'Tanktop',
			//'Kids',
			'Baby One Piece'
		);
		
		$all_options['colors_styles']['Black'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies',
			'Hooded Pullover',
			'Apron',
			'Vneck',
			'Tanktop',
			//'Kids'
		);

		$all_options['colors_styles']['Red'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies',
			'Hooded Pullover',
			'Vneck',
			'Tanktop',
			//'Kids'
		);

		$all_options['colors_styles']['Sport Grey'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies',
			'Hooded Pullover',
			'Vneck',
			'Tanktop',
			//'Kids'
		);

		$all_options['colors_styles']['Royal Blue'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies',
			'Hooded Pullover',
			'Tanktop',
			//'Kids'
		);

		$all_options['colors_styles']['Navy'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies',
			'Hooded Pullover',
			'Vneck',
			'Tanktop'
		);

		$all_options['colors_styles']['Charcoal Grey'] = array(
			'Standard',
			'Mens Fitted',
			'Vneck',
			'Tanktop'
		);

		$all_options['colors_styles']['Irish Green'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies'
		);

		$all_options['colors_styles']['Light Blue'] = array(
			'Standard',
			'Mens Fitted',
			'Ladies'
		);

		$all_options['colors_styles']['Daisy'] = array(
			'Standard',
			'Mens Fitted'
		);

		$all_options['colors_styles']['Dark Chocolate'] = array(
			'Standard',
			'Mens Fitted'
		);

		$all_options['colors_styles']['Military Green'] = array(
			'Standard',
			'Mens Fitted'
		);

		$all_options['colors_styles']['Orange'] = array(
			'Standard',
			'Mens Fitted'
		);

		$all_options['colors_styles']['Purple'] = array(
			'Standard',
			'Mens Fitted'
		);

		$all_options['colors_styles']['Light Pink'] = array(
			'Standard',
			'Ladies'
		);

		$all_options['colors_styles']['Gold'] = array(
			'Standard'
		);

		$all_options['colors_styles']['Tan'] = array(
			'Standard'
		);

		$all_options['colors_styles']['Forest Green'] = array(
			'Standard'
		);

		$all_options['colors_styles']['Burgundy'] = array(
			'Standard'
		);

		//$all_options['colors_styles']['Navy Ringer'] = array(
		//	'Standard'
		//);

		//$all_options['colors_styles']['Black Ringer'] = array(
		//	'Standard'
		//);

		//$all_options['colors_styles']['Red Ringer'] = array(
		//	'Standard'
		//);

		return $all_options;
	}

}
<?php
class ControllerModuleTshirtgangSendorder extends Controller {
	private $error = array();

	public function index() {
		
	}

	public function send(){
		$this->load->model('setting/setting');
		$tsg_setting = $this->model_setting_setting->getSetting('tshirtgang');
		$api_key  = $tsg_setting['tshirtgang_api_key'];
		$api_id   = $tsg_setting['tshirtgang_api_id'];
		$api_url  = "https://www.tshirtgang.com/api/CreateMultipleOrder/";

		$this->load->model('tshirtgang/products');
		
		$shipping_details = $this->session->data['shipping_address'];

		$cust_name = $shipping_details['firstname']." ".$shipping_details['lastname'];
		$address1 = $shipping_details['address_1'];
		$address2 = $shipping_details['address_2'];
		$city = $shipping_details['city'];
		$zip_code = $shipping_details['postcode'];
		$state_province = $shipping_details['zone'];
		$country = $shipping_details['country'];
		
		$this->load->model('account/customer');
		$phone_number = $this->model_account_customer->getCustomer($this->session->data['customer_id']);
		$phone_number = $phone_number['telephone'];
		
		$priorityShipping = $this->session->data['shipping_method']['code']=="apparelrush.apparelrush"?'1':'0';

		$tsg_sku = "";
		$size = "";
		$style = "";
		$color = "";
		$qty = "";

		$XML  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
			<OrderForm>
				<Auth>
						<key>$api_key</key>
				</Auth>";


		$products = $this->cart->getProducts();
		foreach($products as $product){
			$tsg_sku = $this->model_tshirtgang_products->get($product["product_id"]);
			$tsg_sku = $tsg_sku["id"];
			$qty     = $product["quantity"];
			$comment  = $this->session->data['comment'];
			$comment .= " - Opencart order for ($qty) - ".$product["name"];
			$comment  = str_replace('&', '&amp;',$comment); // replace offending & to &amp
			foreach($product['option'] as $option){
				if($option['name'] == 'Tshirt Style'){
					$style = $option["value"];
					if($style == 'Vneck'){
						$style = 'V-neck';
					}
				} elseif($option['name'] == 'Tshirt Size'){
					$size = $option["value"];
				} elseif($option['name'] == 'Tshirt Color'){
					$color = $option["value"];;
				}
			}

			$XML .= "<Order> 
						<fullname>$cust_name</fullname>
						<address1>$address1</address1>
						<address2>$address2</address2>
						<city>$city</city>
						<postal>$zip_code</postal>
						<state>$state_province</state>
						<country>$country</country>
						<phonenumber>$phone_number</phonenumber>
						<sku>$tsg_sku</sku>
						<size>$size</size>
						<style>$style</style>
						<color>$color</color>
						<quantity>$qty</quantity>
						<priorityShipping>$priorityShipping</priorityShipping>
						<comments>$comment</comments>
				</Order>";
		}
		$XML .= "</OrderForm>";

		$port = 443; //($port == null ? (preg_match("/^https/", $url) ? 443 : 80) : $port);
		$ch = curl_init(); // initialize curl handle
		curl_setopt($ch, CURLOPT_URL, $api_url); // set url to post to
		curl_setopt($ch, CURLOPT_FAILONERROR, 1); // Fail on errors
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // allow redirects
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
		curl_setopt($ch, CURLOPT_PORT, $port); //Set the port number
		curl_setopt($ch, CURLOPT_TIMEOUT, 15); // times out after 15s
		curl_setopt($ch, CURLOPT_POSTFIELDS, $XML); // add POST fields
		//curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		if($port==443) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		}
		$api_response = curl_exec($ch);
		//echo "<pre>";var_dump(htmlentities($api_response));echo "</pre>";die;
		curl_close($ch);
	}

}
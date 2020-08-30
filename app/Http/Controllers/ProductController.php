<?php

namespace App\Http\Controllers;

use App\Product;
use App\Seller;
use Illuminate\Http\Request;
use Image;
use Validator;
use Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        str_replace(" ","+",$request->prod_img);

        $response = array();
        $inserted = Product::create([
            'asin' => $request->asin,
            'category' => $request->prod_category,
            'title' => $request->prod_name,
            'brand' => $request->prod_brand,
            'description' =>$request->prod_desc,
            'image' => str_replace(" ","+",$request->prod_img),
            'price' => $request->prod_price,
        ]);
        if ($inserted) {
            $response['error'] = false;
            $response['success_msg'] = "Product Added Successfully";
        }else{
            $response['error'] = true;
            $response['error_msg'] = "Something Went Wrong";
        }
        return $response;
    }
    public function csvStore($data){
        
        $response = array();
        $inserted = Product::create([
            'asin' => $data['asin'],
            'category' =>$data['prod_category'],
            'title' => $data['prod_title'],
            'brand' => $data['prod_brand'],
            'description' => $data['prod_desc'],
            'image' => str_replace(" ","+",$data['prod_img']),
            'price' => $data['prod_price'],
        ]);
        if ($inserted) {
            $response['error'] = 0;
        }else{
            $response['error'] = 1;
        }
        echo "<script>alert('1')</script>";
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    // return add product view to admin
    public function showAddProductForm(){
        
        return view('admin.add_product');
    }

    public function submitFetchAddProduct(Request $request){
        
        $response = array();
         $product_details = $this->fetchProduct($request->asin_n);
         //echo $product_details;exit;
         json_encode($product_details);
         
         /*if($product_data['error'] == false){
            switch ($request->seller) {
                case 'AZ':
                        $asin = $request->asin_n;
                        $title = $product_data['result'][0]['title'];
                        $ratings = $product_data['result'][0]['reviews']['rating'];
                        $price = $product_data['result'][0]['price']['current_price'];
                        $image = $product_data['result'][0]['images'][0];
                        $brand = $product_data['result'][0]['brand'];
                        $soldBy = $product_data['result'][0]['soldBy'];
                        $seller_code = $request->seller;
                        $product = array('title' => $title,'ratings' => $ratings,'price' => $price,'image' => $image,'brand' => $brand,'soldBy' => $soldBy,'seller_code' => $seller_code,'asin' => $asin);
                        $response['error'] = false;
                        $response['product_data'] = $product;      
                        $response['success_msg'] = "<div class='alert alert-success'>Product Fetched Succesfully</div>";          
                    break;
                
                default:
                    # code...
                    break;
            }
        }else{
            $response['error'] = true;
            $response['error_msg'] = "<div class='alert alert-danger'>Invalid ASIN number</div>";
        }*/
      // echo json_encode($response);
    }

    /*fake product data for api testing
    public function fetchFakeProducts($ASIN){
        switch ($ASIN) {
            case 'B08CP1WX55':
                $response = '{"result":[{"title":"US POLO Analog Grey Dial Men\'s Watch-USWAT0035","url":"https://www.amazon.in/dp/B08CP1WX55","reviews":{"total_reviews":0,"rating":0,"answered_questions":0},"price":{"current_price":2,"discounted":true,"before_price":4,"savings_amount":2,"savings_percent":"1,844.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/41rGvxCwPwL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31UhB80f7YL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31PgPN6sGFL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/21Kv5vFQSkL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/214eJmKC8cL._AC_SY879_.jpg"],"storeID":"","brand":"Brand: US POLO","soldBy":"Cloudtail India","fulfilledBy":"Amazon","qtyPerOrder":5,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B083ZJ71DW':
                $response = '{"result":[{"title":"Titan Athleisure Analog Blue Dial Men\'s Watch-90118QP01 / 90118QP01","url":"https://www.amazon.in/dp/B083ZJ71DW","reviews":{"total_reviews":0,"rating":0,"answered_questions":0},"price":{"current_price":7,"discounted":false,"before_price":7,"savings_amount":0,"savings_percent":0},"images":["https://images-na.ssl-images-amazon.com/images/I/41gbWAGNpuL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41Q72fY1hUL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41PaOaxW9pL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31eP%2BV31XVL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41RThn45SDL._AC_SY879_.jpg"],"storeID":"","brand":"Visit the Titan Store","soldBy":"Cloudtail India","fulfilledBy":"Amazon","qtyPerOrder":30,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B07X4R63DF':
                $response = '{"result":[{"title":"Redmi 8A Dual (Sea Blue, 2GB RAM, 32GB Storage) – Dual Cameras & 5,000 mAH Battery","url":"https://www.amazon.in/dp/B07X4R63DF","reviews":{"total_reviews":11221,"rating":"4.0","answered_questions":1000},"price":{"current_price":0,"discounted":true,"before_price":8,"savings_amount":8,"savings_percent":"1,000.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/41nA%2BO7wq2L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41JNHz0NM8L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41-sMljU86L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31RaBzsxeiL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31EHhdwaQNL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/21I8Sj6Gx2L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/216ItWxYHPL._AC_SY879_.jpg"],"storeID":"","brand":"Brand: Redmi","soldBy":"Appario Retail Private Ltd","fulfilledBy":"Amazon","qtyPerOrder":5,"badges":{"amazonChoice":true,"amazonPrime":false}}]}';
                break;
            case 'B071P37652':
                $response = '{"result":[{"title":"Apple iPhone X (256GB) - Silver","url":"https://www.amazon.in/dp/B071P37652","reviews":{"total_reviews":2354,"rating":"4.5","answered_questions":1000},"price":{"current_price":0,"discounted":true,"before_price":1,"savings_amount":1,"savings_percent":"8,107.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/31aRThhjLqL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31CTz-uaIoL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31dZRZd7PjL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/21mDDn7Z0kL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31oxClY%2Bh6L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41f49xAsALL._AC_SY879_.jpg"],"storeID":"","brand":"Apple","soldBy":"Appario Retail Private Ltd","fulfilledBy":"Amazon","qtyPerOrder":"na","badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B07KXCKPZZ':
                $response = '{"result":[{"title":"Vivo Y91i (Ocean Blue, 2GB RAM, 32GB Storage) with No Cost EMI/Additional Exchange Offers","url":"https://www.amazon.in/dp/B07KXCKPZZ","reviews":{"total_reviews":1828,"rating":"4.1","answered_questions":581},"price":{"current_price":0,"discounted":true,"before_price":9,"savings_amount":9,"savings_percent":"2,000.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/31I6MYy8SsL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/71441EmZHvL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31T20nOZZZL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41z2WgUEAcL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/21ta1Jz4PdL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/211-l-JhjgL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/21VwvjkV4TL._AC_SY879_.jpg"],"storeID":"","brand":"Vivo","soldBy":"Appario Retail Private Ltd","fulfilledBy":"Amazon","qtyPerOrder":5,"badges":{"amazonChoice":true,"amazonPrime":false}}]}';
                break;
            case 'B08695Z3GR':
                $response = '{"result":[{"title":"OPPO Find X2 (Ocean, 12GB RAM, 256GB Storage) with No Cost EMI/Additional bank Offers","url":"https://www.amazon.in/dp/B08695Z3GR","reviews":{"total_reviews":102,"rating":"4.2","answered_questions":117},"price":{"current_price":0,"discounted":true,"before_price":69,"savings_amount":69,"savings_percent":"5,000.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/41jQ2tsgBjL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41TTfB-QUzL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31OZ-aLc1NL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41AFSGfpb7L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31CJeEvXSqL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41veA02wj%2BL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31DtpH4cZfL._AC_SY879_.jpg"],"storeID":"","brand":"Visit the Oppo Store","soldBy":"Appario Retail Private Ltd","fulfilledBy":"Amazon","qtyPerOrder":10,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B089QSNGX5':
                $response = '{"result":[{"title":"Wireless Twins Earbuds for Oppo Find X Lamborghini Edition TWS Twins Earbuds with Mic Superior Bass Waterproof in-Ear Wireless Charging Case TWS Noise Canceling Handsfree Bass Stereo in-Ear Earbuds Earphones","url":"https://www.amazon.in/dp/B089QSNGX5","reviews":{"total_reviews":0,"rating":0,"answered_questions":0},"price":{"current_price":1,"discounted":true,"before_price":2,"savings_amount":1,"savings_percent":"1,000.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/41na78np%2BOL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41udIQ1HjoL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/417dPv9b6zL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51xj99TBIxL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51fgjZm3QFL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51c3IGGpTKL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51g8C76-VML._AC_SY879_.jpg"],"storeID":"","brand":"Sachdeal","soldBy":"sachinenterprises.","fulfilledBy":"","qtyPerOrder":5,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B08BKKXMGP':
                $response = '{"result":[{"title":"Xbox One X Cyberpunk 2077 Limited Edition Bundle (1TB)","url":"https://www.amazon.in/dp/B08BKKXMGP","reviews":{"total_reviews":15,"rating":"3.7","answered_questions":0},"price":{"current_price":0,"discounted":false,"before_price":0,"savings_amount":0,"savings_percent":0},"images":["https://images-na.ssl-images-amazon.com/images/I/41iDT7M85EL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41UZGaxj9oL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41R%2BMu9B8eL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51gXe52p4pL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51M-WEl2bVL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/417hlMSrrZL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51ng3uNwucL._AC_SY879_.jpg"],"storeID":"","brand":"Xbox","soldBy":"Cloudtail India","fulfilledBy":"Amazon","qtyPerOrder":2,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B08CFZDZLF':
                $response = '{"result":[{"title":"ASUS ROG Zephyrus G14, 14\" FHD 120Hz, Ryzen 5 4600HS, GTX 1650Ti 4GB GDDR6 Graphics, Gaming Laptop (8GB/1TB SSD/MS Office 2019/Windows 10/Eclipse Gray/Without Anime Matrix/1.6 Kg), GA401II-HE169TS","url":"https://www.amazon.in/dp/B08CFZDZLF","reviews":{"total_reviews":12,"rating":"4.4","answered_questions":12},"price":{"current_price":0,"discounted":true,"before_price":1,"savings_amount":1,"savings_percent":"25,683.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/419y8qtrWfL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51VBaJ0SE7L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51MPk-p2KGL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41%2BWUXgIRWL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41slHZy7%2B9L._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/414HWACdKCL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41SvgR%2BwzBL._AC_SY879_.jpg"],"storeID":"","brand":"ASUS","soldBy":"Appario Retail Private Ltd","fulfilledBy":"Amazon","qtyPerOrder":2,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B08CGKP829':
                $response = '{"result":[{"title":"HP Omen 15.6-inch FHD Gaming Laptop (Ryzen 5-4600H/8GB/512GB SSD/Windows 10/NVIDIA GTX 1650ti 4GB/Shadow Black/2.36 kg), 15-en0001AX","url":"https://www.amazon.in/dp/B08CGKP829","reviews":{"total_reviews":22,"rating":"3.6","answered_questions":7},"price":{"current_price":0,"discounted":true,"before_price":87,"savings_amount":87,"savings_percent":"11,717.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/41QWVI0bxzL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/21aDLTuIkKL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51nX63VWWbL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/512N0sav1HL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51Kpt6MN1wL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51UJ6%2BWBmaL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51jNp2Jq40L._AC_SY879_.jpg"],"storeID":"","brand":"Visit the HP Store","soldBy":"Appario Retail Private Ltd","fulfilledBy":"Amazon","qtyPerOrder":5,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;
            case 'B07MC487ZJ':
                $response = '{"result":[{"title":"Isle Locada by Hidesign Women\'s Clutch (Metallic)","url":"https://www.amazon.in/dp/B07MC487ZJ","reviews":{"total_reviews":48,"rating":"3.7","answered_questions":0},"price":{"current_price":1,"discounted":true,"before_price":3,"savings_amount":2,"savings_percent":"2,100.00"},"images":["https://images-na.ssl-images-amazon.com/images/I/51foDgbDIqL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/51OCPuBRgaL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31xyUc%2B3CBL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/61-LSDLBaBL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/41hloG4rrfL._AC_SY879_.jpg","https://images-na.ssl-images-amazon.com/images/I/31fi3a3tDEL._AC_SY879_.jpg"],"storeID":"","brand":"Isle Locada by Hidesign","soldBy":"Cloudtail India","fulfilledBy":"Amazon","qtyPerOrder":6,"badges":{"amazonChoice":false,"amazonPrime":false}}]}';
                break;     
            default:
                $response = "INVALID";
                break;
        }
        return $response;

    }*/

    public function importData(Request $request) {
        if($request->hasFile('import_file')){
            $file = $request->file('import_file');
            $file_extension = $file->getClientOriginalExtension();
            $allowed_extension = array('csv');
            if (in_array(strtolower($file_extension),$allowed_extension)) {
                $f = fopen($file,"r");
                $dataArray = array();
                $i=0;
                while (($fd = fgetcsv($f,0,',')) !== FALSE ) {
                    $num = count($fd);
                    for ($c=0; $c <$num ; $c++) { 
                        $dataArray[$i] = $fd[$c];
                    }
                    $i++;
                }
                $error = 0;
                foreach ($dataArray as $key => $value) {
                    $res = $this->fetchProduct($value,"Y");
                    $d = $this->csvStore($res);
                    if($d['error'] == 0){
                        $error++;
                    }
                }
                if($error == $num){
                    return redirect()->back()->with('success_msg','operation succcess');  
                }else{
                    return redirect()->back()->with('error_msg','Some data are missing to insert');  
                }
            }else{
                return redirect()->back()->with('error_msg','Please Select csv File only');    
            }
        }else{
            return redirect()->back()->with('error_msg','Please Select File');
        }
    }

    public function fetchProduct($ASIN,$CSV = null){
        $ch = curl_init();
        // switch ($SELLER) {
        //     case 'AZ':
        //         $url = "https://www.amazon.in/dp/".$ASIN;
        //         curl_setopt($ch, CURLOPT_URL,"http://api.scraperapi.com?api_key=5e10bfbd94d9e3695983ee84fa108cae&url=".$url);
        //         break;
        //     default:
        //         $url = "";
        //         curl_setopt($ch, CURLOPT_URL,"");
        //         break;
        // }
        $apis = array('5e10bfbd94d9e3695983ee84fa108cae','5a477e98679838322e050859a8a760a9','118a66837aba065abb1e593d11df013b');
        $API_KEY ="5e10bfbd94d9e3695983ee84fa108cae";
        $url = "https://www.amazon.in/dp/".$ASIN;
        curl_setopt($ch, CURLOPT_URL,"http://api.scraperapi.com?api_key=".$API_KEY."&url=".$url);     
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
        $html = curl_exec($ch);
        curl_close($ch);
        
        $document_check_regex = "'<title>404 - Document Not Found</title>'i";
        if(preg_match($document_check_regex,$html)){
            $response['error'] = true;
            $a = "Invalid ASIN Number";
            $response['prod_title'] = $response['prod_price'] = $response['prod_desc'] = $response['prod_brand'] =   $response['prod_img'] = $a;
        }else{

            $response['error'] = false;
            
            $response['asin'] = $ASIN;

            // fetch title from amazon
            $title_regex = "'<span id=\"productTitle\" class=\"a-size-large product-title-word-break\">(.*?)</span>'si";
            if(preg_match($title_regex, $html, $title)){
                $response['prod_title'] = (trim($title[1]));	
            }else{
                $response['prod_title'] = "Something Went Wrong";
            }

            // fetch title from amazon
            $category_regex = "'<a class=\"a-link-normal a-color-tertiary\" href=\"(.*?)\">(.*?)</a>'si";
            if(preg_match_all($category_regex, $html, $category)){
                
            }else{
                $response['prod_category'] = "Something Went Wrong";
            }
            if(count($category[2])>0){
                $cat = "";
                for ($i=0; $i <count($category[2]) ; $i++) { 
                    if($i == count($category[2])-1){
                        $cat .= trim($category[2][$i]);
                    }else{
                        $cat .= trim($category[2][$i])."|";
                    }
                }
                $response['prod_category'] = $cat;
            }

            // fetch price from amazon
            $price_regex = '#<span id="priceblock.*" class="a-size-medium a-color-price priceBlock.*PriceString">(.*?)</span>#';
                //echo $price_regex;
                if (preg_match($price_regex, $html, $price)) {
                    $price[1] = str_replace("₹ ","",$price[1]);
                    $price[1] = str_replace(",","",$price[1]);
                    $response['prod_price'] = $price[1];
                    //echo $price[0];
                    //echo $price[1];
                    if(strpos($price[1], " - ")){
                        list($price1,$price2) = explode(" - ", $price[1]);
                        $response['prod_price'] = (($price2-$price1)/2)+$price1;
                    }
                } else {
                    //echo json_encode($price);
                    $response['prod_price'] =  "out-of-stock";
                }

            /* Printing the Image */

            $regex = "'<span class=\"a-declarative\" data-action=\"main-image-click\" data-main-image-click=\"{}\" data-ux-click>(.*?)</span>'si";

            if(preg_match($regex, $html, $img)){
                
                preg_match('/<img.*?src="(.*?)".*?>/si', $img[1], $imgs);
                $response['prod_img'] = (trim($imgs[1]));
                
            }   else    {
                //echo "Image not met";
            }

            // fetch description from amazon
            $startat = strpos($html, '<div id="productDescription" class="a-section a-spacing-small">');
                if($startat == false){
                    $response['prod_desc'] = "No Description";
                }   else    {
                    $endsat = strpos($html, '</div>', $startat) + strlen('</div>');
                    $endsatf = strpos($html, '</div>', $endsat);
                    $result = NULL;
                    $result = substr($html, $startat, $endsatf - $startat);
                    if(strlen($result) > 0){

                    }   else    {
                        $result = "No Description";
                    }
                    $regex = "'<p>(.*?)</p>'si";
                    preg_match($regex, $result, $matches);
                    if(!$matches[0]){
                        $response['prod_desc'] = "No Description";
                    }
                    else{
                        $matches[0] = str_replace("<p>","",$matches[0]);
                        $matches[0] = str_replace("</p>","",$matches[0]);
                        $matches[0] = str_replace("\n","",$matches[0]);
                        $response['prod_desc'] = $matches[0];
                    }
                };

                // fetch brand name from amazon
                $brand_regex = "'<a id=\"bylineInfo\" class=\"a-link-normal\" href=\"(.*?)\">(.*?)</a>'si";
                // $regex = "'(?<=<a id=\"bylineInfo\" class=\"a-link-normal\" href=\"(.*?)\">)(.*?)(?=</a>)'si";

                if(preg_match_all($brand_regex, $html, $byCompany)){
                    $response['prod_brand'] = $byCompany[2][0];
                }   else    {
                    $response['prod_brand'] = "Generic";
                }
        }
        if($CSV == "Y"){
            
           return $response;
        }else{
            echo json_encode($response);
        }
    }



    /*public function fetchProduct_BKUP($ASIN){
        //$amazonISIN = "B07B9KTLJZ";
        $amazonISIN = $ASIN;

        if(true){
        //$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
            $response = array();

            //------Scraper's Api Begins---------//

            $ch = curl_init();
            $url = "http://www.amazon.in/dp/$amazonISIN";
            //echo $url;
            curl_setopt($ch, CURLOPT_URL,
                "http://api.scraperapi.com?api_key=d707a21921b0ed9b188899298637bf1c&url=".$url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Accept: application/json"
            ));

            $html = curl_exec($ch);
            curl_close($ch);

            //------Scraper's Api Ends---------//

            //$html = file_get_contents("http://www.amazon.com/gp/aw/d/$amazonISIN",false,$context);

            /*Finding the price
            $regex = "/()/";
            $regex = '#<span id="priceblock_.*" class="a-size-medium a-color-price priceBlockBuyingPriceString">(.*?)</span>#';
            
            //$regex = "#<td class=\"a-span12\"><span>(.*?)</span></td>#";

            if (preg_match($regex, $html, $price)) {
                $price[1] = str_replace("₹ ","",$price[1]);
                $price[1] = str_replace(",","",$price[1]);
            //$price = number_format((float)($price[2]/100), 2, '.', '');

            //echo "The price for amazon.com/dp/$amazonISIN is <b>$price[1]</b>";
            } else {
                echo "Sorry, the item is out-of-stock on Amazon";
            }

            Printing the title

            //echo "<br/>";
            $regex = "'<span id=\"productTitle\" class=\"a-size-large product-title-word-break\">(.*?)</span>'si";
            if(preg_match($regex, $html, $title)){
            //echo "<b>Title:</b> ".trim($title[1]);
            }   else    {
            //echo "Title not met";
            }
            $title[1] = ltrim($title[1]);
            $title[1] = rtrim($title[1]);

          

            //echo "<br/>";
            $startat = strpos($html, '<div id="productDescription" class="a-section a-spacing-small">');
            //echo $startat;
            if($startat == false){
                $result = "No Description";
            //echo "No Description";
            }   else    {
                $endsat = strpos($html, '</div>', $startat) + strlen('</div>');
                $endsatf = strpos($html, '</div>', $endsat);
            //echo "<b>Description: </b>";
                $result = NULL;
                $result = substr($html, $startat, $endsatf - $startat);
                if(strlen($result) > 0){

                }   else    {
                    $result = "No Description";
                }
            //var_dump($result);
                $regex = "'<p>(.*?)</p>'si";
                preg_match($regex, $result, $matches);
                if(!$matches[0]){
                    $matches[0] = "No Description";
                }
                else{
                    $matches[0] = str_replace("<p>","",$matches[0]);
                    $matches[0] = str_replace("</p>","",$matches[0]);
                    $matches[0] = str_replace("\n","",$matches[0]);
                }
            //echo $matches[1];
            //echo $result;

            };

         
            //echo "<br/>";

            $regex = "'<span class=\"a-declarative\" data-action=\"main-image-click\" data-main-image-click=\"{}\" data-ux-click>(.*?)</span>'si";

            if(preg_match($regex, $html, $img)){
            //echo "<b>Image:</b> $img[1] <br />";
                preg_match('/<img\s.*?\bsrc="(.*?)".*?>/si', $img[1], $imgs);
            //echo "<img src=\"$imgs[1]\" />";
            }   else    {
            //echo "Image not met";
            }

            //Fetching the Brand

            $regex = "'<a id=\"bylineInfo\" class=\"a-link-normal\" href=\"(.*?)\">(.*?)</a>'si";
            // $regex = "'(?<=<a id=\"bylineInfo\" class=\"a-link-normal\" href=\"(.*?)\">)(.*?)(?=</a>)'si";

            if(preg_match_all($regex, $html, $byCompany)){
            //echo "<b>Brand: </b>".$byCompany[2][0];
            }   else    {
                $byCompany[2][0] = "Generic";
            //echo "<b>Brand: </b>Generic";
            }
            $data = '{"prod_title": "'.$title[1].'","prod_price": "'.$price[1].'","prod_desc": "'.$matches[0].'","prod_brand": "'.$byCompany[2][0].'"}';
            echo $data;
        }
    }*/

    

    public function getAndSaveImage($images){
        $img_name = basename($images);
        Image::make($images)->save('storage/product/'.$img_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

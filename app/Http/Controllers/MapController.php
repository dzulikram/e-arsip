<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layanan;

class MapController extends Controller
{
	public function index()
	{   
        $layanan = Layanan::all();
        $data['layanan'] = $layanan;

		return view('map.map',$data);
	}

    public function performRequestCurl($uri,$method,$params)
	{
	    // persiapkan curl
	    $ch = curl_init(); 
	    // set url 
	    curl_setopt($ch, CURLOPT_URL, $uri);
	    // return the transfer as a string 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	        'accept: application/json',
	        'content-type: application/json',
	      ));
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

	    // $output contains the output string 
	    $output = curl_exec($ch); 
	    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	    // tutup curl 
	    curl_close($ch);      

	    // menampilkan hasil curl
	    return ['response' => $output,'statusCode' => $status_code ];
	}

    public function api()
	{
		$url = "10.32.1.100/zabbix/api_jsonrpc.php";
		$obj['jsonrpc'] = "2.0";
		$obj['method'] = "alert.get";
		$obj['id'] = 0;
		$obj['auth'] = "74e9ffb9c6a1e652afcdf81b46121530";
		$params = array();
		$params['output'] = "extend";
        $params['limit'] = "100";
		$params['sortfield'] = "alertid";
        $params['sortorder'] = "DESC";
        $obj['params'] = $params;
		$params = json_encode($obj);
		$req = $this->performRequestCurl($url,"POST",$params);
        $result = json_decode($req['response'])->result;
        $array_result = array();
        foreach($result as $row)
        {
            $alert = preg_replace("/\s+/", " ", $row->subject);
            $sid = explode(" ",$alert)[3];
            $status = str_replace(" ","",substr($row->message,0,6));
            $status = str_replace("[","",$status);
            $status = str_replace("]","",$status);
            
            if(empty($array_result[$sid]))
            {
                $array_result[$sid] = $status;
                $layanan = Layanan::where('sid',$sid)->first();
                if(!empty($layanan))
                {
                $layanan->status = $status;
                $layanan->save();
                }
            }                      
        }   
	}

	public function cekping(Request $request)
	{
		$cekping = Layanan::where('id',$request->id)->first();
		$url = $cekping->cekping;

		$req = $this->performRequestCurl($url,'GET','');
        $response = json_decode($req['response'])->data;
		return json_encode($response);

	}
}
<?php 

class Card_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->encryption->initialize(array('driver' => 'mcrypt'));
    }
    public function input($data,$insert = TRUE){
        
        if($insert){
            $data = array(
                    'number' => $this->encrypt_decrypt('encrypt',$data['number']),
                    'month_expired' => $data['month_expired'],
                    'year_expired' => $data['year_expired'],
                    'vcc' => $data['vcc'],
                    'cardholder' => $data['cardholder']
                );
            $this->db->insert('creditcard',$data);            
        }else{
            if(!empty($data['id'])){
                $data['number'] = $this->encrypt_decrypt('encrypt',$data['number']);
                $this->db->replace('creditcard',$data);
            }
        }
    }
    public function get($key){
        $this->db->select('*');
        $this->db->from('creditcard');
        $this->db->where('id',$key);
        $res = $this->db->get()->row();
        $data = array(
                    'pid' => $res->id,
                    'cardNumber' => $this->encrypt_decrypt('decrypt',$res->number),
                    'expireMonth' => $res->month_expired,
                    'yearExpired' => $res->year_expired,
                    'cvv' => $res->vcc,
                    'nameoncard' => $res->cardholder
                );
        return $data;
    }
    function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'asjfksacksksjcpqmksacoasmckaspocqmno';
    $secret_iv = 'acksamcpascomasocamcmascolsao';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}
}
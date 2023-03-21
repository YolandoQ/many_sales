<?php 

// if(!file_exists(APPPATH."libraries/REST_Controller.php")) exit("Erro interno");
// require(APPPATH."libraries/REST_Controller.php");

// header("Access-Control-Allow-Origin: *");
// header("access-control-allow-methods: POST, GET");
class Webservice extends REST_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
       echo "Oi";
        // try {

        //     $data = json_decode(file_get_contents("php://input"));

        //     if(empty($data)) {
        //         throw new \Exception("Erro inesperado", 400);
        //     }

        //     return $this->response([
        //         "success" => true,
        //         "message" => "Requisição realizada com sucesso",
        //         "data"  => $data
        //     ], parent::HTTP_BAD_REQUEST);
        // } catch (\Exception $e) {
        //     return $this->response([
        //         "success" => false,
        //         "message" => $e->getMessage(),
        //         "data"  => []
        //     ], $e->getCode());
        // }
    }
}

?>
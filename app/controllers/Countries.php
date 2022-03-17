<?php 
class Countries extends Controller{
    public function __construct()
    {
        $this->userModel = $this->model('Country');
    }

    public function index(){
        $user = $this->userModel->getCountries();
        $tablesRow = "";
        foreach($user as $value){
            $tablesRow .= 
            "<tr>
            <td>$value->id</td>
            <td>$value->name</td>
            <td>$value->capitalCity</td>
            <td>$value->continent</td>
            <td>$value->population</td>
            </tr>"
            ;
        }
        $data = [
            "country" => $tablesRow,
        ];
        $this->view('countries/index', $data);
    }
}
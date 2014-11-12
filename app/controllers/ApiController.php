<?php

class ApiController extends \Phalcon\Mvc\Controller {
    
    public function indexAction()    {
        echo "<h1>Hello API!</h1>";
    }
    
    public function geonameAction($country = 'US', $state = 'OH', $name = null){
        
        $geonames = Geoname::query()
            ->where("country = :country:")
            ->andWhere("admin1 = :admin1:")
            ->andWhere("name LIKE :name:")
            //->andWhere("name = :name")
            ->bind(array(
                'country' => $country,
                'admin1' => $state,
                'name' => '%' . $name . '%'
            ))
            ->execute();
        
        $this->view->disable();
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setContent(json_encode($geonames->toArray()));
        $this->response->send();
    }
    
    public function primaryAction($id){
        
        $geoname = Geoname::findFirst($id);
        
        $this->view->disable();
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setContent(json_encode($geoname->toArray()));
        $this->response->send();
        
    }
    
}
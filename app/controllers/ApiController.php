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
    
    public function sphinxAction($name){
        
        $s = new SphinxClient();
        $s->setServer("localhost", 9312);
        //$s->SetFilter("country", array('US'));
        //$s->SetFilter("fclass", array('P'));
        
        $result = $s->query("upper arlington", 'geoname');
        
        
        
        var_dump($result);
        
        var_dump($s->GetLastError());
        die();
        
        die();
        
        var_dump('fsdfsf');
        die();
        
        $cl = new SphinxClient();
        $cl->SetServer( "localhost", 3312 );
        $cl->SetMatchMode( SPH_MATCH_ANY  );
        $cl->SetFilter( 'model', array( 3 ) );
        
        var_dump($cl);
        die();
        
    }
    
}
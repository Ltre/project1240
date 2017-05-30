<?php

class ManageController extends BaseController {
    
    function actionIndex(){
        $p = arg('p', 1);
        $limit = arg('limit', 10);
        $queryRs = obj('SeniorModel')->seniorSelect(array(
            'from' => 'tourist',
            'where' => ['AND'],
            'orderBy' => 'id DESC',
            'limitBy' => [$p, $limit, 10],
        ));
        $this->list = $queryRs['list'];
        $this->pages = $queryRs['pages'];
    }

}
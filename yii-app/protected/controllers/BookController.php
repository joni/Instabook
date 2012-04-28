<?php

class BookController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionSearch()
    {
        $mdl = new BookSearchForm;
        $results = array();
        if (!empty($_POST['BookSearchForm']['query'])) {
            $mdl->query = $_POST['BookSearchForm']['query'];
            $results = $mdl->search();
        }

        $this->render('search', array(
            'model'=>$mdl, 
            'books'=>$results,
        ));
    }

    public function actionVote($id, $vote) {
        $book = new Book($id);
        $book->vote($vote);
        $this->redirect(array('view', 'id'=>$id));
    }

    public function actionView($id)
    {
        $book = new Book($id);
        $this->render('view', array ('book'=>$book));
    }

    // Uncomment the following methods and override them if needed
        /*
        public function filters()
        {
                // return the filter configuration for this controller, e.g.:
                return array(
                        'inlineFilterName',
                        array(
                                'class'=>'path.to.FilterClass',
                                'propertyName'=>'propertyValue',
                        ),
                );
        }

        public function actions()
        {
                // return external action classes, e.g.:
                return array(
                        'action1'=>'path.to.ActionClass',
                        'action2'=>array(
                                'class'=>'path.to.AnotherActionClass',
                                'propertyName'=>'propertyValue',
                        ),
                );
        }
         */
}

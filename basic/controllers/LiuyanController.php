<?php
    namespace app\controllers;
    use yii;
    use yii\web\controller;
	use app\models\Liuyan;
	use yii\widgets\LinkPager;
	use yii\data\Pagination;

	class LiuyanController extends Controller{
		public $enableCsrfValidation = false;
        public function actionIndex(){
			$query = Liuyan::find()->orderBy('l_id desc');
			$countQuery = clone $query;
			$pages = new Pagination([
				'totalCount' => $countQuery->count(),
				'pageSize'=>4
				]);
			$models = $query->offset($pages->offset)
				->limit($pages->limit)
				->all();

			return $this->render('index', [
				 'list' => $models,
				 'pages' => $pages,
			]);


		}

		public function actionAdd(){
			$request=Yii::$app->request;
			$name=$request->get('l_name');
			$liuyan=new Liuyan();
			$liuyan->l_name=''.$name.'';
			$re=$liuyan->save();
			if($re){
				$query = Liuyan::find()->orderBy('l_id desc');
			$countQuery = clone $query;
			$pages = new Pagination([
				'totalCount' => $countQuery->count(),
				'pageSize'=>4
				]);
			$models = $query->offset($pages->offset)
				->limit($pages->limit)
				->all();

			return $this->renderPartial('index', [
				 'list' => $models,
				 'pages' => $pages,
			]);
			}


		}


		public function actionDel(){
			$request=Yii::$app->request;
			$id=$request->get('id');
			$result=Liuyan::find()->where(['l_id'=>$id])->one();
			$re=$result->delete();
			if($re){
				$query = Liuyan::find()->orderBy('l_id desc');
				$countQuery = clone $query;
				$pages = new Pagination([
					'totalCount' => $countQuery->count(),
					'pageSize'=>4
					]);
				$models = $query->offset($pages->offset)
					->limit($pages->limit)
					->all();

				return $this->renderPartial('index', [
					 'list' => $models,
					 'pages' => $pages,
					]);
			}

		}

		public function actionUpdate(){
			$request=Yii::$app->request;
			$id=$request->get('id');
			$name=$request->get('name');
			
			$result=Liuyan::find()->where(['l_id'=>$id])->one();
			$result->l_name=''.$name.'';
			$re=$result->save();
			if($re){
				$query = Liuyan::find()->orderBy('l_id desc');
				$countQuery = clone $query;
				$pages = new Pagination([
					'totalCount' => $countQuery->count(),
					'pageSize'=>4
					]);
				$models = $query->offset($pages->offset)
					->limit($pages->limit)
					->all();

				return $this->renderPartial('index', [
					 'list' => $models,
					 'pages' => $pages,
					]);
			}

		}
	}
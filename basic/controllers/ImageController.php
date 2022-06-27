<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Image;
use yii\web\UploadedFile;

class ImageController extends Controller
{
    public function actionIndex()
    {
        return $this->render('imageindex.php');
    }

    public function actionUpload()
    {
        $model = new Image();

        if(Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if($model->upload()) {
                Yii::$app->session->setFlash('ImageUploaded', 'Изображение успешно загружено');
                return $this->redirect('index');
            }
        }

        return $this->render('imageupload.php', ['model' => $model]);
    }

    public function actionAll()
    {
        $model = new Image();

        $images = $model->getListOfAllImages();

        return $this->render('allimages.php', ['images' => $images]);
    }

    public function actionOne($id)
    {
        $activeRecord = new Image();
        $image = $activeRecord->getOneImage($id);

        return $this->render('oneimage.php', ['image' => $image]);
    }
}

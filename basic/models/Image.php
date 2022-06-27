<?php

namespace app\models;

use yii\web\UploadedFile;
use yii\db\ActiveRecord;

class Image extends ActiveRecord
{

    public $imageFile;

    public static function tableName()
    {
        return 'image';
    }

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
    }

    public function upload()
    {
        if($this->validate()){
            $directory = 'uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $this->directory = $directory;
            $this->save();
            $this->imageFile->saveAs('E:/yii-test/basic/web/' . $directory);
            return true;
        }else{
            return false;
        }
    }

    public function getListOfAllImages()
    {
        $images = self::find()->all();
        return $images;
    }

    public function getOneImage($id)
    {
        $image = self::find()->where(['id_' => $id])->one();
        return $image;
    }
}
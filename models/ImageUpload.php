<?php

namespace app\models;
use yii\web\UploadedFile;
use Yii;

use yii\base\Model;

class ImageUpload extends Model

{
    public function uploadFile(UploadedFile $file)
    {
        $this -> image = $file;

        $filename = strtolower(md5(uniqid($file->baseName)) . '.' . $file -> extension);

        $file->saveAs(Yii::getAlias('@web') . 'uploads/' . $filename);
        return $filename;
    }

    public $image;

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class File extends Model
{
    protected $table = 'files';

    public static function insertNew($name, $size, $mime, $location, $uploader)
    {
        $file = new File();

        $file->guid = Uuid::generate(4);
        $file->name = $name;
        $file->size = $size;
        $file->mimetype = $mime;
        $file->location = $location;
        $file->uploader = $uploader;

        $file->save();

        return $file;
    }

    public function getPreviewUrl()
    {
        return route('file', ['file' => $this->guid]);
    }

    public function getDownloadUrl()
    {
        return route('file.download', ['file' => $this->guid]);
    }

    public function getRouteKeyName()
    {
        return 'guid';
    }
}
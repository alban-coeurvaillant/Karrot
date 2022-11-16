<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as InterventionImage;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'file' ];


    public function setFileAttribute(UploadedFile $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = Str::uuid() . '.' . $extension;
        $dir = 'images/gallery/';
        $file->storeAs($dir, $filename, 'real_public');
        $this->path = $dir . $filename;
        $thumbpath = Storage::disk('real_public')->path($dir . 'thumbs/' . $filename);
        InterventionImage::make($file)->fit(800)->save($thumbpath);
        $this->thumbpath = $dir . 'thumbs/' . $filename;
    }


    public function delete()
    {
        $files = [$this->thumbpath, $this->path];
        if (parent::delete()) {
            Storage::disk('real_public')->delete($files);
        }
    }
}

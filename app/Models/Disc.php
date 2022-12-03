<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as InterventionImage;

class Disc extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'description', 'url', 'image'];

    public function setImageAttribute(?UploadedFile $file)
    {
        if (!$file) return;
        
        $extension = $file->getClientOriginalExtension();
        $filename = Str::slug($this->title) . '.' . $extension;
        $dir = 'images/disc/';
        $file->storeAs($dir, $filename, 'real_public');
        $this->image_path = $dir . $filename;
    }


    public function delete()
    {
        $files = [$this->image_path];
        if (parent::delete()) {
            Storage::disk('real_public')->delete($files);
        }
    }
}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CrmStatus
 *
 * @package App
 * @property string $title
*/
class CrmStatus extends Model
{
    protected $fillable = ['title'];
    protected $hidden = [];
    
    
    
}

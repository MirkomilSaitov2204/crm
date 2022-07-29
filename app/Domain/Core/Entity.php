<?php

namespace Domain\Core;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use OwenIt\Auditing\Contracts\Auditable;

/**
 *
 * Global Entity Model
 * @author Mirkomil Saitov <mirkomilmirabdullevich@gmail.com>
 */
class Entity extends Model
{
//    use \OwenIt\Auditing\Auditable, SoftDeletes;

    protected $guarded = [];

}

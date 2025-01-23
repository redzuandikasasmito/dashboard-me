<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisProposal extends Model
{
    //

    use SoftDeletes;
    protected $table = 'jenis_proposals';

    protected $fillable = [
        'jenis_proposal'
    ];
}

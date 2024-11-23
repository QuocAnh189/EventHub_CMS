<?php

namespace App\Domains\Conversation\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageAttachments extends Model
{
    use HasFactory;

    protected $table = 'message_attachments';

    protected $fillable = [];
}

<?php
/**
 * Generic Messenger Class
 */
namespace OrderApp\Core\Messaging;
class Messenger
{
    const TYPE_ERROR = 'error';
    const TYPE_INFO = 'info';

    public $type;
    public $message;

    public function __construct(string $message, string $type){
        $this->message = $message;
        $this->type = $type;
    }
}

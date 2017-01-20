<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessagePusherEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $message;
    public $user;
    public function __construct($message)
    {
        $this->message = $message;
        $this->user =  $this->message;
        $this->user = $this->message->send_to;
    }

    public function broadcastOn()
    {
        $user_chaner = $this->message->to;
//        return ['23760'];
        return ['23760'];
    }

    public function broadcastAs()
    {
        return 'tinnhan';
    }
}
<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageCreated extends Event
{
    use SerializesModels;
    private $username;

    private $message;

    public function __construct($username, $message)
    {
        $this->username = $username;
        $this->message = $message;
    }

    public function broadcastWith()
    {
        return [
            'username' => $this->username,
            'message' => $this->message,
        ];
    }

    public function broadcastOn()
    {
        return ['chat-channel'];
    }
}

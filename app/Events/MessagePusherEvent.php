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
    protected $message;
    protected $user;
    public function __construct($message)
    {
        $this->message = $message;
        $this->user = $this->message->send_to;
        dd($this->user );
    }
    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        $user_chaner = $this->message->to;
        return [$user_chaner];
    }
}

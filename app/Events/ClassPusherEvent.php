<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ClassPusherEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        $class_id = $this->message->entity_id;
        return [$class_id];
    }
}

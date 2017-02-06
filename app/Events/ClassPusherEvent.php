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
    public $user;
    public $user_rec;

    public function __construct($message)
    {
        $this->user_rec = $message->user_id;
        $this->message = $message->notify;
        $this->user = $this->message->sender;
//        dd($message);
    }
    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        $user_id = $this->user_rec;
        return [$user_id];
    }
    public function broadcastAs()
    {
        return 'notify';
    }
}

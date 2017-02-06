<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SystemNotifyEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $message;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
        $this->user = $message->sender;
    }
    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        //he thong
        if($this->message->entity_type_id == 6){
            return ['system-notify'];
        }
        //toan bo sinh vien
        if($this->message->entity_type_id == 7){
            return ['all-user-notify'];
        }
        //toan bo giao vien
        if($this->message->entity_type_id == 8){
            return ['all-nguoidung-notify'];
        }
    }
    public function broadcastAs()
    {
        return 'notify-sys';
    }
}
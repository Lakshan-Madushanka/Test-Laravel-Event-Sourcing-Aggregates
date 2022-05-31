<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class BrokenMailSent extends ShouldBeStored
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    //public string $uuid;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public string $uuid)
    {
       // $this->uuid = $uuid;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
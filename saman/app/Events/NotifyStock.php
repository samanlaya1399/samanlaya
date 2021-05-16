<?php

namespace App\Events;

use App\Product;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotifyStock
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public $product;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user,Product $product)
    {
        $this->user=$user;
        $this->product=$product;
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

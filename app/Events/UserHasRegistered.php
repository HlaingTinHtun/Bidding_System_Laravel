<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserHasRegistered extends Event implements  ShouldBroadcast
{
    use SerializesModels;

    public $name;
    public $bidAmount;
    public $route;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name,$bidAmount,$route)
    {
        $this->name = $name;
        $this->bidAmount = $bidAmount;
        $this->route = $route;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['test'];
    }
}

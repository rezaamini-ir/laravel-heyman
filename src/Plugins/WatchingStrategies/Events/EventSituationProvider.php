<?php

namespace Imanghafoori\HeyMan\Plugins\WatchingStrategies\Events;

use Imanghafoori\HeyMan\Plugins\WatchingStrategies\Concerns\Situationable;

class EventSituationProvider implements Situationable
{
    public function getListener()
    {
        return EventListeners::class;
    }

    public function getSituationProvider()
    {
        return EventSituations::class;
    }

    public function getForgetKey()
    {
        return 'eventChecks';
    }

    public function getMethods()
    {
        return [
            'whenEventHappens',
            'whenYouReachCheckPoint',
        ];
    }

    public static function getForgetMethods()
    {
        return ['aboutEvent'];
    }

    public static function getForgetArgs($method, $args)
    {
        return [EventListeners::class, $args];
    }
}

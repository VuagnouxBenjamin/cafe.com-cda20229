<?php

namespace App\EventSubscriber;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            BeforeEntityPersistedEvent::class => ['setProductTitleToUpper']
        ];
    }

    public function setProductTitleToUpper(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof Products)) {
            return;
        }

        $entity->setName(ucfirst($entity->getName()));
        dd(ucfirst($entity->getName()));
    }
}
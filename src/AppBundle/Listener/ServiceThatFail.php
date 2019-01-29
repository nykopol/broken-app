<?php

namespace AppBundle\Listener;


class ServiceThatFail
{

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em){ }

    public function prePersist(){ }

}

<?php declare(strict_types = 1);

namespace Tests\Type\Kdyby\Doctrine;

use Kdyby;
use Tests\Entity;

class EntityManagerDynamicReturnTypeExtensionTest
{

	/**
	 * @var \Tests\Entity\Entity
	 */
	private $entity;

	/**
	 * @var \Tests\Entity\Entity|null
	 */
	private $nullableEntity;

	public function testFind(Kdyby\Doctrine\EntityManager $em)
	{
		$this->nullableEntity = $em->find(Entity\Entity::class, []);
	}



	public function testGetReference(Kdyby\Doctrine\EntityManager $em)
	{
		$this->entity = $em->getReference(Entity\Entity::class, []);
	}



	public function testGetPartialReference(Kdyby\Doctrine\EntityManager $em)
	{
		$this->entity = $em->getPartialReference(Entity\Entity::class, []);
	}



	/**
	 * @return mixed[]
	 */
	public function getEntities(): array
	{
		return [$this->entity, $this->nullableEntity];
	}

}

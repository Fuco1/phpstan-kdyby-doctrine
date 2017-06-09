<?php declare(strict_types = 1);

namespace Tests\Type\Kdyby\Doctrine;

use Kdyby;
use Tests\Entity;

class EntityManagerRepositoryReturnTypeExtensionTest
{

	/**
	 * @var \Kdyby\Doctrine\EntityRepository
	 */
	private $entityRepository;

	public function testRepositoryReturnType(Kdyby\Doctrine\EntityManager $em)
	{
		$this->entityRepository = $em->getRepository(Entity\Entity::class);
		$this->entityRepository->find([]);
	}

}

<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Factory\CategoryFactory;
use App\Factory\CommentFactory;
use App\Factory\PostFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // $manager->flush();
        UserFactory::createOne([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'roles' => ['ROLE_ADMIN'],
        ]);

        UserFactory::createOne([
            'name' => 'User',
            'email' => 'user@example.com'
        ]);

        UserFactory::createMany(8);
        CategoryFactory::createMany(8);
        PostFactory::createMany(40, function() {
            return [
                'comments' => CommentFactory::new()->range(0, 8),
                'category' => CategoryFactory::random(),
                'user' => UserFactory::random(),
            ];
        });
    }
}

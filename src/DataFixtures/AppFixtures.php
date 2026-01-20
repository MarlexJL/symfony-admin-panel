<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Factory\CategoryFactory;
use App\Factory\CommentFactory;
use App\Factory\PostFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // $manager->flush();
        CategoryFactory::createMany(8);
        PostFactory::createMany(40, function() {
            return [
                'comments' => CommentFactory::new()->range(0, 8),
                'category' => CategoryFactory::random(),
            ];
        });
    }
}

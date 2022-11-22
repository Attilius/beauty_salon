<?php

namespace App\Factory;

use App\Entity\Customer;
use App\Entity\Employee;
use App\Repository\EmployeeRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Employee>
 *
 * @method static Employee|Proxy createOne(array $attributes = [])
 * @method static Employee[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Employee[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Employee|Proxy find(object|array|mixed $criteria)
 * @method static Employee|Proxy findOrCreate(array $attributes)
 * @method static Employee|Proxy first(string $sortedField = 'id')
 * @method static Employee|Proxy last(string $sortedField = 'id')
 * @method static Employee|Proxy random(array $attributes = [])
 * @method static Employee|Proxy randomOrCreate(array $attributes = [])
 * @method static Employee[]|Proxy[] all()
 * @method static Employee[]|Proxy[] findBy(array $attributes)
 * @method static Employee[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Employee[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static EmployeeRepository|RepositoryProxy repository()
 * @method Employee|Proxy create(array|callable $attributes = [])
 */
final class EmployeeFactory extends ModelFactory
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        parent::__construct();
        $this->passwordHasher = $passwordHasher;
    }

    protected function getDefaults(): array
    {
        return [
            'email' => self::faker()->email(),
            'roles' => [],
            'firstName' => self::faker()->firstName(),
            'lastName' => self::faker()->lastName(),
            'plainPassword' => 'password',
            'jobTitle' => self::faker()->jobTitle(),
            'jobLocation' => self::faker()->locale(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            ->afterInstantiate(function(Customer $user): void {
                if ($user->getPlainPassword()) {
                    $user->setPassword(
                        $this->passwordHasher->hashPassword($user,$user->getPlainPassword())
                    );
                }
            })
            ;
    }

    protected static function getClass(): string
    {
        return Employee::class;
    }
}

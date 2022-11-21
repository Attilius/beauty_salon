<?php

namespace App\Factory;

use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Customer>
 *
 * @method static Customer|Proxy createOne(array $attributes = [])
 * @method static Customer[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Customer[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Customer|Proxy find(object|array|mixed $criteria)
 * @method static Customer|Proxy findOrCreate(array $attributes)
 * @method static Customer|Proxy first(string $sortedField = 'id')
 * @method static Customer|Proxy last(string $sortedField = 'id')
 * @method static Customer|Proxy random(array $attributes = [])
 * @method static Customer|Proxy randomOrCreate(array $attributes = [])
 * @method static Customer[]|Proxy[] all()
 * @method static Customer[]|Proxy[] findBy(array $attributes)
 * @method static Customer[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Customer[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CustomerRepository|RepositoryProxy repository()
 * @method Customer|Proxy create(array|callable $attributes = [])
 */
final class CustomerFactory extends ModelFactory
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
            'phone' => self::faker()->phoneNumber(),
            'address1' => self::faker()->address(),
            'city' => self::faker()->city(),
            'state' => self::faker()->title(),
            'postalCode' => self::faker()->postcode(),
            'country' => self::faker()->country(),
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
        return Customer::class;
    }
}

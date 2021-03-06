<?php
declare(strict_types=1);

namespace App\Domain;

use Ramsey\Uuid\Uuid;

final class Workshop
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var Conference
     */
    private $conference;

    /**
     * @var string
     */
    private $name;

    public function __construct(string $name, Conference $conference, ?string $id = null)
    {
        $this->name = $name;
        $this->conference = $conference;
        $this->id = Uuid::isValid($id) ? $id : Uuid::uuid4();
    }

    public function getConference(): Conference
    {
        return $this->conference;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

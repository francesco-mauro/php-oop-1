<?php

class Genere {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    // Getter name--------------------------------
    public function getName(): string {
        return $this->name;
    }

    // Setter name--------------------------------
    public function setName(string $name): void {
        $this->name = $name;
    }
}

?>

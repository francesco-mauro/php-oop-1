<?php

require_once 'Genere.php';

class Movie {
    private string $title;
    private int $duration;
    private Genere $genre;

    public function __construct(string $title, int $duration, Genere $genre) {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
    }

    // Getter title-------------------------------------
    public function getTitle(): string {
        return $this->title;
    }

    // Setter title--------------------------------
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    // Getter duration--------------------------------
    public function getDuration(): int {
        return $this->duration;
    }

    // Setter duration--------------------------------
    public function setDuration(int $duration): void {
        $this->duration = $duration;
    }

    // Getter genre--------------------------------
    public function getGenre(): Genere {
        return $this->genre;
    }

    // Setter genre--------------------------------
    public function setGenre(Genere $genre): void {
        $this->genre = $genre;
    }
}

?>

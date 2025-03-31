<?php

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function isLoggedIn(): bool
    {
        return isset($_SESSION['id']);
    }

    public function logout(): void
    {
        session_destroy();
    }

    public function getId(): ?int
    {
        return $_SESSION['id'] ?? null;
    }

    public function getName(): ?string
    {
        return $_SESSION['name'] ?? null;
    }

    public function getUsername(): ?string
    {
        return $_SESSION['username'] ?? null;
    }

    public function setId(int $id): void
    {
        $_SESSION['id'] = $id;
    }

    public function setName(string $name): void
    {
        $_SESSION['name'] = $name;
    }

    public function setUsername(string $username): void
    {
        $_SESSION['username'] = $username;
    }
}

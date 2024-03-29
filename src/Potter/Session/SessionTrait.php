<?php

declare(strict_types=1);

namespace Potter\Session;

use \PHP_SESSION_ACTIVE;

trait SessionTrait
{
    final public function activate(): void
    {
        session_start();
    }
    
    final public function isActive(): bool
    {
        return session_status === PHP_SESSION_ACTIVE;
    }
    
    final public function getId(): string
    {
        return session_id();
    }
    
    final protected function setId(string $id): void
    {
        session_id($id);
    }
    
    final public function getName(): string
    {
        return session_name();
    }
    
    final protected function setName(string $name): void
    {
        session_name($name);
    }
    
    final public function getSavePath(): string
    {
        return (($path = session_save_path()) !== false) ? $path : '';
    }
    
    final protected function setSavePath(string $path): void
    {
        session_save_path($path);
    }
}
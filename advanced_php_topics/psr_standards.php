<?php

/**
 * PSR-1: Basic Coding Standards
 * File Formatting: PHP files should use only <?php and <? tags, not short tags.
 * Class Naming: Class names should follow the StudlyCaps convention (e.g., MyClass).
 * Method Naming: Method names should follow the camelCase convention (e.g., myMethod()).
 * Constants: Constants should be in UPPER_CASE (e.g., MY_CONSTANT).
 */

/**
 * PSR-2: Coding Style Guide
 * Indentation: Use 4 spaces for indentation.
 * Line Length: Limit lines to 120 characters.
 * Braces: Opening braces should be on the same line as the declaration, and closing braces should be on a new line.
 * Control Structures: Control structures (e.g., if, while) should have a space between the keyword and the opening parenthesis.
 */

class Example
{
    public function myMethod($param)
    {
        if ($param) {
            return true;
        }

        return false;
    }
}

/**
 * PSR-3: Logger Interface
 * Interface: Defines a Psr\Log\LoggerInterface with methods like info(), warning(), error(), etc.
 * Logging Levels: Specifies logging levels such as DEBUG, INFO, NOTICE, WARNING, ERROR, CRITICAL, ALERT, EMERGENCY.
 */

use Psr\Log\LoggerInterface;

class MyService
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function performAction()
    {
        $this->logger->info('Action performed.');
    }
}

/**
 * PSR-4: Autoloading Standard
 * Namespace to Directory Mapping: Classes should be mapped to a file system path based on their namespace.
 * Base Directory: The base directory for namespaces should correspond to the namespace prefix.
 */

namespace Acme\Package;

class MyClass
{
    // Class body
}

/**
 * PSR-7: HTTP Message Interface
 * Request Interface: Psr\Http\Message\RequestInterface includes methods for getting request data (e.g., getMethod(), getUri()).
 * Response Interface: Psr\Http\Message\ResponseInterface includes methods for getting response data (e.g., getStatusCode(), getBody()).
 */

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

function handleRequest(RequestInterface $request): ResponseInterface
{
    // Handle request and return a response
}

/**
 * PSR-12: Extended Coding Style Guide
 * Visibility: All properties and methods should have visibility declared (e.g., public, protected, private).
 * Namespaces: Namespace declarations should be at the top of the file, before any other code.
 * File Formatting: Adds more detailed rules on spacing and alignment.
 */

namespace Acme\Package;

use Psr\Log\LoggerInterface;

class MyService
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function performAction(): void
    {
        $this->logger->info('Action performed.');
    }
}

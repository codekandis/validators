<?php declare( strict_types = 1 );
namespace CodeKandis\Validators\ArrayValidators;

use RuntimeException;

/**
 * Represents an exception if an array validator mapping already exists.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class ArrayValidatorMappingExistsException extends RuntimeException
{
}

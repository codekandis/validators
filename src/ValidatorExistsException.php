<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use LogicException;

/**
 * Represents an exception if a validator already exists.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorExistsException extends LogicException
{
}

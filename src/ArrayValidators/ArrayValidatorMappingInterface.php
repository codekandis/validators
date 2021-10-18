<?php declare( strict_types = 1 );
namespace CodeKandis\Validators\ArrayValidators;

use CodeKandis\Validators\ValidatorInterface;

/**
 * Represents the interface of all array data validator mappings.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArrayValidatorMappingInterface
{
	/**
	 * Gets the array key to validate its array value.
	 * @return string The array key to validate its array value.
	 */
	public function getKey(): string;

	/**
	 * Gets the validator of the array value.
	 * @return ValidatorInterface The validator of the array value.
	 */
	public function getValidator(): ValidatorInterface;
}

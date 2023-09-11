<?php declare( strict_types = 1 );
namespace CodeKandis\Validators\ArrayValidators;

use CodeKandis\Validators\ValidatorInterface;

/**
 * Represents the interface of any mapped array validator.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
interface MappedArrayValidatorInterface extends ValidatorInterface
{
	/**
	 * Gets the array validator mappings of the array.
	 * @return ArrayValidatorMappingsInterface The array validator mappings of the array.
	 */
	public function getArrayValidatorMappings(): ArrayValidatorMappingsInterface;

	/**
	 * {@inheritDoc}
	 * Validates the array.
	 * @param mixed $value The array to validate.
	 * @return bool True if the array is valid, false otherwise.
	 */
	public function validate( $value ): bool;
}
